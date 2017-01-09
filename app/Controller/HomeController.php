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

		//HITUNG PERSONNEL
		$this->loadModel('Personnel');
		$totalPersonnelStudi = $this->Personnel->find('all', array(
				'fields' => array(
					'COUNT(Personnel.id_personnel) as total_personnel',
				)
		));

		//DEFINE NEW PERSONNEL STUDI
		$this->loadModel('Process');
		$this->Process->VirtualFieldActivated();
		$lastPersonnelStudi	=	$this->Process->find('all', array(
				'order'	=>	'Process.id DESC',
				'limit'	=>	6
		));

		//debug($lastPersonnelStudi);

		$this->set(compact('totalPersonnelStudi', 'lastPersonnelStudi'));
	}

}
?>
