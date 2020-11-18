<?php session_start(); 
 
if (isset($_SESSION['username'])){
    unset($_SESSION['username']); // del session login
    header("Location: Login.php");
}
?>
