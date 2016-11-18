<?php if(!defined('HDPHP_PATH'))exit;
return array (
  'member_notes_id' => 
  array (
    'field' => 'member_notes_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => true,
    'default' => NULL,
    'extra' => 'auto_increment',
  ),
  'member_notes_user_id' => 
  array (
    'field' => 'member_notes_user_id',
    'type' => 'int(11)',
    'null' => 'NO',
    'key' => false,
    'default' => '0',
    'extra' => '',
  ),
  'member_notes_commodity' => 
  array (
    'field' => 'member_notes_commodity',
    'type' => 'varchar(500)',
    'null' => 'NO',
    'key' => false,
    'default' => '',
    'extra' => '',
  ),
);
?>