<?php
class Personnel extends AppModel
{
	public $name = "Personnel";

	public $primaryKey	= "id_personnel";

	public $hasMany	=	array(
		'Process'	=>	array(
			'className'	=>	'Process',
			'order'	=>	'Process.id DESC'
		)
	);

	public $belongsTo = array(
		'Matra'	=>	array(
			'className'	=>	'Matra',
			'foreignKey'	=> 'personel_matra',
			'order'	=>	'Matra.id ASC'
		),
		'Corp'	=>	array(
			'className'	=>	'Corp',
			'foreignKey'	=>	'personel_corps'
		)
	);

	public function BindImageProfil($reset	=	true)
	{
		$this->bindModel(array(
			"hasOne"	=>	array(
				"ImageProfil"	=>	array(
					"className"	=>	"Content",
					"foreignKey"	=>	"model_id",
					"conditions"	=>	array(
						"ImageProfil.model"	=>	$this->name,
						"ImageProfil.type"	=>	"profil"
					)
				)
			)
		),$reset);
	}

	public function BindImageMedical($reset	=	true)
	{
		$this->bindModel(array(
			"hasOne"	=>	array(
				"ImageMedical"	=>	array(
					"className"	=>	"Content",
					"foreignKey"	=>	"model_id",
					"conditions"	=>	array(
						"ImageMedical.model"	=>	$this->name,
						"ImageMedical.type"	=>	"medical"
					)
				)
			)
		),$reset);
	}

	public function BindImagePassport($reset	=	true)
	{
		$this->bindModel(array(
			"hasOne"	=>	array(
				"ImagePassport"	=>	array(
					"className"	=>	"Content",
					"foreignKey"	=>	"model_id",
					"conditions"	=>	array(
						"ImagePassport.model"	=>	$this->name,
						"ImagePassport.type"	=>	"passport"
					)
				)
			)
		),$reset);
	}

	public function BindImageSecurity($reset	=	true)
	{
		$this->bindModel(array(
			"hasOne"	=>	array(
				"ImageSecurity"	=>	array(
					"className"	=>	"Content",
					"foreignKey"	=>	"model_id",
					"conditions"	=>	array(
						"ImageSecurity.model"	=>	$this->name,
						"ImageSecurity.type"	=>	"security"
					)
				)
			)
		),$reset);
	}

	
	function VirtualFieldActivated()
	{
		$this->virtualFields = array(
			'SMatra'		=> "IF((".$this->name.".personel_matra='0'), 'AD', IF((".$this->name.".personel_matra='1'), 'AU', 'AL'))",
			'SCorps'		=> "IF((".$this->name.".personel_corps='0'), 'INF',
											IF((".$this->name.".personel_corps='1'), 'KAV',
											IF((".$this->name.".personel_corps='2'), 'ARH',
											IF((".$this->name.".personel_corps='3'), 'ARM',
											IF((".$this->name.".personel_corps='4'), 'CZI',
											IF((".$this->name.".personel_corps='5'), 'CHB',
											IF((".$this->name.".personel_corps='6'), 'CBA',
											IF((".$this->name.".personel_corps='7'), 'CKU',
											IF((".$this->name.".personel_corps='8'), 'CAJ',
											IF((".$this->name.".personel_corps='9'), 'CTP',
											IF((".$this->name.".personel_corps='10'), 'CKM',
											IF((".$this->name.".personel_corps='11'), 'CHK',
											IF((".$this->name.".personel_corps='12'), 'CPM',
											IF((".$this->name.".personel_corps='13'), 'CPN',
											IF((".$this->name.".personel_corps='14'), 'CPL',
											IF((".$this->name.".personel_corps='15'), 'PELAUT',
											IF((".$this->name.".personel_corps='16'), 'TEKNIK',
											IF((".$this->name.".personel_corps='17'), 'ELEKTRONIKA',
											IF((".$this->name.".personel_corps='18'), 'SUPLAI',
											IF((".$this->name.".personel_corps='19'), 'MARINIR',
											IF((".$this->name.".personel_corps='20'), 'POMAL',
											IF((".$this->name.".personel_corps='21'), 'KESEHATAN',
											IF((".$this->name.".personel_corps='22'), 'KHUSUS',
											IF((".$this->name.".personel_corps='23'), 'PNB',
											IF((".$this->name.".personel_corps='24'), 'NAV',
											IF((".$this->name.".personel_corps='25'), 'TEK',
											IF((".$this->name.".personel_corps='26'), 'LEK',
											IF((".$this->name.".personel_corps='27'), 'KAL',
											IF((".$this->name.".personel_corps='28'), 'ADM',
											IF((".$this->name.".personel_corps='29'), 'KES',
											IF((".$this->name.".personel_corps='30'), 'PAS',
											IF((".$this->name.".personel_corps='31'), 'POM', 'SUS'))))))))))))))))))))))))))))))))",
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
