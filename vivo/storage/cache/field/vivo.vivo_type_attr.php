<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'type_attr_id' => 
  array (
    'field' => 'type_attr_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'type_attr_name' => 
  array (
    'field' => 'type_attr_name',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'type_attr_value' => 
  array (
    'field' => 'type_attr_value',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'type_attr_type' => 
  array (
    'field' => 'type_attr_type',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'type_type_id' => 
  array (
    'field' => 'type_type_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
);
?>