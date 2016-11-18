<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'member_user_id' => 
  array (
    'field' => 'member_user_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'member_user_username' => 
  array (
    'field' => 'member_user_username',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'member_user_nickname' => 
  array (
    'field' => 'member_user_nickname',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'member_user_password' => 
  array (
    'field' => 'member_user_password',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'member_user_email' => 
  array (
    'field' => 'member_user_email',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'member_user_address' => 
  array (
    'field' => 'member_user_address',
    'type' => 'varchar(400)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'member_user_phone' => 
  array (
    'field' => 'member_user_phone',
    'type' => 'varchar(12)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'member_user_fixed' => 
  array (
    'field' => 'member_user_fixed',
    'type' => 'varchar(12)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'member_user_sex' => 
  array (
    'field' => 'member_user_sex',
    'type' => 'enum(\'不方便透露\',\'女\',\'男\')',
    'null' => 'NO',
    'key' => false,
    'default' => '不方便透露',
    'extra' => '',
  ),
  'member_user_birthday' => 
  array (
    'field' => 'member_user_birthday',
    'type' => 'varchar(100)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'member_user_liveAddress' => 
  array (
    'field' => 'member_user_liveAddress',
    'type' => 'varchar(300)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'comment_comment_id' => 
  array (
    'field' => 'comment_comment_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
);
?>