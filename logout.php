<?php
require_once 'connect.php';
if(isset($_SESSION['is_login']) || isset($_COOKIE['_logged'])) {
  if(session_destroy()) {
    setcookie('_logged', null, -(60 * 60 * 24), '/');
    header('location: index.php');
    exit;
  }
} else {
  header('location: index.php');
}
?>