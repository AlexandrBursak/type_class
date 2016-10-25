<?php
trait sayHello {
  static function wordHello() {
    echo 'Hello';
  }
}
class sayWorld {
  use sayHello;
  static function wordWorld() {
    echo 'World!';
  }
}
class sayPeople {
  use sayHello;
  static function wordPeople() {
    echo 'People!';
  }
}
sayWorld::wordHello() . ' ' . sayWorld::wordWorld();
sayPeople::wordHello() . ' ' . sayPeople::wordPeople();
