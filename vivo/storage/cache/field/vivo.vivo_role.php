<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'id' => 
  array (
    'field' => 'id',
    'type' => 'smallint(6) unsigned',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'name' => 
  array (
    'field' => 'name',
    'type' => 'varchar(20)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'pid' => 
  array (
    'field' => 'pid',
    'type' => 'smallint(6)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'status' => 
  array (
    'field' => 'status',
    'type' => 'tinyint(1) unsigned',
    'null' => 'YES',
    'key' => false,
    'default' => '1',
    'extra' => '',
  ),
  'remark' => 
  array (
    'field' => 'remark',
    'type' => 'varchar(255)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
);
?>