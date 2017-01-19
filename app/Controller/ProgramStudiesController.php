<?php
class ProgramStudiesController extends AppController
{
	var $ControllerName		=	"ProgramStudies";
	var $ModelName			=	"ProgramStudy";
	var $helpers			=	array("Text","Aimfox");
	var $uses				=	"ProgramStudy";
	var $components = array('RequestHandler');

	function beforeFilter()
	{
		parent::beforeFilter();
		$this->set("ControllerName",$this->ControllerName);
		$this->set("ModelName",$this->ModelName);
		$this->set('lft_menu_category_id',"10");

		//CHECK PRIVILEGES
		$this->loadModel("MyAco");
		$find					=	$this->MyAco->find("first",array(
										"conditions"	=>	array(
											"LOWER(MyAco.alias)"	=>	strtolower("ProgramStudy")
										)
									));
		$this->aco_id			=	$find["MyAco"]["id"];
		$this->set("aco_id",$this->aco_id);

		//DEFINE COUNTRY
		$this->loadModel('Country');
		$country_list	=	$this->Country->find('list', array(
				'order'	=>	'Country.country_name  ASC',
				'fields'	=>	'Country.country_name'
				)
		);

		//DEFINE JENIS PENDIDIDKAN
		$this->loadModel('EducationType');
		$study_list	=	$this->EducationType->find('list', array(
				'order'	=>	'EducationType.edu_type ASC',
				'fields'	=> 'EducationType.edu_type'
			)
		);

		$this->set(compact('country_list', 'study_list'));
	}

	function Index($page=1,$viewpage=50)
	{
		if($this->access[$this->aco_id]["_read"] != "1")
		{
			$this->layout	=	"no_access";
			return;
		}

		$this->Session->delete("Search.".$this->ControllerName);
		$this->Session->delete('Search.'.$this->ControllerName.'Operand');
		$this->Session->delete('Search.'.$this->ControllerName.'ViewPage');
		$this->Session->delete('Search.'.$this->ControllerName.'Sort');
		$this->Session->delete('Search.'.$this->ControllerName.'Page');
		$this->Session->delete('Search.'.$this->ControllerName.'Conditions');
		$this->Session->delete('Search.'.$this->ControllerName.'parent_id');
		$this->set(compact("page","viewpage"));
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
		$order				=	array("{$this->ModelName}.id" => "DESC");
		$operand			=	"AND";

		//DEFINE SEARCH DATA
		if(!empty($this->request->data))
		{
			$cond_search	=	array();
			$operand		=	$this->request->data[$this->ModelName]['operator'];
			$this->Session->delete('Search.'.$this->ControllerName);

			if(!empty($this->request->data['Search']['id']))
			{
				$cond_search["{$this->ModelName}.id"]					=	$this->data['Search']['id'];
			}

			if(!empty($this->request->data['Search']['name']))
			{
				$cond_search["{$this->ModelName}.fullname LIKE "]			=	"%".$this->data['Search']['name']."%";
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

		//DEFINE NEWS CATEGORY
		$this->loadModel("MyAro");
		if(!empty($this->request->data))
		{
			$this->{$this->ModelName}->set($this->request->data);
			if($this->{$this->ModelName}->validates())
			{
				//Configure::write('debug' , 2);
				$save	=	$this->{$this->ModelName}->save($this->request->data);
				$ID		=	$this->{$this->ModelName}->getLastInsertId();

				if(!empty($save))
				{
					$this->request->data['AvailableCourse']['program_study_id']	= $this->{$this->ModelName}->id;
					$this->{$this->ModelName}->AvailableCourse->save($this->request->data);
				}

				if(!empty($this->request->data[$this->ModelName]["file"]["name"])) {
 					$saveData[$this->ModelName] = array(
 	          'file_name' => $this->request->data[$this->ModelName]['file']['name'],
 	          'file_size' => $this->request->data[$this->ModelName]['file']['size'],
 	          'file_type' => $this->request->data[$this->ModelName]['file']['type'],
 	        );

 	        $saveFile = $this->{$this->ModelName}->save($saveData);
 	        $url = 'contents/ProgramStudy/'.$this->{$this->ModelName}->id.'/';

 	        $folder = ROOT.DS.'app'.DS.'webroot'.DS.'contents'.DS.$this->ModelName;
 	        if(!is_dir($folder)) mkdir($folder,0755);

 	        $folder = $folder.DS.$this->{$this->ModelName}->id;
 	        if(!is_dir($folder)) mkdir($folder,0755);

 	        $fileLocation = $folder.DS.$saveData[$this->ModelName]['file_name'];
 					//debug($fileLocation);

 	        $upload = move_uploaded_file($this->request->data[$this->ModelName]['file']['tmp_name'],$fileLocation);
 	        if($upload) {
 						//var_dump("sukses");
 	          $this->{$this->ModelName}->saveField('url', $url);
 	        }
 				}
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

		$detail 			=	$this->{$this->ModelName}->find('first', array(
									'conditions' => array(
										"{$this->ModelName}.id"		=>	$ID
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
				//Configure::write('debug' , 2);
				$save	=	$this->{$this->ModelName}->save($this->request->data);

				if(!empty($this->request->data[$this->ModelName]["file"]["name"])) {
 					$saveData[$this->ModelName] = array(
 	          'file_name' => $this->request->data[$this->ModelName]['file']['name'],
 	          'file_size' => $this->request->data[$this->ModelName]['file']['size'],
 	          'file_type' => $this->request->data[$this->ModelName]['file']['type'],
 	        );

 	        $saveFile = $this->{$this->ModelName}->save($saveData);
 	        $url = 'contents/ProgramStudy/'.$this->{$this->ModelName}->id.'/';

 	        $folder = ROOT.DS.'app'.DS.'webroot'.DS.'contents'.DS.$this->ModelName;
 	        if(!is_dir($folder)) mkdir($folder,0755);

 	        $folder = $folder.DS.$this->{$this->ModelName}->id;
 	        if(!is_dir($folder)) mkdir($folder,0755);

 	        $fileLocation = $folder.DS.$saveData[$this->ModelName]['file_name'];
 					//debug($fileLocation);

 	        $upload = move_uploaded_file($this->request->data[$this->ModelName]['file']['tmp_name'],$fileLocation);
 	        if($upload) {
 						//var_dump("sukses");
 	          $this->{$this->ModelName}->saveField('url', $url);
 	        }
 				}
 				$this->redirect(array("action"=>"SuccessEdit",$ID,$page,$viewpage));
			}//END IF VALIDATE
		}
		$this->set(compact("ID","detail","aro_id_list","page","viewpage","matra_id_list"));
	}

	function View($ID=NULL)
	{
		if($this->access[$this->aco_id]["_read"] != "1")
		{
			$this->layout	=	"no_access";
			return;
		}

		$this->loadModel($this->ModelName);
		$this->{$this->ModelName}->BindImageBig(false);
		$this->{$this->ModelName}->VirtualFieldActivated();

		$detail = $this->{$this->ControllerName}->find('first', array(
			'conditions' => array(
				"{$this->ControllerName}.id"		=>	$ID
			)
		));
		if(empty($detail))
		{
			$this->layout	=	"ajax";
			$this->set(compact("ID","data"));
			$this->render("/errors/error404");
			return;
		}
		$this->set(compact("ID","detail"));
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
				"{$this->ModelName}.id"		=>	$ID
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
				"{$this->ModelName}.id"		=> $ID
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
				"{$this->ModelName}.id" 		=> $ID
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
