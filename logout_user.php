<?php
session_start();
unset($_SESSION['st_id'],$_SESSION['room']);

header('location:login_user.php');