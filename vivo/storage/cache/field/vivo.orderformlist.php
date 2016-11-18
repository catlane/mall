<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'orderFormList_id' => 
  array (
    'field' => 'orderFormList_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'orderFormList_shopNum' => 
  array (
    'field' => 'orderFormList_shopNum',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'orderFormList_price' => 
  array (
    'field' => 'orderFormList_price',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'orderFormList_attr' => 
  array (
    'field' => 'orderFormList_attr',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'commodity_commodity_id' => 
  array (
    'field' => 'commodity_commodity_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'orderForm_orderForm_id' => 
  array (
    'field' => 'orderForm_orderForm_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
);
?>