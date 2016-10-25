<?php
interface a
{
  const b = 'Константа интерфейса';
}
echo a::b;


// Это, не будет работать, так как
// константы перекрывать нельзя.
/*
class b implements a
{
  const b = 'Class constant';
}
new b();
*/


