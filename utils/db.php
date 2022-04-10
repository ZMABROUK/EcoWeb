<?php 

function dbConnect()
{
  new PDO('msql:host=localhost;dbname=ecoweb', 'root', 'root');
}

?>
