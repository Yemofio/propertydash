<?php
session_start();

$success=array();

if (isset($_POST['Back'])){

	header('Location: ../admin/admin.php');
}


if (isset($_POST['upload'])){
    $target = "PICS/".basename($_FILES['image']['name']);

    $db= mysqli_connect("localhost","root","","dash");

    $image = $_FILES['image']['name'];

    $Status = $_POST['Statuss'];

    $price = $_POST['Pricee'];

    $Bed = $_POST['Bedroomm'];

    $wash = $_POST['Washroomm'];
    
    $Enti = $_POST['Enterprisee'];

    $Loca = $_POST['Locationn'];

    $Desc = $_POST['Descriptionn'];

    $Cont = $_POST['Contactt'];

    $video = $_FILES["video"]["name"];

    $vidfolder = "video/".$video;





    $sql = "INSERT INTO picz (ImageName,Statuss,Pricee,Bedroomm,Washroomm,Enterprisee,Locationn,Descriptionn,Contactt, videoss) VALUES ('$image','$Status','$price','$Bed','$wash','$Enti','$Loca','$Desc','$Cont', '$video')";

    mysqli_query($db,$sql);

    //uploaded image into the folder images.

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)){
		
		array_push($success, "Successfully Added");


    }else{

		array_push($success, "Successfully Added");

    }

        //uploaded video into the folder video.

        if (move_uploaded_file($_FILES['video']['tmp_name'], $vidfolder)){
			
			array_push($success, "Successfully Added");

    
        }else{
            $msg = "Error uploading";
        }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Practice</title>
	<meta name = 'viewport' content = 'width=device-width'/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
<style>
    :root{
	--color: #103;
	--direction: center;
	--distance: 15;
}
*{
	box-sizing: border-box;
	margin: 0;
	padding: 0;
	list-style: none;
	text-decoration: none;
}
html{
	scroll-behavior: smooth;
}
body{
	display: flex;
	min-height: 100vh;
	justify-content: center;
	align-items: center;
	background: hsl(130,20%,10%);
	font-size: clamp(18px,1.4vw,22px);
	font-family: sans-serif;
	background: #aab;
	padding: 2rem;
	gap: 10px;
}
.box{
	padding: 30px 30px 50px;
	width: min(100%,500px);
	box-shadow: 1px 1px 2px rgba(0,0,0,.1),
				-1px -1px 2px rgba(55,55,55,.3);	
	background: radial-gradient(#fffa, transparent 90%) top left / 200% 200%;
}
.box:focus-within h2{
	letter-spacing: .1em;
}
hr{
	border: 1px solid #fff;
}
legend{
	text-align: var(--direction);
	padding: 0 calc(1px * var(--distance));
	font-size: 1.5rem;
	letter-spacing: .04em;
	color: var(--color);
}
fieldset{
	border: none;
	border-top: 1px solid var(--color);
	padding: 10px 0;
}
hr{
	display: block;
	margin: 0 0 2rem;
	border-color: var(--color);
}
.box form div{
	margin: 0 0 2rem 0;
}
h2{
	color: var(--color);
	padding: 0 0 25px;
	text-align: center;
	text-decoration: underline;
	transition: all .1s;
}
.box form div label{
	display: block;
	padding: 0 0 8px;
	color: var(--color);
	letter-spacing: .04em;
}
.box form div input{
	outline: none;
	border: none;
	background: none;
	width: 100%;
	padding: 15px;
	font-size: 1rem;
	color: #000;
	font-weight: bold;
	letter-spacing: .08em;
	box-shadow: inset 1px 1px 2px rgba(0,0,0,.4),
				inset -1px -1px 2px rgba(55,55,55,.3);	
}
.box form div input::placeholder{
	color: var(--color);
	opacity: .6;
	letter-spacing: .04em;
}
button{
	outline: none;
	border: none;
	width: 100%;
	padding: 15px;
	font-size: 1.1rem;
	letter-spacing: .1em;
	margin-top: 3%;
	transition: all .1s;
	color: #fff;
	background: none;
	color: var(--color);
	box-shadow: 1px 1px 2px rgba(0,0,0,.6),
				-1px -1px 2px rgba(55,55,55,.7);	
}
button:hover{
	color: #fff;
	background: #101;
}
button:active{
	transform: scale(.9);
}
.succ {
    width: 92%; 
    color: rgb(0, 0, 0);
    padding: 10px;
    border: 1px solid #ad9444;
    background: green;
}

</style>
  </head>

<body>
	<div class = 'box'>
		<form method='post' action='addprop.php' enctype="multipart/form-data">
		<?php include ('../view/success.php'); ?>

			<h2>Properties Of Your Building</h2>
			<fieldset>
				<legend>About</legend>
			</fieldset>
			<div>
				<label>Status</label>
        <input type = 'text' name = 'Statuss' id='Statuss' placeholder = 'Rent/Sale'/>
			</div> 
			<div>
				<label>Price</label>
				<input type = 'text' name = 'Pricee' placeholder = 'Enter the price' />
			</div>
            <div>
				<label>Bedroom</label>
				<input type = 'text' name = 'Bedroomm' placeholder = 'Number of bedrooms' />
			</div>
            <div>
				<label>Washroom</label>
				<input type = 'text' name = 'Washroomm' placeholder = 'Number of washrooms'/>
			</div>
            <div>
				<label>Enterprise</label>
				<input type = 'text' name = 'Enterprisee' placeholder = 'Enter enterprise name' />
			</div>
            <div>
				<label>Location</label>
				<input type = 'text' name = 'Locationn' placeholder = 'Location...' />
			</div>
			<fieldset>
				<legend>Contact</legend>
			</fieldset>
			<div>
				<label>Description</label>
				<input type = 'text' name = 'Descriptionn' placeholder = 'Description' />
			</div>
            <div>
				<label>Contact</label>
				<input type = 'text' name = 'Contactt' placeholder = 'Contact' />
			</div>
            <fieldset>
				<legend>Add Picture/Video</legend>
			</fieldset>
            <div>
				<label>Upload Picture</label>
                <input type="file" name="image" accept="image/*">
			</div>
            <div>
				<label>Upload Video</label>
                <input type="file" name="video" accept = "video/*">
			</div>
            <div>
                    <input type="submit" name="upload" value="submit">
                </div>
				<div>
                    <input type="submit" name="Back" value="Back">
                </div>
		</form>
		
	</div>
</body>
</html>