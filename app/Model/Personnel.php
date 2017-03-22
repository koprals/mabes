<?php
class Personnel extends AppModel
{
	public $name = "Personnel";

	public $primaryKey	= "id_personnel";

	public $validate 	= array(
		'id' => array(
			'notEmpty' => array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Data not found",
				"on"		=>	"update"
			)
		),
		'personnel_name' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert nama lengkap"
			),
			'maxLength' 	=>	array(
				'rule' 		=>	array("maxLength","100"),
				'message'	=>	"Nama lengkap is too long"
			)
		),
		'place_of_birth' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert tempat lahir"
			),
			'minLength' 	=>	array(
				'rule' 		=>	array("minLength","2"),
				'message'	=>	"Tempat lahir is to sort"
			),
			'maxLength' 	=>	array(
				'rule' 		=>	array("maxLength","100"),
				'message'	=>	"Tempat lahir is too long"
			)
		),
		'date_of_birth' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert tanggal lahir"
			),
			'minLength' 	=>	array(
				'rule' 		=>	array("minLength","2"),
				'message'	=>	"Tanggal lahir is to sort"
			),
			'maxLength' 	=>	array(
				'rule' 		=>	array("maxLength","100"),
				'message'	=>	"Tanggal lahir is too long"
			)
		),
		'personel_nrp' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert NRP/NIP"
			),
			'minLength' 	=>	array(
				'rule' 		=>	array("minLength","2"),
				'message'	=>	"NRP/NIP is to sort"
			),
			'maxLength' 	=>	array(
				'rule' 		=>	array("maxLength","100"),
				'message'	=>	"NRP/NIP is too long"
			)
		),
		'personel_unity' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert kesatuan/jabatan"
			),
			'minLength' 	=>	array(
				'rule' 		=>	array("minLength","2"),
				'message'	=>	"Kesatuan/jabatan is to sort"
			),
			'maxLength' 	=>	array(
				'rule' 		=>	array("maxLength","100"),
				'message'	=>	"Kesatuan/jabatan is too long"
			)
		),
		'personel_matra' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert matra/PNS"
			),
		),
		'personel_corps' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert korps"
			),
		),
		'personel_occupation' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert pangkat"
			),
			'minLength' 	=>	array(
				'rule' 		=>	array("minLength","2"),
				'message'	=>	"Sales name is to sort"
			),
			'maxLength' 	=>	array(
				'rule' 		=>	array("maxLength","100"),
				'message'	=>	"Sales name is too long"
			)
		),
		'office_address' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert alamat kantor"
			),
			'minLength' 	=>	array(
				'rule' 		=>	array("minLength","2"),
				'message'	=>	"Sales name is to sort"
			),
			'maxLength' 	=>	array(
				'rule' 		=>	array("maxLength","100"),
				'message'	=>	"Sales name is too long"
			)
		),
		'office_phone_number' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert telepon kantor/HP"
			),
			'minLength' 	=>	array(
				'rule' 		=>	array("minLength","2"),
				'message'	=>	"Sales name is to sort"
			),
			'maxLength' 	=>	array(
				'rule' 		=>	array("maxLength","100"),
				'message'	=>	"Sales name is too long"
			)
		),
		'home_address' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert alamat rumah"
			),
			'minLength' 	=>	array(
				'rule' 		=>	array("minLength","2"),
				'message'	=>	"Sales name is to sort"
			),
			'maxLength' 	=>	array(
				'rule' 		=>	array("maxLength","100"),
				'message'	=>	"Sales name is too long"
			)
		),
		'home_phone_number' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert telepon rumah/HP"
			),
			'minLength' 	=>	array(
				'rule' 		=>	array("minLength","2"),
				'message'	=>	"Sales name is to sort"
			),
			'maxLength' 	=>	array(
				'rule' 		=>	array("maxLength","100"),
				'message'	=>	"Sales name is too long"
			)
		),
		'personel_email' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert email"
			),
			'minLength' 	=>	array(
				'rule' 		=>	array("minLength","2"),
				'message'	=>	"Sales name is to sort"
			),
			'maxLength' 	=>	array(
				'rule' 		=>	array("maxLength","100"),
				'message'	=>	"Sales name is too long"
			)
		),
		'family_relationship' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert hubungan"
			),
			'minLength' 	=>	array(
				'rule' 		=>	array("minLength","2"),
				'message'	=>	"Sales name is to sort"
			),
			'maxLength' 	=>	array(
				'rule' 		=>	array("maxLength","100"),
				'message'	=>	"Sales name is too long"
			)
		),
		'family_address' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert alamat rumah"
			),
			'minLength' 	=>	array(
				'rule' 		=>	array("minLength","2"),
				'message'	=>	"Sales name is to sort"
			),
			'maxLength' 	=>	array(
				'rule' 		=>	array("maxLength","100"),
				'message'	=>	"Sales name is too long"
			)
		),
		'family_phone_number' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert telepon rumah"
			),
			'minLength' 	=>	array(
				'rule' 		=>	array("minLength","2"),
				'message'	=>	"Sales name is to sort"
			),
			'maxLength' 	=>	array(
				'rule' 		=>	array("maxLength","100"),
				'message'	=>	"Sales name is too long"
			)
		),
		'family_address' => array(
			'notEmpty'		=>	array(
				'rule' 		=>	"notEmpty",
				'message' 	=>	"Please insert alamat rumah"
			),
			'minLength' 	=>	array(
				'rule' 		=>	array("minLength","2"),
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
