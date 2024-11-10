<?php
session_start();
session_unset();
session_destroy();
header("Location: cinemarvel_home.php");
exit();
?>
