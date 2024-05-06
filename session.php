<?php 
session_start();
if(!isset($_SESSION['username'])){
    header("Location: SignupLogin.html");
    exit;
}
?>