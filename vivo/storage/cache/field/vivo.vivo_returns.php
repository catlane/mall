<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'returns_id' => 
  array (
    'field' => 'returns_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'returns_orderForm_id' => 
  array (
    'field' => 'returns_orderForm_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'returns_status' => 
  array (
    'field' => 'returns_status',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'returns_time' => 
  array (
    'field' => 'returns_time',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'returns_success_time' => 
  array (
    'field' => 'returns_success_time',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'returns_success_status' => 
  array (
    'field' => 'returns_success_status',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'returns_user_id' => 
  array (
    'field' => 'returns_user_id',
    'type' => 'int(3)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
);
?>