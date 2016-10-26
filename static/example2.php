<?php

class Message {
  protected static $user = 'Anonymous';
  static function get_message () {
    return "Hello World!";
  }

}
class MessageExtend extends Message {
  static function get_message () {
    return "Hello 1";
  }
  static function show_message( ) {
    return "User: ". parent::$user . PHP_EOL .
           "Message: " . self::get_message() . PHP_EOL .
           "Message: " . parent::get_message() . PHP_EOL;
  }
}
$class_name = 'MessageExtend';
echo $class_name::show_message( );