<?php
abstract class Message {
  protected $message;
  abstract protected function set_message( $message );
  abstract protected function get_message();
}
class Action_Message extends Message {
  function __construct( $message ) {
    $this->set_message( $message );
    print $this->get_message();
  }
  public function set_message( $message ) {
    $this->message = $message;
  }
  public function get_message() {
    return $this->message;
  }
}
new Action_Message( 'Hello world!' );