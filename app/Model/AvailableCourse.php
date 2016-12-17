<?php
class AvailableCourse extends AppModel
{
  public $name = "AvailableCourse";

  public $belongsTo = array(
    'Country' => array(
      'className' => 'Country',
      'foreignKey'  =>  'country_id'
    ),
    'EducationType' => array(
      'className' =>  'EducationType',
      'foreignKey'  =>  'edu_type_id'
    ),
    'ProgramStudy'  =>  array(
      'className' =>  'ProgramStudy',
      'foreignKey'  =>  'program_study_id'
    )
  );

  function VirtualFieldActivated()
	{
		$this->virtualFields = array(
			'SStatus'		=> "IF((".$this->name.".status='0'), 'Not Active', IF((".$this->name.".status='1'), 'Active', ''))",
		);
	}

}
?>
