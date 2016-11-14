<?php
class Country extends AppModel
{
  public $name = "Country";

  function VirtualFieldActivated()
	{
		$this->virtualFields = array(
			'SStatus'		=> "IF((".$this->name.".status='0'), 'Not Active', IF((".$this->name.".status='1'), 'Active', ''))",
		);
	}

}
?>
