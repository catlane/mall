<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'about_commodity_id' => 
  array (
    'field' => 'about_commodity_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'about_commodity_samll_album' => 
  array (
    'field' => 'about_commodity_samll_album',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'about_commodity_during_album' => 
  array (
    'field' => 'about_commodity_during_album',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'about_commodity_big_album' => 
  array (
    'field' => 'about_commodity_big_album',
    'type' => 'varchar(300)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
  'about_commodity_about' => 
  array (
    'field' => 'about_commodity_about',
    'type' => 'text',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'about_commodity_afterMarket' => 
  array (
    'field' => 'about_commodity_afterMarket',
    'type' => 'text',
    'null' => 'YES',
    'key' => false,
    'default' => NULL,
    'extra' => '',
  ),
  'about_commodity_commodity_id' => 
  array (
    'field' => 'about_commodity_commodity_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
);
?>