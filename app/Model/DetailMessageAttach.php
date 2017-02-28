<?php
class DetailMessageAttach extends AppModel
{
	public $useTable	=	"pesan_detail_atach_";
	public $primaryKey	=	"id_pesan_detail_attach";
	public $name	=	"DetailMessageAttach";

  public $belongsTo = array(
    'DetailMessage' => array(
      'className' => 'DetailMessage',
      'foreignKey'  =>  'id_pesan_detail'
    )
  );
}
