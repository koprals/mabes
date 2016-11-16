<?php
class StudyProgramCategory extends AppModel
{
  public $name="StudyProgramCategory"

	public function BindImageContent($reset	=	true)
	{
		$this->bindModel(array(
			"hasOne"	=>	array(
				"Image"	=>	array(
					"className"	=>	"Content",
					"foreignKey"	=>	"model_id",
					"conditions"	=>	array(
						"Image.model"	=>	$this->name,
						"Image.type"	=>	"original"
					)
				)
			)
		),$reset);
	}

	public function BindDefault($reset	=	true)
	{
		$this->bindModel(array(
				)
			),
			"hasOne"	=>	array(
				"Image"	=>	array(
					"className"	=>	"Content",
					"foreignKey"	=>	"model_id",
					"conditions"	=>	array(
						"Image.model"	=>	$this->name,
						"Image.type"	=>	"original"
					)
				)
			)
		),$reset);
	}

	function VirtualFieldActivated()
	{
		$this->virtualFields = array(
			'SStatus'		=> 'IF(('.$this->name.'.status=\'1\'),\'Active\',\'Hide\')',
		);
	}

	function ValidateAdmin()
	{/*
		$this->validate 	= array(
			'username' => array(
				'notEmpty' => array(
					'rule' => "notEmpty",
					'message' => 'Please insert your username.'
				)
			),
			'password' => array(
				'notEmpty' => array(
					'rule' => "notEmpty",
					'message' => 'Please insert your password.'
				),
				'CheckPassword' => array(
					'rule' 		=> "CheckPassword",
					'message' 	=> 'Username or password is wrong!.'
				)
			)
		);*/
	}

	function ValidateAdd()
	{
    /*
		App::uses('CakeNumber', 'Utility');
		$this->validate 	= array(
			'username' => array(
				'notEmpty' => array(
					'rule' => "notEmpty",
					'message' => "Please enter username"
				),
				'minLength' => array(
					'rule' 		=> array("minLength","4"),
					'message'	=> "Please insert less than 4 characters"
				),
				'maxLength' => array(
					'rule' 		=> array("maxLength","20"),
					'message'	=> "Please insert greater or equal than 20 characters"
				),
				"UniqueName" => array(
					'rule' => "UniqueName",
					'message' => "This name already exists"
				),
				"NoSpcaeAndOtherCharacter"	=> array(
					'rule'		=> "NoSpcaeAndOtherCharacter",
					'message'	=> "Not allowed character, please insert A-Z,a-z,0-9,_ and no space"
				),
			),
			'password' => array(
				'notEmpty' => array(
					'rule' => "notEmpty",
					'message' => "Please enter password"
				),
				'minLength' => array(
					'rule' 		=> array("minLength","6"),
					'message'	=> "Please insert less than 6 characters"
				),
				'maxLength' => array(
					'rule' 		=> array("maxLength","20"),
					'message'	=> "Please insert greater or equal than 20 characters"
				),
				"NoSpcaeAndOtherCharacter"	=> array(
					'rule'		=> "NoSpcaeAndOtherCharacter",
					'message'	=> "Not allowed character, please insert A-Z,a-z,0-9,_ and no space"
				),
			),
			'aro_id' => array(
				'notEmpty' => array(
					'rule' => "notEmpty",
					'message' => "Please select admin group"
				)
			),
			'fullname' => array(
				'notEmpty' => array(
					'rule' => "notEmpty",
					'message' => "Please insert fullname"
				),
				'minLength' => array(
					'rule' 		=> array("minLength","3"),
					'message'	=> "Please insert less than 3 characters"
				),
				'maxLength' => array(
					'rule' 		=> array("maxLength","20"),
					'message'	=> "Please insert greater or equal than 20 characters"
				)
			),
			'images' => array(
				'notEmptyImage' => array(
					'rule'		=> "notEmptyImage",
					'message'	=> "Please upload photos"
				),
				'imagewidth'	=> array(
					'rule' 		=> array('imagewidth',300),
					'message' 	=> 'Please upload image with minimum width is 300px'
				),
				'size' => array(
					'rule' 		=> array('size',1048576),
					'message' 	=> 'Your image size is too big, please upload less than '.CakeNumber::toReadableSize(1048576).'.'
				),
				'extension' => array(
					'rule' => array('validateName', array('gif','jpeg','jpg','png')),
					'message' => 'Only (*.gif,*.jpeg,*.jpg,*.png) are allowed.'
				)
			)
		);
    */
	}


	function ValidateEdit()
	{
    /*
		App::uses('CakeNumber', 'Utility');
		$this->validate 	= array(
			"id"	=>	array(
				'notEmpty' => array(
					'rule' => "notEmpty",
					'message' => 'Sorry we cannot find your ID.'
				),
				'IsExists' => array(
					'rule' => "IsExists",
					'message' => 'Sorry we cannot find your details data.'
				)
			),
			'username' => array(
				'notEmpty' => array(
					'rule' => "notEmpty",
					'message' => "Please enter username"
				),
				'minLength' => array(
					'rule' 		=> array("minLength","4"),
					'message'	=> "Please insert less than 4 characters"
				),
				'maxLength' => array(
					'rule' 		=> array("maxLength","20"),
					'message'	=> "Please insert greater or equal than 20 characters"
				),
				"UniqueNameEdit" => array(
					'rule' => "UniqueNameEdit",
					'message' => "This name already exists"
				),
				"NoSpcaeAndOtherCharacter"	=> array(
					'rule'		=> "NoSpcaeAndOtherCharacter",
					'message'	=> "Not allowed character, please insert A-Z,a-z,0-9,_ and no space"
				),
			),
			'password' => array(
				'notEmpty' => array(
					'rule' => "notEmpty",
					'message' => "Please enter password"
				),
				'minLength' => array(
					'rule' 		=> array("minLength","6"),
					'message'	=> "Please insert less than 6 characters"
				),
				'maxLength' => array(
					'rule' 		=> array("maxLength","20"),
					'message'	=> "Please insert greater or equal than 20 characters"
				),
				"NoSpcaeAndOtherCharacter"	=> array(
					'rule'		=> "NoSpcaeAndOtherCharacter",
					'message'	=> "Not allowed character, please insert A-Z,a-z,0-9,_ and no space"
				),
			),
			'aro_id' => array(
				'notEmpty' => array(
					'rule' => "notEmpty",
					'message' => "Please select admin group"
				)
			),
			'fullname' => array(
				'notEmpty' => array(
					'rule' => "notEmpty",
					'message' => "Please insert fullname"
				),
				'minLength' => array(
					'rule' 		=> array("minLength","3"),
					'message'	=> "Please insert less than 3 characters"
				),
				'maxLength' => array(
					'rule' 		=> array("maxLength","20"),
					'message'	=> "Please insert greater or equal than 20 characters"
				)
			),
			'images' => array(

				'imagewidth'	=> array(
					'rule' 		=> array('imagewidth',300),
					'message' 	=> 'Please upload image with minimum width is 300px'
				),
				'size' => array(
					'rule' 		=> array('size',1048576),
					'message' 	=> 'Your image size is too big, please upload less than '.CakeNumber::toReadableSize(1048576).'.'
				),
				'extension' => array(
					'rule' => array('validateName', array('gif','jpeg','jpg','png')),
					'message' => 'Only (*.gif,*.jpeg,*.jpg,*.png) are allowed.'
				)
			)
		);
    */
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
