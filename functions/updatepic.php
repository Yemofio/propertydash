<?php
session_start();
$db= mysqli_connect("localhost","root","","dash");

if(isset($_POST['submitig'])){
    $id = $_SESSION['aptid'];
    $sql = "SELECT * from picz WHERE ImagesID = '$id'";
    $result= mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result);
    $oldimagename = $row['ImageName'];
    //echo $oldimagename;

    $path = "PICS/".$oldimagename;
    //unlink($path);

    $target = "PICS/".basename($_FILES["image"]["name"]);
    $image = $_FILES["image"]["name"];
    $sqli = "UPDATE picz set ImageName = '$image' WHERE ImagesID = '$id'";
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)){
        $msg = "Image uploaded";

    }else{
        $msg = "Error uploading";
    }
/*
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $newimgname = addslashes(file_get_contents($_FILES['image']['name']));
    $target = "PICS/".basename($newimgname);

    mysqli_query($db, $sqli) or die (mysqli_error($db));
    if(move_uploaded_file($newimgname, $target)){
        header('Location: edit.php');
    }*/
}



?>

