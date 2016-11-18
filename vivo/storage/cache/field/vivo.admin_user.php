<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'admin_user_id' => 
  array (
    'field' => 'admin_user_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'admin_user_account' => 
  array (
    'field' => 'admin_user_account',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'admin_user_password' => 
  array (
    'field' => 'admin_user_password',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'admin_user_username' => 
  array (
    'field' => 'admin_user_username',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'admin_user_regTime' => 
  array (
    'field' => 'admin_user_regTime',
    'type' => 'varchar(45)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'admin_user_sex' => 
  array (
    'field' => 'admin_user_sex',
    'type' => 'enum(\'男\',\'保密\',\'女\')',
    'null' => 'NO',
    'key' => false,
    'default' => '保密',
    'extra' => '',
  ),
  'admin_user_age' => 
  array (
    'field' => 'admin_user_age',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '20',
    'extra' => '',
  ),
  'admin_user_phone' => 
  array (
    'field' => 'admin_user_phone',
    'type' => 'varchar(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '131',
    'extra' => '',
  ),
  'admin_user_email' => 
  array (
    'field' => 'admin_user_email',
    'type' => 'varchar(45)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'admin_user_qq' => 
  array (
    'field' => 'admin_user_qq',
    'type' => 'varchar(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
);
?>