<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'sys_id' => 
  array (
    'field' => 'sys_id',
    'type' => 'int(1)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'sys_copy' => 
  array (
    'field' => 'sys_copy',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'sys_beian' => 
  array (
    'field' => 'sys_beian',
    'type' => 'varchar(200)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'sys_count' => 
  array (
    'field' => 'sys_count',
    'type' => 'text',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
);
?>