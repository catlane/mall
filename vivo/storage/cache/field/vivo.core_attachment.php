<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'id' => 
  array (
    'field' => 'id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'uid' => 
  array (
    'field' => 'uid',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'siteid' => 
  array (
    'field' => 'siteid',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'name' => 
  array (
    'field' => 'name',
    'type' => 'varchar(80)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'filename' => 
  array (
    'field' => 'filename',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'path' => 
  array (
    'field' => 'path',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'extension' => 
  array (
    'field' => 'extension',
    'type' => 'varchar(10)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'createtime' => 
  array (
    'field' => 'createtime',
    'type' => 'int(10)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'size' => 
  array (
    'field' => 'size',
    'type' => 'mediumint(9)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'is_member' => 
  array (
    'field' => 'is_member',
    'type' => 'tinyint(1)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'data' => 
  array (
    'field' => 'data',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'hash' => 
  array (
    'field' => 'hash',
    'type' => 'char(50)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
);
?>