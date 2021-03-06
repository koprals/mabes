<?php
    Configure::write('CakePdf', array(
        'engine' => 'CakePdf.Dompdf',
        'options' => array(
            'print-media-type' => false,
            'outline' => true,
            'dpi' => 96
        ),
        'margin' => array(
            'bottom' => 15,
            'left' => 50,
            'right' => 30,
            'top' => 45
        ),
        'orientation' => 'portrait',
        'download' => true
    ));
?>
<?php
class PersonnelsController extends AppController
{
	var $ControllerName		=	"Personnels";
	var $ModelName			=	"Personnel";
	var $helpers			=	array("Text","Aimfox");
	var $uses				=	"Personnel";
	var $components = array("RequestHandler");

	function beforeFilter()
	{
		parent::beforeFilter();
		$this->set("ControllerName",$this->ControllerName);
		$this->set("ModelName",$this->ModelName);
		$this->set('lft_menu_category_id',"11");

		//CHECK PRIVILEGES
		$this->loadModel("MyAco");
		$find					=	$this->MyAco->find("first",array(
										"conditions"	=>	array(
											"LOWER(MyAco.alias)"	=>	strtolower("DataPersonnels")
										)
									));
		$this->aco_id			=	$find["MyAco"]["id"];
		$this->set("aco_id",$this->aco_id);

    //DEFINE MATRA
    $this->loadModel('Matra');
    $list_matra = $this->Matra->find('list');

    //DEFINE CORPS
    $this->loadModel('Corp');
    $list_corp  = $this->Corp->find('list');

    $this->set(compact('list_corp','list_matra'));
	}

	function Index($page=1,$viewpage=50)
	{
		if($this->access[$this->aco_id]["_read"] != "1")
		{
			$this->layout	=	"no_access";
			return;
		}

		$this->loadModel('Matra');
		$matras	= $this->Matra->find('list');

		$this->loadModel('Corp');
		$corps	= $this->Corp->find('list');

		$this->Session->delete("Search.".$this->ControllerName);
		$this->Session->delete('Search.'.$this->ControllerName.'Operand');
		$this->Session->delete('Search.'.$this->ControllerName.'ViewPage');
		$this->Session->delete('Search.'.$this->ControllerName.'Sort');
		$this->Session->delete('Search.'.$this->ControllerName.'Page');
		$this->Session->delete('Search.'.$this->ControllerName.'Conditions');
		$this->Session->delete('Search.'.$this->ControllerName.'parent_id');
		$this->set(compact("page","viewpage","matras","corps"));
	}

	function Api_PersonnelStudiesSummary() {
    	$this->autoRender = false;
		$counts = $this->Personnel->query('
			SELECT YEAR(depart) as Tahun,
			SUM(CASE WHEN `status`= 0 then 1 else 0 end) as Berjalan,
			SUM(CASE WHEN `status`= 3 then 1 else 0 end) as DaftarBaru
			FROM process
			GROUP BY YEAR(depart)
		');
		return json_encode($counts);
	}

	function ListItem()
	{
		$this->layout	=	"ajax";

		if($this->access[$this->aco_id]["_read"] != "1")
		{
			$data			=	array();
			$this->set(compact("data"));
			return;
		}

		$this->loadModel($this->ModelName);
		//DEFINE LAYOUT, LIMIT AND OPERAND
		$viewpage			=	empty($this->params['named']['limit']) ? 50 : $this->params['named']['limit'];
		$order				=	array("{$this->ModelName}.id_personnel" => "ASC");
		$operand			=	"AND";

		//DEFINE SEARCH DATA
		if(!empty($this->request->data))
		{
			$cond_search	=	array();
			$operand		=	$this->request->data[$this->ModelName]['operator'];
			$this->Session->delete('Search.'.$this->ControllerName);

			if(!empty($this->request->data['Search']['name']))
			{
				$cond_search["{$this->ModelName}.personnel_name LIKE "]			=	"%".$this->data['Search']['name']."%";
			}

			if(!empty($this->request->data['Search']['personel_matra']))
			{
				$cond_search["{$this->ModelName}.personel_matra"]				=	$this->data['Search']['personel_matra'];
			}

			if(!empty($this->request->data['Search']['personel_corps']))
			{
				$cond_search["{$this->ModelName}.personel_corps"]				=	$this->data['Search']['personel_corps'];
			}

			if(!empty($this->request->data['Search']['personel_occupation']))
			{
				$cond_search["{$this->ModelName}.personel_occupation LIKE "]			=	"%".$this->data['Search']['personel_occupation']."%";
			}

			if($this->request->data["Search"]['reset']=="0")
			{
				$this->Session->write("Search.".$this->ControllerName,$cond_search);
				$this->Session->write('Search.'.$this->ControllerName.'Operand',$operand);
			}
		}

		$this->Session->write('Search.'.$this->ControllerName.'Viewpage',$viewpage);
		$this->Session->write('Search.'.$this->ControllerName.'Sort',(empty($this->params['named']['sort']) or !isset($this->params['named']['sort'])) ? $order : $this->params['named']['sort']." ".$this->params['named']['direction']);

		$cond_search		=	array();
		$filter_paginate	=	array();
		$this->paginate		=	array(
									"{$this->ModelName}"	=>	array(
										"order"				=>	$order,
										'limit'				=>	$viewpage,
										'recursive'		=>	2
									)
								);
                //debug($data)ll

		$ses_cond			=	$this->Session->read("Search.".$this->ControllerName);
		$cond_search		=	isset($ses_cond) ? $ses_cond : array();
		$ses_operand		=	$this->Session->read("Search.".$this->ControllerName."Operand");
		$operand			=	isset($ses_operand) ? $ses_operand : "AND";
		$merge_cond			=	empty($cond_search) ? $filter_paginate : array_merge($filter_paginate,array($operand => $cond_search) );
		$data				=	$this->paginate("{$this->ModelName}",$merge_cond);
		debug($data);


		$this->Session->write('Search.'.$this->ControllerName.'Conditions',$merge_cond);

		if(isset($this->params['named']['page']) && $this->params['named']['page'] > $this->params['paging'][$this->ModelName]['pageCount'])
		{
			$this->params['named']['page']	=	$this->params['paging'][$this->ModelName]['pageCount'];
		}
		$page				=	empty($this->params['named']['page']) ? 1 : $this->params['named']['page'];
		$this->Session->write('Search.'.$this->ControllerName.'Page',$page);
		$this->set(compact('data','page','viewpage'));
	}


	function Excel()
	{
		if($this->access[$this->aco_id]["_read"] != "1")
		{
			$this->layout	=	"no_access";
			return;
		}

		if(isset($_GET['debug']) && $_GET['debug'] == "1")
			$this->layout		=	"ajax";
		else
			$this->layout		=	"xls";

		$this->response->type(array('xls' => 'application/vnd.ms-excel'));
    	$this->response->type('xls');

		$this->{$this->ModelName}->BindDefault(false);
		$this->{$this->ModelName}->VirtualFieldActivated();

		$order				=	$this->Session->read("Search.".$this->ControllerName."Sort");
		$viewpage			=	$this->Session->read("Search.".$this->ControllerName."Viewpage");
		$page				=	$this->Session->read("Search.".$this->ControllerName."Page");
		$conditions			=	$this->Session->read("Search.".$this->ControllerName."Conditions");

		$this->paginate		=	array(
									"{$this->ModelName}"	=>	array(
										"order"				=>	$order,
										"limit"				=>	$viewpage,
										"conditions"		=>	$conditions,
										"page"				=>	$page
									)
								);
		$data				=	$this->paginate("{$this->ModelName}",$conditions);
		$title				=	$this->ModelName;
		$filename			=	$this->ModelName."_".date("dMY");
		$this->set(compact("data","title","page","viewpage","filename"));
	}

	function Add()
	{
		if($this->access[$this->aco_id]["_create"] != "1")
		{
			$this->layout	=	"no_access";
			return;
		}

		if(!empty($this->request->data))
		{
			$this->{$this->ModelName}->set($this->request->data);
			if($this->{$this->ModelName}->validates())
			{
				//Configure::write('debug',2);
				$save	=	$this->{$this->ModelName}->save($this->request->data);
				$ID		=	$this->{$this->ModelName}->getLastInsertId();

				//////////////////////////////////////START SAVE FOTO/////////////////////////////////////////////
				if(!empty($this->request->data[$this->ModelName]["image1"]["name"]))
				{
					$tmp_name							=	$this->request->data[$this->ModelName]["image1"]["name"];
					$tmp									=	$this->request->data[$this->ModelName]["image1"]["tmp_name"];
					$mime_type						=	$this->request->data[$this->ModelName]["image1"]["type"];

					$path_tmp							=	ROOT.DS.'app'.DS.'tmp'.DS.'upload'.DS;
						if(!is_dir($path_tmp)) mkdir($path_tmp,0777);

					$ext									=	pathinfo($tmp_name,PATHINFO_EXTENSION);
					$tmp_file_name				=	md5(time());
					$tmp_images1_img			=	$path_tmp.$tmp_file_name.".".$ext;
					$upload 							=	move_uploaded_file($tmp,$tmp_images1_img);
					if($upload)
					{
						//RESIZE BIG
						$error_upload["profil"]		=	"Sorry, there is problem when upload file.";
						$resize							=	$this->General->ResizeImageContent(
																$tmp_images1_img,
																$this->settings["cms_url"],
																$ID,
																$this->ModelName,
																"profil",
																$mime_type,
																300,
																300,
																"cropRatio"
															);

					}
					@unlink($tmp_images1_img);
					//debug($upload);
				}
				if(!empty($this->request->data[$this->ModelName]["image2"]["name"]))
				{
					$tmp_name							=	$this->request->data[$this->ModelName]["image2"]["name"];
					$tmp									=	$this->request->data[$this->ModelName]["image2"]["tmp_name"];
					$mime_type						=	$this->request->data[$this->ModelName]["image2"]["type"];

					$path_tmp							=	ROOT.DS.'app'.DS.'tmp'.DS.'upload'.DS;
						if(!is_dir($path_tmp)) mkdir($path_tmp,0777);

					$ext									=	pathinfo($tmp_name,PATHINFO_EXTENSION);
					$tmp_file_name				=	md5(time());
					$tmp_images2_img			=	$path_tmp.$tmp_file_name.".".$ext;
					$upload 							=	move_uploaded_file($tmp,$tmp_images2_img);
					if($upload)
					{
						//RESIZE BIG
						$error_upload["medical"]		=	"Sorry, there is problem when upload file.";
						$resize							=	$this->General->ResizeImageContent(
																$tmp_images2_img,
																$this->settings["cms_url"],
																$ID,
																$this->ModelName,
																"medical",
																$mime_type,
																300,
																300,
																"cropRatio"
															);

					}
					@unlink($tmp_images2_img);
					//debug($upload);
				}
				if(!empty($this->request->data[$this->ModelName]["image3"]["name"]))
				{
					$tmp_name							=	$this->request->data[$this->ModelName]["image3"]["name"];
					$tmp									=	$this->request->data[$this->ModelName]["image3"]["tmp_name"];
					$mime_type						=	$this->request->data[$this->ModelName]["image3"]["type"];

					$path_tmp							=	ROOT.DS.'app'.DS.'tmp'.DS.'upload'.DS;
						if(!is_dir($path_tmp)) mkdir($path_tmp,0777);

					$ext									=	pathinfo($tmp_name,PATHINFO_EXTENSION);
					$tmp_file_name				=	md5(time());
					$tmp_images3_img			=	$path_tmp.$tmp_file_name.".".$ext;
					$upload 							=	move_uploaded_file($tmp,$tmp_images3_img);
					if($upload)
					{
						//RESIZE BIG
						$error_upload["passport"]		=	"Sorry, there is problem when upload file.";
						$resize							=	$this->General->ResizeImageContent(
																$tmp_images3_img,
																$this->settings["cms_url"],
																$ID,
																$this->ModelName,
																"passport",
																$mime_type,
																300,
																300,
																"cropRatio"
															);

					}
					@unlink($tmp_images3_img);
					//debug($upload);
				}
				if(!empty($this->request->data[$this->ModelName]["image4"]["name"]))
				{
					$tmp_name							=	$this->request->data[$this->ModelName]["image4"]["name"];
					$tmp									=	$this->request->data[$this->ModelName]["image4"]["tmp_name"];
					$mime_type						=	$this->request->data[$this->ModelName]["image4"]["type"];

					$path_tmp							=	ROOT.DS.'app'.DS.'tmp'.DS.'upload'.DS;
						if(!is_dir($path_tmp)) mkdir($path_tmp,0777);

					$ext									=	pathinfo($tmp_name,PATHINFO_EXTENSION);
					$tmp_file_name				=	md5(time());
					$tmp_images4_img			=	$path_tmp.$tmp_file_name.".".$ext;
					$upload 							=	move_uploaded_file($tmp,$tmp_images4_img);
					if($upload)
					{
						//RESIZE BIG
						$error_upload["security"]		=	"Sorry, there is problem when upload file.";
						$resize							=	$this->General->ResizeImageContent(
																$tmp_images4_img,
																$this->settings["cms_url"],
																$ID,
																$this->ModelName,
																"security",
																$mime_type,
																300,
																300,
																"cropRatio"
															);

					}
					@unlink($tmp_images4_img);
					//debug($upload);
				}
				//////////////////////////////////////START SAVE FOTO/////////////////////////////////////////////
				$this->redirect(array("action"=>"SuccessAdd",$ID));
			}//END IF VALIDATE
		}//END IF NOT EMPTY
	}

	function Edit($ID=NULL,$page=1,$viewpage=50)
	{
		if(($ID == $this->super_admin_id && $this->profile["Admin"]["id"] != $this->super_admin_id) or $this->access[$this->aco_id]["_update"] != "1")
		{
			$this->layout	=	"no_access";
			return;
		}

		$detail =	$this->{$this->ModelName}->find('first', array(
									'conditions' => array(
										"{$this->ModelName}.id_personnel"		=>	$ID
									)
								));

		if(empty($detail))
		{
			$this->layout	=	"ajax";
			$this->render("/errors/error404");
			return;
		}

		if (empty($this->data))
		{
			$this->data = $detail;
		}
		else
		{
			$this->{$this->ModelName}->set($this->data);
			if($this->{$this->ModelName}->validates())
			{
				$save		=	$this->{$this->ModelName}->save($this->data,false);

				//////////////////////////////////////START SAVE FOTO/////////////////////////////////////////////
				if(!empty($this->request->data[$this->ModelName]["image1"]["name"]))
				{
					$tmp_name							=	$this->request->data[$this->ModelName]["image1"]["name"];
					$tmp									=	$this->request->data[$this->ModelName]["image1"]["tmp_name"];
					$mime_type						=	$this->request->data[$this->ModelName]["image1"]["type"];

					$path_tmp							=	ROOT.DS.'app'.DS.'tmp'.DS.'upload'.DS;
						if(!is_dir($path_tmp)) mkdir($path_tmp,0777);

					$ext									=	pathinfo($tmp_name,PATHINFO_EXTENSION);
					$tmp_file_name				=	md5(time());
					$tmp_images1_img			=	$path_tmp.$tmp_file_name.".".$ext;
					$upload 							=	move_uploaded_file($tmp,$tmp_images1_img);
					if($upload)
					{
						//RESIZE BIG
						$error_upload["profil"]		=	"Sorry, there is problem when upload file.";
						$resize							=	$this->General->ResizeImageContent(
																$tmp_images1_img,
																$this->settings["cms_url"],
																$ID,
																$this->ModelName,
																"profil",
																$mime_type,
																300,
																300,
																"cropRatio"
															);

					}
					@unlink($tmp_images1_img);
					//debug($upload);
				}
				if(!empty($this->request->data[$this->ModelName]["image2"]["name"]))
				{
					$tmp_name							=	$this->request->data[$this->ModelName]["image2"]["name"];
					$tmp									=	$this->request->data[$this->ModelName]["image2"]["tmp_name"];
					$mime_type						=	$this->request->data[$this->ModelName]["image2"]["type"];

					$path_tmp							=	ROOT.DS.'app'.DS.'tmp'.DS.'upload'.DS;
						if(!is_dir($path_tmp)) mkdir($path_tmp,0777);

					$ext									=	pathinfo($tmp_name,PATHINFO_EXTENSION);
					$tmp_file_name				=	md5(time());
					$tmp_images2_img			=	$path_tmp.$tmp_file_name.".".$ext;
					$upload 							=	move_uploaded_file($tmp,$tmp_images2_img);
					if($upload)
					{
						//RESIZE BIG
						$error_upload["medical"]		=	"Sorry, there is problem when upload file.";
						$resize							=	$this->General->ResizeImageContent(
																$tmp_images2_img,
																$this->settings["cms_url"],
																$ID,
																$this->ModelName,
																"medical",
																$mime_type,
																300,
																300,
																"cropRatio"
															);

					}
					@unlink($tmp_images2_img);
					//debug($upload);
				}
				if(!empty($this->request->data[$this->ModelName]["image3"]["name"]))
				{
					$tmp_name							=	$this->request->data[$this->ModelName]["image3"]["name"];
					$tmp									=	$this->request->data[$this->ModelName]["image3"]["tmp_name"];
					$mime_type						=	$this->request->data[$this->ModelName]["image3"]["type"];

					$path_tmp							=	ROOT.DS.'app'.DS.'tmp'.DS.'upload'.DS;
						if(!is_dir($path_tmp)) mkdir($path_tmp,0777);

					$ext									=	pathinfo($tmp_name,PATHINFO_EXTENSION);
					$tmp_file_name				=	md5(time());
					$tmp_images3_img			=	$path_tmp.$tmp_file_name.".".$ext;
					$upload 							=	move_uploaded_file($tmp,$tmp_images3_img);
					if($upload)
					{
						//RESIZE BIG
						$error_upload["passport"]		=	"Sorry, there is problem when upload file.";
						$resize							=	$this->General->ResizeImageContent(
																$tmp_images3_img,
																$this->settings["cms_url"],
																$ID,
																$this->ModelName,
																"passport",
																$mime_type,
																300,
																300,
																"cropRatio"
															);

					}
					@unlink($tmp_images3_img);
					//debug($upload);
				}
				if(!empty($this->request->data[$this->ModelName]["image4"]["name"]))
				{
					$tmp_name							=	$this->request->data[$this->ModelName]["image4"]["name"];
					$tmp									=	$this->request->data[$this->ModelName]["image4"]["tmp_name"];
					$mime_type						=	$this->request->data[$this->ModelName]["image4"]["type"];

					$path_tmp							=	ROOT.DS.'app'.DS.'tmp'.DS.'upload'.DS;
						if(!is_dir($path_tmp)) mkdir($path_tmp,0777);

					$ext									=	pathinfo($tmp_name,PATHINFO_EXTENSION);
					$tmp_file_name				=	md5(time());
					$tmp_images4_img			=	$path_tmp.$tmp_file_name.".".$ext;
					$upload 							=	move_uploaded_file($tmp,$tmp_images4_img);
					if($upload)
					{
						//RESIZE BIG
						$error_upload["security"]		=	"Sorry, there is problem when upload file.";
						$resize							=	$this->General->ResizeImageContent(
																$tmp_images4_img,
																$this->settings["cms_url"],
																$ID,
																$this->ModelName,
																"security",
																$mime_type,
																300,
																300,
																"cropRatio"
															);

					}
					@unlink($tmp_images4_img);
					//debug($upload);
				}
				//////////////////////////////////////START SAVE FOTO/////////////////////////////////////////////

				$this->redirect(array('action' => 'SuccessEdit', $ID,$page,$viewpage));
			}
		}
		$this->set(compact("ID","detail","aro_id_list","page","viewpage"));
	}

	function View($ID=NULL)
	{
		if($this->access[$this->aco_id]["_read"] != "1")
		{
			$this->layout	=	"no_access";
			return;
		}

		$this->loadModel($this->ModelName);
		$this->{$this->ModelName}->BindImageProfil();
		$this->{$this->ModelName}->BindImageMedical();
		$this->{$this->ModelName}->BindImagePassport();
		$this->{$this->ModelName}->BindImageSecurity();
		$this->{$this->ModelName}->VirtualFieldActivated();

		$detail = $this->{$this->ModelName}->find('first', array(
			'conditions' => array(
				"{$this->ModelName}.id_personnel"		=>	$ID
			),
			'recursive'	=>	1
		));

		//debug($detail);
    $this->loadModel('Process');
		$historicalEdus	=	$this->Process->find('all', array(
			'conditions'	=>	array(
				'Process.personnel_id'	=> $ID
			),
			'recursive'	=>	2
		));

		debug($historicalEdus);
		if(empty($detail))
		{
			$this->layout	=	"ajax";
			$this->set(compact("ID","data"));
			$this->render("/errors/error404");
			return;
		}
		$this->set(compact("ID","detail","historicalEdus"));
	}

	function Pdf($ID=NULL)
  {
    if($this->access[$this->aco_id]["_read"] != "1")
    {
      $this->layout	=	"no_access";
      return;
    }

    $this->pdfConfig = array(
						'orientation' => 'portrait',//or landscape
						'filename' => "testpdf",
						'download' => false,
						'margin' => array(
              'bottom' => 15,
              'left' => 50,
              'right' => 30,
              'top' => 45
					),
					'engine' => 'CakePdf.DomPdf',
				);

    //$this->layout	=	"ajax";
    $this->loadModel($this->ModelName);
		$this->{$this->ModelName}->BindImageProfil();
    $this->{$this->ModelName}->VirtualFieldActivated();

    $detail = $this->{$this->ModelName}->find('first', array(
      'conditions' => array(
        "{$this->ModelName}.id_personnel"		=>	$ID
      ),
      'recursive' =>  2
    ));

    $this->loadModel('Process');
		$historicalEdus	=	$this->Process->find('all', array(
			'conditions'	=>	array(
				'Process.personnel_id'	=> $ID
			),
			'recursive'	=>	2
		));
		//debug($detail);

    $title				=	$this->ModelName;
		$filename			=	$this->ModelName."_".date("dMY");

    $this->set(compact("ID","detail","title","filename","historicalEdus"));
  }

	function ChangeStatus($ID=NULL,$status)
	{
		if($this->access[$this->aco_id]["_update"] != "1")
		{
			echo json_encode(array("data"=>array("message"=>"No privileges")));
			$this->autoRender	=	false;
			return;
		}

		if($ID == $this->profile["Admin"]["id"])
		{
			echo json_encode(array("data"=>array("message"=>"Cannot change status for your self")));
			$this->autoRender	=	false;
			return;
		}

		$detail = $this->{$this->ModelName}->find('first', array(
			'conditions' => array(
				"{$this->ModelName}.id"		=>	$ID
			)
		));

		if(empty($detail))
		{
			$message	=	"Item not found.";
		}
		else
		{
			$data[$this->ModelName]["id"]		=	$ID;
			$data[$this->ModelName]["status"]	=	$status;
			$this->{$this->ModelName}->save($data);
			$message	=	"Data has updated.";
		}

		echo json_encode(array("data"=>array("message"=>$message)));
		$this->autoRender	=	false;
	}

	function Delete($ID=NULL)
	{
		if($this->access[$this->aco_id]["_delete"] != "1")
		{
			echo json_encode(array("data"=>array("status" => "0","message"=>"No privileges")));
			$this->autoRender	=	false;
			return;
		}

		$detail = $this->{$this->ModelName}->find('first', array(
			'conditions' => array(
				"{$this->ModelName}.id_personnel"		=>	$ID
			)
		));
		$resultStatus		=	"0";

		if(empty($detail))
		{
			$message		=	"Item not found.";
			$resultStatus	=	"0";
		}
		else
		{
			$this->{$this->ModelName}->delete($ID,false);
			$message		=	"Data has deleted.";
			$resultStatus	=	"1";
		}

		echo json_encode(array("data"=>array("status" => $resultStatus ,"message"=>$message)));
		$this->autoRender	=	false;
	}

	function SuccessAdd($ID=NULL)
	{
		$data = $this->{$this->ModelName}->find('first', array(
			'conditions' => array(
				"{$this->ModelName}.id_personnel"		=> $ID
			)
		));
		if(empty($data))
		{
			$this->layout	=	"ajax";
			$this->render("/errors/error404");
		}
		$this->set(compact("ID"));
	}

	function SuccessEdit($ID=NULL,$page=1,$viewpage=50)
	{
		$data = $this->{$this->ModelName}->find('first', array(
			'conditions' => array(
				"{$this->ModelName}.id_personnel" 		=> $ID
			)
		));

		if(empty($data))
		{
			$this->layout	=	"ajax";
			$this->render("/errors/error404");
		}
		$this->set(compact("ID","page","viewpage"));
	}
}
?>
