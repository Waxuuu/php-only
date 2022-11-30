<?php
require_once 'cfg/config.php'
unset($_SESSION['user']);
header('location:login.php');
?>