<?php

session_start();
session_destroy();
header("Location: ../index.php");

setcookie('username', '', time() - 3600);
$hash = hash('sha256',  $row['id']);
setcookie('hash', '', time() - 3600);
header("Location: ../index.php");
die;
