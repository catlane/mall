<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'commodity_id' => 
  array (
    'field' => 'commodity_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'commodity_name' => 
  array (
    'field' => 'commodity_name',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'commodity_title' => 
  array (
    'field' => 'commodity_title',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => '\'\'',
    'extra' => '',
  ),
  'commodity_num' => 
  array (
    'field' => 'commodity_num',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'commodity_unit' => 
  array (
    'field' => 'commodity_unit',
    'type' => 'varchar(45)',
    'null' => 'NO',
    'key' => false,
    'default' => '元',
    'extra' => '',
  ),
  'commodity_market_price' => 
  array (
    'field' => 'commodity_market_price',
    'type' => 'decimal(11,2)',
    'null' => 'NO',
    'key' => false,
    'default' => '0.00',
    'extra' => '',
  ),
  'commodity_mall_price' => 
  array (
    'field' => 'commodity_mall_price',
    'type' => 'decimal(11,2)',
    'null' => 'NO',
    'key' => false,
    'default' => '0.00',
    'extra' => '',
  ),
  'commodity_all_stock' => 
  array (
    'field' => 'commodity_all_stock',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'commodity_list_img' => 
  array (
    'field' => 'commodity_list_img',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'commodity_click' => 
  array (
    'field' => 'commodity_click',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'commodity_added_time' => 
  array (
    'field' => 'commodity_added_time',
    'type' => 'varchar(200)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'category_id' => 
  array (
    'field' => 'category_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'type_id' => 
  array (
    'field' => 'type_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'brands_brands_id' => 
  array (
    'field' => 'brands_brands_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => NULL,
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