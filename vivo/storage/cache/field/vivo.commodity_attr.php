<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'commodity_attr_id' => 
  array (
    'field' => 'commodity_attr_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'commodity_attr_value' => 
  array (
    'field' => 'commodity_attr_value',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'commodity_attr_addprice' => 
  array (
    'field' => 'commodity_attr_addprice',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'type_attr_type_attr_id' => 
  array (
    'field' => 'type_attr_type_attr_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'commodity_commodity_id' => 
  array (
    'field' => 'commodity_commodity_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
);
?>