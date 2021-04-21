<?php
session_start();
if ($_SESSION['fullname'] == '') {
   header('location:./');
}
?><!DOCTYPE html>
<html>
<head>
    <?php include_once 'class/includes/head.php'; ?>
</head>
<body>
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <?php include_once 'class/includes/sidebar.php'; ?>
    </nav>

    <!-- Page Content  -->
    <div id="content">
        <?php include_once 'class/includes/nav.php'; ?>
        <div id="ModalGeneral"></div>
        <div id="resultContent"></div>
    </div>
</div>
<?php include_once 'class/includes/scripts.php'; ?>
</body>
</html>