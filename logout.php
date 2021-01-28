<?php
session_start();
$_SESSION = [];
header('Location: page.php');
