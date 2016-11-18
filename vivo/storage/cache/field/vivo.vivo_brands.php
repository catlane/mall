<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'brands_id' => 
  array (
    'field' => 'brands_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'brands_name' => 
  array (
    'field' => 'brands_name',
    'type' => 'varchar(145)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'brands_logo' => 
  array (
    'field' => 'brands_logo',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'brands_sort' => 
  array (
    'field' => 'brands_sort',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'brands_ifhot' => 
  array (
    'field' => 'brands_ifhot',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '1',
    'extra' => '',
  ),
  'brands_status' => 
  array (
    'field' => 'brands_status',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '1',
    'extra' => '',
  ),
);
?>