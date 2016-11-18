<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'keep_id' => 
  array (
    'field' => 'keep_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'keep_commodity_id' => 
  array (
    'field' => 'keep_commodity_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'keep_time' => 
  array (
    'field' => 'keep_time',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'keep_commodity_name' => 
  array (
    'field' => 'keep_commodity_name',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'keep_commodity_price' => 
  array (
    'field' => 'keep_commodity_price',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => '‘’',
    'extra' => '',
  ),
  'keep_commodity_user_id' => 
  array (
    'field' => 'keep_commodity_user_id',
    'type' => 'int(3)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
);
?>