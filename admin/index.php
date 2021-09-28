<?php
	$dossier = "../image/";
	$ouverture = opendir($dossier);
    $img = 0;

	while($photo = readdir($ouverture)){
		if(!is_dir($dossier.$photo) && $photo != "." && $photo != ".."){
			$img = $img +1;
		}
	}
	closedir($ouverture);
	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/css/style.css">
    <title>⚙️__ admin</title>

    <style>
    </style>
</head>
<body>
    <div class="top">
        <a href="../" class="button galerie">Galeries</a>
        <h1 class="titel">Admin</h1>
        <hr class="titel_br">
    </div>
    <section>
    <div class="main">
        <div>
            <a class="button upload" href="upload.php">Telecharger une image</a> 
            <a class="button supr" href="supr.php">Suprimé une image </a> 
        </div>

        </div>
            <h1>Nombre d'images</h1>
            <h1 class="titre1" ><?= $img ?></h1>
        </div>
    </div>
  

    </section>
</body>
</html>