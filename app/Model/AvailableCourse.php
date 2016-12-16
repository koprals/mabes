<?php
class AvailableCourse extends AppModel
{
  public $name = "AvailableCourse";

  function VirtualFieldActivated()
	{
		$this->virtualFields = array(
			'SStatus'		=> "IF((".$this->name.".status='0'), 'Not Active', IF((".$this->name.".status='1'), 'Active', ''))",
		);
	}

}
?>
