<?php

session_start();

$_SESSION['logincorrecto'] = 0;

header('Location: index.php');
exit;

?>