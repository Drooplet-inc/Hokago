    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Suprimer</title>
    </head>
    <body>
        <div>
        <h1>liste images</h1>
        <?php
	$dossier = "../image/";
	$ouverture = opendir($dossier);

	while($photo = readdir($ouverture)){
		if(!is_dir($dossier.$photo) && $photo != "." && $photo != ".."){
			echo'<div class="grille">';
					echo'<p>' .$dossier.$photo. '</p>';
			echo'</div>';
		}
	}
	
	closedir($ouverture);

    $delete = $_GET["delete"];
    if(!empty($delete)){
        unlink("../image/".$delete);
        print("Suprésion good");
    }

	?>
        </div>
        <div>
            <div>
                <form action=""  method="get">
                    <input type="text" name="delete">
                    <input type="submit" value="submit">
                </form>
            </div>
        </div>



    </body>
    </html>