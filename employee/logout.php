<?php 
session_start();
session_destroy();
header('location:../elogin/login.php');?>