<?php
abstract class Message {
  protected $message;
  abstract function show_message( $message );
}
class Action_Message extends Message {
  function __construct( $message ) {
    $this->show_message( $message, ' ' );
  }
  function show_message( $message, $split = '' ) {
    print implode( $split, $message );
  }
}
new Action_Message( [ 'Hello', 'world!' ] );