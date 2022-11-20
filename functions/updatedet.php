<?php
session_start();
$db= mysqli_connect("localhost","root","","dash");
if(isset($_POST['submit'])){
    $id = $_SESSION['aptid'];
    $desc = filter_input(INPUT_POST, 'desc');
    $loc = filter_input(INPUT_POST, 'loc');
    $name = filter_input(INPUT_POST, 'ent');
    $contact = filter_input(INPUT_POST, 'cont');

    $sql = "UPDATE picz set Descriptionn = '$desc', Locationn = '$loc', Enterprisee = '$name', Contactt = '$contact'
    WHERE ImagesID = '$id'";
    mysqli_query($db, $sql) or die(mysqli_error($db));
    header('Location: edit.php');
}

    


?>