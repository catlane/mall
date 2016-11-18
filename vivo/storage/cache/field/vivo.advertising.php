<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'advertising_id' => 
  array (
    'field' => 'advertising_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'advertising_size' => 
  array (
    'field' => 'advertising_size',
    'type' => 'varchar(50)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'advertising_sort' => 
  array (
    'field' => 'advertising_sort',
    'type' => 'int(5)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'advertising_url' => 
  array (
    'field' => 'advertising_url',
    'type' => 'varchar(200)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'advertising_time' => 
  array (
    'field' => 'advertising_time',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'advertising_status' => 
  array (
    'field' => 'advertising_status',
    'type' => 'smallint(6)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'advertising_img' => 
  array (
    'field' => 'advertising_img',
    'type' => 'varchar(500)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
);
?>