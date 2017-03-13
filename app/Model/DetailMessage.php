<?php
class DetailMessage extends AppModel
{
	public $useTable	=	"pesan_detail_";
	public $primaryKey	=	"id_pesan_detail";
	public $name	=	"DetailMessage";

	public $belongsTo	=	array(
		'Personnel'	=>	array(
			'className'	=>	'Personnel',
			'foreignKey'	=>	'id_personel'
		),
		'PrivateMessage'	=>	array(
			'className'	=>	'PrivateMessage',
			'foreignKey'	=>	'id_pesan'
		)
	);
}
