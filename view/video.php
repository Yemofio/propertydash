<?php
if (isset($_POST['submit'])){

    $filename = $_FILES["file"]["name"];

    $tempname = $_FILES["file"]["tmp_name"];

    $folder = "video/".$filename;

    $db= mysqli_connect("localhost","root","","dash");

    move_uploaded_file($tempname,$folder);

    $sql = "INSERT INTO picz (videoss) VALUES ('$filename')";

    if (mysqli_query($db,$sql)){
        echo "video uploaded";

    }else{
        echo "not Successful";
    }
}
?>
  <form method='POST'  enctype="multipart/form-data">
                <input type="file" name="file" id="file">                
            
             <input type="submit" name="submit" value="submit">
                
</form>