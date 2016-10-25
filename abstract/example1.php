<?php
abstract class Message {
  protected $message;
  function set_message( $message ) {
    $this->message = $message;
  }
  function get_message() {
    return $this->message;
  }
}
class Action_Message extends Message {
  function __construct( $message ) {
    $this->set_message( $message );
  }
  function show_message() {
    print $this->get_message();
  }
}
$message = new Action_Message( 'Hello world!' );
$message->show_message();