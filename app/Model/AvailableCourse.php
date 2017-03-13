<?php
class AvailableCourse extends AppModel
{
  public $name = "AvailableCourse";

  public $primaryKey  = 'id_course';

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

  public $validate 	= array(
		
		'id' => array(
			'notEmpty' => array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Data not found",
				"on"		=>	"update"
			)
		),
		'country_id' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert negara"
			),
			'minLength' 	=>	array(
				'rule' 		=>	array("minLength","2"),
				'message'	=>	"Negara is to sort"
			),
			'maxLength' 	=>	array(
				'rule' 		=>	array("maxLength","100"),
				'message'	=>	"Negara is too long"
			)
		),
		'edu_type_id' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert jenis pendidikan"
			),
			'minLength' 	=>	array(
				'rule' 		=>	array("minLength","2"),
				'message'	=>	"Negara is to sort"
			),
			'maxLength' 	=>	array(
				'rule' 		=>	array("maxLength","100"),
				'message'	=>	"Negara is too long"
			)
		),
		'program_study_id' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert program pendidikan"
			),
			'minLength' 	=>	array(
				'rule' 		=>	array("minLength","2"),
				'message'	=>	"Program Study is to sort"
			),
			'maxLength' 	=>	array(
				'rule' 		=>	array("maxLength","100"),
				'message'	=>	"Program Study is too long"
			)
		)
	);

  public function BindImageBig($reset	=	true)
	{
		$this->bindModel(array(
			"hasOne"	=>	array(
				"ImageBig"	=>	array(
					"className"	=>	"Content",
					"foreignKey"	=>	"model_id",
					"conditions"	=>	array(
						"ImageBig.model"	=>	$this->name,
						"ImageBig.type"	=>	"big"
					)
				)
			)
		),$reset);
	}

	public function BindImageThumb($reset	=	true)
	{
		$this->bindModel(array(
			"hasOne"	=>	array(
				"ImageThumb"	=>	array(
					"className"	=>	"Content",
					"foreignKey"	=>	"model_id",
					"conditions"	=>	array(
						"ImageThumb.model"	=>	$this->name,
						"ImageThumb.type"	=>	"thumb"
					)
				)
			)
		),$reset);
	}

	public function beforeSave($options = array())
	{
		if(!empty($this->data))
		{
			foreach($this->data[$this->name] as $key => $name)
			{
				if(isset($this->data[$this->name][$key]) && !is_array($this->data[$this->name][$key]))
					$this->data[$this->name][$key]		=	trim($this->data[$this->name][$key]);

				if($key == "name")
				{
					$this->data[$this->name][$key]	=	Sanitize::html($this->data[$this->name][$key]);
				}

				if($key == "description")
				{
					$this->data[$this->name][$key]	=	Sanitize::html($this->data[$this->name][$key]);
				}

				if($key == "position")
				{
					$this->data[$this->name][$key]	=	Sanitize::html($this->data[$this->name][$key]);
				}
			}
		}
	}

	public function afterFind($results, $primary = false)
	{
		return $results;
	}

	public function afterDelete()
	{
		//DELETE IMAGE CONTENT
		App::import('Component','General');
		$General		=	new GeneralComponent();
		$General->DeleteContent($this->id,$this->name);
	}

	public function beforeValidate($options = array())
	{
		return true;
	}

	public function BindImage($reset	=	true)
	{
	}

	function BindDefault($reset	=	true)
	{
	}

	function rand_number( $length ) {
		$chars	=	"0123456789";
		$str	=	"";

		$size = strlen( $chars );
		for( $i = 0; $i < $length; $i++ ) {
			$str .= $chars[ rand( 0, $size - 1 ) ];
		}

		return $str;
	}

	function notEmptyLength($fields = array())
	{
		foreach($fields as $key=>$value)
		{
			return (strlen($value) > 0);
		}
	}
	function IsExists($fields = array())
	{
		foreach($fields as $key=>$value)
		{
			$data	=	$this->findById($value);
			if(!empty($data)) return true;
		}
		return false;
	}

	function size( $field=array(), $aloowedsize)
    {
		foreach( $field as $key => $value ){
            $size = intval($value['size']);
            if($size > $aloowedsize) {
                return FALSE;
            } else {
                continue;
            }
        }
        return TRUE;
    }


	function notEmptyImage($fields = array())
	{
		foreach($fields as $key=>$value)
		{
			if(empty($value['name']))
			{
				return false;
			}
		}

		return true;
	}

	function validateName($file=array(),$ext=array())
	{
		$err	=	array();
		$i=0;

		foreach($file as $file)
		{
			$i++;

			if(!empty($file['name']))
			{
				if(!Validation::extension($file['name'], $ext))
				{
					return false;
				}
			}
		}
		return true;
	}

	function imagewidth($field=array(), $allowwidth=0)
	{

		foreach( $field as $key => $value ){
			if(!empty($value['name']))
			{
				$imgInfo	= getimagesize($value['tmp_name']);
				$width		= $imgInfo[0];

				if($width < $allowwidth)
				{
					return false;
				}
			}
        }
        return TRUE;
	}

	function imageheight($field=array(), $allowheight=0)
	{

		foreach( $field as $key => $value ){
			if(!empty($value['name']))
			{
				$imgInfo	= getimagesize($value['tmp_name']);
				$height		= $imgInfo[1];

				if($height < $allowheight)
				{
					return false;
				}
			}
        }
        return TRUE;
	}

}
?>
