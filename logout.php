<?php
    session_start();

  include("config.php"); //connection.php
  if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
             session_destroy();
             header('Location: index.php');             
    } else {
        header('Location: index.php');
        die();
    }
  
?>

