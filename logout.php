<?php
require'common.php';
unset($_SESSION['email']);
session_destroy();

header("Location: index.php");
exit;
?>