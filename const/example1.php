<?php

class Message {
  const FORMAT_DATE = "Y-m-d";
  public static $user = 'Anonymous';
}

echo date( Message::FORMAT_DATE ) . "<br>" . PHP_EOL;
echo Message::$user . "<br>" . PHP_EOL;