<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'address_id' => 
  array (
    'field' => 'address_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'address_receiver' => 
  array (
    'field' => 'address_receiver',
    'type' => 'varchar(30)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'address_area' => 
  array (
    'field' => 'address_area',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'address_xxaddress' => 
  array (
    'field' => 'address_xxaddress',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'address_phone' => 
  array (
    'field' => 'address_phone',
    'type' => 'varchar(12)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'address_fixed' => 
  array (
    'field' => 'address_fixed',
    'type' => 'varchar(12)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'address_zipcode' => 
  array (
    'field' => 'address_zipcode',
    'type' => 'varchar(12)',
    'null' => 'NO',
    'key' => false,
    'default' => '000000',
    'extra' => '',
  ),
  'address_default' => 
  array (
    'field' => 'address_default',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'address_member_user_id' => 
  array (
    'field' => 'address_member_user_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
);
?>