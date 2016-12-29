<?php
class HomeController extends AppController
{
	var $uses	=	NULL;
	var $components = array("RequestHandler");

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->set('lft_menu_category_id',"1");
	}

	public function Index()
	{
		$acos			=	$this->Acl->Aco->find('threaded');
	    $group_aro		=	$this->Acl->Aro->find('threaded',array('conditions'=>array('Aro.id'=>1)));
	    $group_perms	=	Set::extract('{n}.Aco', $group_aro);
	    $gpAco 			=	array();
		    foreach($group_perms[0] as $value) {
	        	$gpAco[$value['id']] = $value;
	    	}
	    
	//DEFINE PERSONEL
   		$this->loadModel('Personnel');
    	$list_personnel = $this->Personnel->find('list', array(
      		'fields'  =>  array('Personnel.personnel_name'),
      		'recursive' => 2
    	));

    //DEFINE Process
   		$this->loadModel('Process');
    	$list_process = $this->Process->find('all', array(
      		'fields'  =>  array('Process.status'),
      		'recursive' => 2
    	));

		pr($list_process);
		$this->set(compact("list_personnel","list_process"));

	}

}
?>
