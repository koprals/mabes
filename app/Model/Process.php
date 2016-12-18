<?php
class Process extends AppModel
{
  public $name = "Process";

  public $useTable = 'process';

  public $belongsTo = array(
    'Personnel' => array(
      'className' => 'Personnel',
      'foreignKey'  =>  'personnel_id'
    ),
    'AvailableCourse' => array(
      'className' =>  'AvailableCourse',
      'foreignKey'  =>  'course_id'
    ),
  );

  public function VirtualFieldActivated()
  {
    $this->virtualFields = array(
      'SStatus'		=> "IF((".$this->name.".status='0'), 'Berjalan', IF((".$this->name.".status='1'), 'Selesai', 'Tidak Selesai'))",
    );
  }

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