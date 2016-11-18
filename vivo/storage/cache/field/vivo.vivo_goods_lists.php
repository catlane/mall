<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'goods_lists_id' => 
  array (
    'field' => 'goods_lists_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'goods_lists_num' => 
  array (
    'field' => 'goods_lists_num',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'goods_lists_stock' => 
  array (
    'field' => 'goods_lists_stock',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'goods_lists_allid' => 
  array (
    'field' => 'goods_lists_allid',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
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
);
?>