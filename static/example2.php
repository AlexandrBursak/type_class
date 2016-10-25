<?php

class Message {
  public static $user = 'Anonymous';
  static function get_message () {
    return "Hello World!";
  }
}
class MessageExtend extends Message {
  static function show_message( ) {
    return "User: ". parent::$user . PHP_EOL .
           "Message: " . static::get_message() . PHP_EOL;
  }
}
$class_name = 'MessageExtend';
echo $class_name::show_message( );