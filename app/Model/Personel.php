<?php
App::uses('Sanitize','Utility');
class Personel extends AppModel
{
public $name = "Personel";

	public $validate 	= array(
		'id' => array(
			'notEmpty' => array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Data not found",
				"on"		=>	"update"
			)
		),
		'name' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert name"
			),
			'minLength' 	=>	array(
				'rule' 		=>	array("minLength","3"),
				'message'	=>	"Sales name is to sort"
			),
			'maxLength' 	=>	array(
				'rule' 		=>	array("maxLength","100"),
				'message'	=>	"Sales name is too long"
			)
		),
		'sort' => array(
			'notEmpty' => array(
				'rule' 		=> 'notEmpty',
				'message' 	=> 'Sort cannot be empty'
			),
			'numeric' => array(
				'rule' 		=> 'numeric',
				'message' 	=> 'Please provide valid numbers'
			),
			'between' => array(
				'rule'	=> array('between', 1, 999),
				'message'	=> 'Between 1 to 999 numbers'
			)
		),
		'image1' => array(
			'imagewidth'	=> array(
				'rule' 		=> array('imagewidth',600),
				'message' 	=> 'Please upload image with minimum width is 600px'
			),
			'size' => array(
				'rule' 		=> array('size',3145728),
				'message' 	=> 'Your image size is too big, please upload less than 3 Mb.'
			),
			'extension' => array(
				'rule' => array('validateName', array('gif','jpeg','jpg','png')),
				'message' => 'Only (*.gif,*.jpeg,*.jpg,*.png) are allowed.'
			)
		)
	);

	public function beforeValidate($options = array())
	{
		return true;
	}

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
			'SStatus'		=> "IF((".$this->name.".status='0'), 'Hide', IF((".$this->name.".status='1'), 'Publish', 'Draft'))"

		);
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
