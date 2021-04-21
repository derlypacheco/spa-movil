<?php
session_start();
include_once '../../../class/Config.php';
$config = new Config();
$listItem = $config->ListArray("select creditcost_art from global_article where id_art = '".$_GET['id']."' ");
if (count($listItem) > 0) {
    foreach ($listItem as $row);
    echo $row['creditcost_art'];
}
