<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Security-Policy" content="connect-src * 'unsafe-inline'; font-src 'self' data:;">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/carousel.css">
	<link rel="stylesheet" type="text/css" href="css/instituto.css">
	<link rel="stylesheet" type="text/css" href="css/extra-info.css">
	<link rel="stylesheet" type="text/css" href="css/galery.css">
	<title>Website</title>
	<script src="js/jquery-3.6.1.js"></script>
	<script src="js/index.js"></script>
	<link href="src/fontawesome-free-6.2.0-web/css/fontawesome.css" rel="stylesheet">
	<link href="src/fontawesome-free-6.2.0-web/css/brands.css" rel="stylesheet">
	<link href="src/fontawesome-free-6.2.0-web/css/solid.css" rel="stylesheet">

	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="js/index.js" crossorigin="anonymous"></script>
</head>

<body>
	<?php
		include "components/header.html";
	?>

	<div class="content">
		<?php
			include "components/carousel.html";
			include "components/extra-info.html";
			include "components/institucional.html";
			include "components/galery.html";
		?>
	</div>
</body>

</html>