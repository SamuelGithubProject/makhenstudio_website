<?php
session_start();
unset($_SESSION['logged_stat']);
unset($_SESSION['Nama']);
unset($_SESSION['level_user']);
session_destroy();
header("Location:../index.php");
