<?php
include_once 'class/Config.php';
$config = new Config();
// var_dump($config->create_url(5));

$lis_url = $config->create_url(5);

foreach($lis_url as $url) {
    echo 'URL: http://document.com/'.$url["url"].'<br>';
}