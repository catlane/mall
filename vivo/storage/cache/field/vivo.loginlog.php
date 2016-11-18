<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'loginLog_id' => 
  array (
    'field' => 'loginLog_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'loginLog_address' => 
  array (
    'field' => 'loginLog_address',
    'type' => 'varchar(45)',
    'null' => 'YES',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'loginLog_IP' => 
  array (
    'field' => 'loginLog_IP',
    'type' => 'varchar(45)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'loginLog_time' => 
  array (
    'field' => 'loginLog_time',
    'type' => 'varchar(45)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'admin_user_admin_user_id' => 
  array (
    'field' => 'admin_user_admin_user_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
);
?>