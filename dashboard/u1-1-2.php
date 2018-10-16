<?php
    session_start();

      if(isset($_SESSION['username'])) {
      //echo $_SESSION['username']."-".$_SESSION['role'];
      //header('Location: user.php');
    } else {
         header('Location: ../index.php');
        // die();
    }

    $total = count($_FILES['upload']['name']);

    // Loop through each file
    for( $i=0 ; $i < $total ; $i++ ) {

    //Get the temp file path
    $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

    //Make sure we have a file path
    if ($tmpFilePath != ""){
        //Setup our new file path
        $temp = explode(".", $_FILES["upload"]["name"][$i]);
        $newFilePath = "uploadFiles/". $_SESSION['dept'] . "//1.1.2/" . $i . '.' . end($temp);

        //Upload the file into the temp dir
        if(move_uploaded_file($tmpFilePath, $newFilePath)) {

        //Handle other code here

        }
    }
    }

    include("../config.php"); //config.php
    $pc = $_POST['programmeCode'];
    $pn = $_POST['programmeName'];
    $notd = $_POST['notd'];
    $yoi = $_POST['yoi'];
    $rev = $_POST['rev'];
    $yor = $_POST['yRev'];
    $perSy = $_POST['perSy'];
    $lord = $_POST['lord'];
    $submitted_by = $_SESSION['dept'];

    $sql = "INSERT INTO `1.1.2` VALUES ('$pc', '$pn', '$notd','$yoi', '$rev', '$yor','$perSy', '$lord', '$submitted_by')";
    if (mysqli_query($dbCon, $sql)) {
        header('Location: user.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($dbCon);
    }
    
    
    mysqli_close($dbCon);
?>

