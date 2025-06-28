<?php
require __DIR__.'/../src/config.php';
if (empty($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html><head><meta charset="utf-8"><title>Welcome</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<h1>Добро пожаловать, <?=htmlspecialchars($user)?></h1>
<p>Cookie usercookie = <?=htmlspecialchars($_COOKIE['usercookie'] ?? '')?></p>
<p><a href="logout.php">Выйти</a></p>
</body></html>

