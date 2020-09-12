<?php

    require 'include/connection.php';

    $class=$_POST['class'];
    $subject=$_POST['subject'];

    $rand = rand(10000, 99999);
    
    $file_name = $rand.addslashes($_FILES['UploadNote']['name']);
    $file_tem_loc = $_FILES['UploadNote']['tmp_name'];
    $file_store = "../notes/".$file_name;
    $file_upload = false;

    if(move_uploaded_file($file_tem_loc, $file_store)){
        $file_upload = true;
    }
    else{
        $file_upload = false;
    }

    echo move_uploaded_file($file_tem_loc, $file_store);

    
    if($file_upload){
        $checkQuery = "INSERT INTO notes (class, subject, notelink) VALUES('".$class."', '".$subject."', '".$file_name."')";
        if (mysqli_query($conn, $checkQuery)) {
            echo "<script>window.alert('Notes Added');window.location.href='addNote.php';</script>";
        }
        else{
            echo "<script>window.alert('Please Retry');window.location.href='addNote.php';</script>";
        }
        
    }
    else{
            echo "<script>window.alert('File Not Uploaded');window.location.href='addNote.php';</script>";
    }

?>