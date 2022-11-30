<?php require_once "cfg/config.php"; ?>
<?php
if(!isset($_SESSION['user']) || $_SESSION['user']['admin']==0{
    header('Location: cfg/index.php');
    exit();
}