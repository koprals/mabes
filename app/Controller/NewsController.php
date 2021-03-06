<?php
class NewsController extends AppController
{
	var $ControllerName		=	"News";
	var $ModelName			=	"News";
	var $helpers			=	array("Text","Aimfox");
	var $uses				=	"News";

	function beforeFilter()
	{
		parent::beforeFilter();
		$this->set("ControllerName",$this->ControllerName);
		$this->set("ModelName",$this->ModelName);
		$this->set('lft_menu_category_id',"9");

		//CHECK PRIVILEGES
		$this->loadModel("MyAco");
		$find					=	$this->MyAco->find("first",array(
										"conditions"	=>	array(
											"LOWER(MyAco.alias)"	=>	strtolower("News")
										)
									));

		$this->aco_id			=	$find["MyAco"]["id"];
		$this->set("aco_id",$this->aco_id);

		//DEFINE COUNTRY
		$this->loadModel('Country');
		$list_country =	$this->Country->find('list', array(
			'fields'	=>	array('Country.country_name')
		));
		$this->set(compact('list_country'));
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
    	$this->{$this->ModelName}->BindDefault(false);
		$this->{$this->ModelName}->VirtualFieldActivated();


		//DEFINE LAYOUT, LIMIT AND OPERAND
		$viewpage			=	empty($this->params['named']['limit']) ? 50 : $this->params['named']['limit'];
		$order				=	array("{$this->ModelName}.created" => "DESC");
		$operand			=	"AND";

		//DEFINE SEARCH DATA
		if(!empty($this->request->data))
		{
			$cond_search	=	array();
			$operand		=	$this->request->data[$this->ModelName]['operator'];
			$this->Session->delete('Search.'.$this->ControllerName);

			/*if(!empty($this->request->data['Search']['id']))
			{
				$cond_search["{$this->ModelName}.id"]					=	$this->data['Search']['id'];
			}*/

			if(!empty($this->request->data['Search']['start_date'])) {
				if(!empty($this->request->data['Search']['end_date'])) {


					$startDateExplode = explode("-", $this->request->data['Search']['start_date']);
					$startTime = date("Y-m-d H:i:s", mktime(3, 0, 0, $startDateExplode[1], $startDateExplode[2] ,$startDateExplode[0]));

					$endDateExplode = explode("-", $this->request->data['Search']['end_date']);
					$endTime = date("Y-m-d H:i:s", mktime(2, 59, 59, $endDateExplode[1], 1 + $endDateExplode[2], $endDateExplode[0]));

					$cond_search["and"] = array("Customer.created >=" => $startTime, "Customer.created <=" => $endTime);
				} else {

					$startDateExplode = explode("-", $this->request->data['Search']['start_date']);
					$startTime = date("Y-m-d H:i:s", mktime(3, 0, 0, $startDateExplode[1], $startDateExplode[2] ,$startDateExplode[0]));

					$endDateExplode = explode("-", $this->request->data['Search']['start_date']);
					$endTime = date("Y-m-d H:i:s", mktime(2, 59, 59, $endDateExplode[1], $endDateExplode[2] + 1 ,$endDateExplode[0]));

					$cond_search["and"] = array("Customer.created >=" => $startTime, "Customer.created <=" => $endTime);
				}


			}

			if(!empty($this->request->data['Search']['name']))
			{
				$cond_search["{$this->ModelName}.name LIKE "]			=	"%".$this->data['Search']['name']."%";
			}
			if(!empty($this->request->data['Search']['email']))
			{
				$cond_search["{$this->ModelName}.email LIKE "]			=	"%".$this->data['Search']['email']."%";
			}

			if(!empty($this->request->data['Search']['customer_email_status_id']))
			{
				$cond_search["{$this->ModelName}.customer_email_status_id"]				=	$this->data['Search']['customer_email_status_id'];
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
										"recursive" 	=> 1
									)
								);

		$ses_cond			=	$this->Session->read("Search.".$this->ControllerName);
		$cond_search		=	isset($ses_cond) ? $ses_cond : array();
		$ses_operand		=	$this->Session->read("Search.".$this->ControllerName."Operand");
		$operand			=	isset($ses_operand) ? $ses_operand : "AND";
		$merge_cond			=	empty($cond_search) ? $filter_paginate : array_merge($filter_paginate,array($operand => $cond_search) );
		$data				=	$this->paginate("{$this->ModelName}",$merge_cond);
		//debug($data);

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


		$this->layout		=	"ajax";
		$this->{$this->ModelName}->BindDefault();
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


		$data           =	$this->paginate("{$this->ModelName}",$conditions);
		$title				  =	$this->ModelName;
		$filename			  =	"Customer_Report_".date("dMY").".xlsx";
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

				
				if(!empty($this->request->data[$this->ModelName]["image"]["name"])) {
 					$saveData[$this->ModelName] = array(
 	          'image_name' => $this->request->data[$this->ModelName]['image']['name'],
 	          'mime_type' => $this->request->data[$this->ModelName]['image']['type'],
 	        );

 	        $saveFile = $this->{$this->ModelName}->save($saveData);
 	        $url = 'contents/News/'.$this->{$this->ModelName}->id.'/';

 	        $folder = ROOT.DS.'app'.DS.'webroot'.DS.'contents'.DS.$this->ModelName;
 	        if(!is_dir($folder)) mkdir($folder,0755);

 	        $folder = $folder.DS.$this->{$this->ModelName}->id;
 	        if(!is_dir($folder)) mkdir($folder,0755);

 	        $fileLocation = $folder.DS.$saveData[$this->ModelName]['image_name'];
 					//debug($fileLocation);

 	        $upload = move_uploaded_file($this->request->data[$this->ModelName]['image']['tmp_name'],$fileLocation);
 	        if($upload) {
 						//var_dump("sukses");
 	          $this->{$this->ModelName}->saveField('url', $url);
 	        }
 				}
 				$this->redirect(array("action"=>"SuccessAdd",$ID));
			}//END IF VALIDATE
		}//END IF NOT EMPTY
		$this->set(compact(''));
	}

	function Edit($ID=NULL,$page=1,$viewpage=50)
	{
		if(($ID == $this->super_admin_id && $this->profile["Admin"]["id"] != $this->super_admin_id) or $this->access[$this->aco_id]["_update"] != "1")
		{
			$this->layout	=	"no_access";
			return;
		}

		$this->{$this->ModelName}->BindDefault(false);
		//$this->{$this->ModelName}->BindImageContent();
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
			//$this->{$this->ModelName}->ValidateEdit();

			$this->{$this->ModelName}->set($this->data);
			if($this->{$this->ModelName}->validates())
			{
				//Configure::write('debug' , 2);
				$save	=	$this->{$this->ModelName}->save($this->request->data);
				$ID		=	$this->{$this->ModelName}->getLastInsertId();

				
				if(!empty($this->request->data[$this->ModelName]["image"]["name"])) {
 					$saveData[$this->ModelName] = array(
 	          'image_name' => $this->request->data[$this->ModelName]['image']['name'],
 	          'mime_type' => $this->request->data[$this->ModelName]['image']['type'],
 	        );

 	        $saveFile = $this->{$this->ModelName}->save($saveData);
 	        $url = 'contents/News/'.$this->{$this->ModelName}->id.'/';

 	        $folder = ROOT.DS.'app'.DS.'webroot'.DS.'contents'.DS.$this->ModelName;
 	        if(!is_dir($folder)) mkdir($folder,0755);

 	        $folder = $folder.DS.$this->{$this->ModelName}->id;
 	        if(!is_dir($folder)) mkdir($folder,0755);

 	        $fileLocation = $folder.DS.$saveData[$this->ModelName]['image_name'];
 					//debug($fileLocation);

 	        $upload = move_uploaded_file($this->request->data[$this->ModelName]['image']['tmp_name'],$fileLocation);
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
