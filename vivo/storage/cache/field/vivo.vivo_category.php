<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'category_id' => 
  array (
    'field' => 'category_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'category_name' => 
  array (
    'field' => 'category_name',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'category_pid' => 
  array (
    'field' => 'category_pid',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'category_sort' => 
  array (
    'field' => 'category_sort',
    'type' => 'int(11)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
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