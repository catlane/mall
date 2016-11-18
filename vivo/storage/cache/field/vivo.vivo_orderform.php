<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'orderForm_id' => 
  array (
    'field' => 'orderForm_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'orderForm_num' => 
  array (
    'field' => 'orderForm_num',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'orderForm_payMethod' => 
  array (
    'field' => 'orderForm_payMethod',
    'type' => 'varchar(30)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'orderForm_taxType' => 
  array (
    'field' => 'orderForm_taxType',
    'type' => 'varchar(255)',
    'null' => 'NO',
    'key' => false,
    'default' => '‘’',
    'extra' => '',
  ),
  'orderForm_invoice' => 
  array (
    'field' => 'orderForm_invoice',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'orderForm_receiver' => 
  array (
    'field' => 'orderForm_receiver',
    'type' => 'varchar(200)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'orderForm_phone' => 
  array (
    'field' => 'orderForm_phone',
    'type' => 'varchar(12)',
    'null' => 'YES',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'orderForm_address' => 
  array (
    'field' => 'orderForm_address',
    'type' => 'varchar(500)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'orderForm_price' => 
  array (
    'field' => 'orderForm_price',
    'type' => 'varchar(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'orderForm_sendtime' => 
  array (
    'field' => 'orderForm_sendtime',
    'type' => 'varchar(200)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'orderForm_comments' => 
  array (
    'field' => 'orderForm_comments',
    'type' => 'text',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'orderForm_cancelTime' => 
  array (
    'field' => 'orderForm_cancelTime',
    'type' => 'varchar(100)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'orderForm_cancelMethod' => 
  array (
    'field' => 'orderForm_cancelMethod',
    'type' => 'varchar(100)',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'orderForm_status' => 
  array (
    'field' => 'orderForm_status',
    'type' => 'varchar(100)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'member_user_member_user_id' => 
  array (
    'field' => 'member_user_member_user_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
);
?>