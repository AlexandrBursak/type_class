<?php

class Message {
  public static $user = 'Anonymous';
  static function show_message( $message ) {
    return "User: ". self::$user . PHP_EOL .
      "Message: " . $message . PHP_EOL;
  }
}

echo Message::show_message( 'Hello world!' );
// or
$class_name = 'Message';
echo $class_name::show_message( 'Hello world!' );