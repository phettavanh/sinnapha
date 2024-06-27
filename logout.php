<?php
session_start();
unset($_SESSION['username'],$_SESSION['password']);

header('location:login.php');