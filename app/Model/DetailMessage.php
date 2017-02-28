<?php
class DetailMessage extends AppModel
{
	public $useTable	=	"pesan_detail_";
	public $primaryKey	=	"id_pesan_detail";
	public $name	=	"DetailMessage";

  public $belongsTo = array(
    'PrivateMessage' => array(
      'className' => 'PrivateMessage',
      'foreignKey'  =>  'id_pesan'
    ),
  );
}
