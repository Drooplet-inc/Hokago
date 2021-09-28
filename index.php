<!DOCTYPE html>
<html>
<head>
	<title>Galeries</title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Projects-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    
	<style>

</style>
</head>
<body>
<nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background: url(&quot;https://cdn.bootstrapstudio.io/placeholders/1400x800.png&quot;);">
        <div class="container"><a class="navbar-brand" href="#">Hokago</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#">Link 1</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Link 2</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Link 3</a></li>
                </ul>
                <form class="me-auto search-form" target="_self">
                    <div class="d-flex align-items-center"><label class="form-label d-flex mb-0" for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" id="search-field" name="search"></div>
                </form><a class="btn btn-light action-button" role="button" href="#" style="background: rgb(5,160,129);">Nous rejoindre</a>
            </div>
        </div>
    </nav>
	<section class="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Hokago</h2>
                <p class="text-center">Découvrez les meilleurs fond d'ecran !</p>
            </div>
            <div class="row photos" data-bss-baguettebox="">
            <?php

			$dossier = ("image/");
			$ouverture = opendir($dossier);
			while($photo = readdir($ouverture)){
				if(!is_dir($dossier.$photo) && $photo != "." && $photo != ".."){
					
						echo'<div class="col-sm-6 col-md-4 col-lg-3 item"><a href="'.$dossier.$photo.'"><img class="img-fluid" src="'.$dossier.$photo.'"></a></div>';
            }
				}

			?>
            </div>
        </div>
    </section>
	
	</div>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/Lightbox-Gallery.js"></script>
</body>
</html> 