<?php
	$message="";
	if(isset($_POST["valider"])){

		$message ="Nom du fichier: " .$_FILES["monfichier"]["name"]."<br/>";
		$message.="Nom temporiare du fichier: " .$_FILES["monfichier"]["tmp_name"]."<br/>";
		$message.="type du fichier: " .$_FILES["monfichier"]["type"]."<br/>";
		$message.="taille du fichier: " .$_FILES["monfichier"]["size"]." octets"."<br/>";
		
		move_uploaded_file($_FILES["monfichier"]["tmp_name"],"../image/".$_FILES["monfichier"]["name"]);
		
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>I love PHP</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<h1>Upload</h1>
	<hr>
	<div class="form">
		<form enctype="multipart/form-data" action="upload.php" method="post">
			<input type="file" name="monfichier"> <br>
			<input type="submit" name="valider" value="Envoyer le fichier" />
		</form>
	</div>

	<div>
		<?php echo $message ?>
	</div>

</body>
</html> 