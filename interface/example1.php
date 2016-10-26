<?php
interface show_smth {
  function show_message();
}
interface Message extends show_smth {
  function get_message();
  function set_message( $message );
}

class Messages implements Message
{
  protected $message;
  function __construct( $message ) {
    $this->set_message( $message );
    $this->show_message();
  }
  function get_message() {
    return $this->message;
  }
  function set_message( $message ) {
    $this->message = $message;
  }
  function show_message() {
    print $this->get_message();
  }
}
new Messages( 'Hello World!' );