<?php
require_once "../Model/class_model.php";
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
   
    $conn = new class_model();
    $student = $conn->user_login($username,$password);

    
    if($student['name']){
        header("Location:../document/home.html");
    }else{
        // Redirect to index.php with error indicator
        header("Location:../document/index.php?error=1");
        exit();
    }
?>