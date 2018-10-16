<?php

session_start();

 if(isset($_SESSION['username'])) {
  echo $_SESSION['username'];
  header('Location: user.php');
} else {
     header('Location: index.php');
    // die();
}

        include("config.php"); //config.php
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);
        
        $sql = "SELECT * FROM auth WHERE username = '$username'";
        $query = mysqli_query($dbCon, $sql); 
         if ($query) {
            $row = mysqli_fetch_row($query); 
            $userId = $row[0];
            $dbUsername = $row[1];
            $dbPassword = $row[2];
            $dbRole = $row[3];
            $dbDept = $row[4];
         }
 

        if ($username == $dbUsername && $password == $dbPassword) {
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $dbRole;
            $_SESSION['dept'] = $dbDept;
            //echo $_SESSION['username'];
            header('Location: dashboard/user.php');
        } else {
            //echo "Error";
            //header('Location: index.php');
        }
    
?>