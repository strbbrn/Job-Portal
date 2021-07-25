<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION['job_id']);
unset($_SESSION['follow_url']);
header("Location:index.php");
?>