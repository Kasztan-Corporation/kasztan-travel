<?php
include_once "components.php";
$cmp = new Components();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kasztan Travel</title>
	<meta name="description" content="Kasztan Travel, bardzo realna strona z podrózami - by Kasztan Space">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Kasztan Travel">
	<meta name="author" content="Kasztan Space">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<!--[if IE]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->
	<header class="flexbox bg-danger">
		<div class="column m7">
			<h1 class="d2">Kasztan Travel</h1>
			<h2><i>Podróżuj z kasztanami!</i></h2>
			<a href="#main"><button class="btn btn-success btn-lg">Zobacz teraz!</button></a>
			<button class="btn btn-normal m2" disabled>Zaloguj się i buduj swój paszport! (Wkrótce!)</button>
		</div>
		<div class="column">
			<img src="./hero.svg" decoding="async" loading="lazy" alt="Travel" class="img-fluid">
		</div>
	</header>
	<main class="container" id="main">
		<h1>Oferty</h1>
		<?php
		$xmlstr = file_get_contents("hotels.xml");
		$hotels = new SimpleXMLElement($xmlstr);
		for ($i = 0; $i < sizeof($hotels); $i++) {
			$cmp->listing($hotels->hotel[$i]["name"], $hotels->hotel[$i]["price"], $hotels->hotel[$i]["stars"], $hotels->hotel[$i]["country"]);
		}
		?>
	</main>
	<footer>Kasztan Technologia 2021</footer>
</body>

</html>