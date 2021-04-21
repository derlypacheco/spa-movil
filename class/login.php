<?php
session_start();
require_once 'Config.php';
$config = new Config();
echo $config->aut_application(addslashes($_POST['txtUser']), md5($_POST['txtPass']));