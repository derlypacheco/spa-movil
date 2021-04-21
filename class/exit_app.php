<?php
session_start();
session_destroy();
setcookie("user", '');
setcookie("_dig", '');
echo '1';