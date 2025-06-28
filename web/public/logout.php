<?php
require __DIR__.'/../src/config.php';
session_destroy();
setcookie('usercookie', '', time()-3600, '/');
header('Location: login.php');
exit;

