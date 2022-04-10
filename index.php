<?php

$action = isset($_GET['action']) ? (string) $_GET['action'] : 'web';

switch ($action) {
  default:
    require('views/404.php');
}
?>
