<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/style.css">
	<title>Clinic</title>
</head>

<body>
	<div class="wrapper">
		<?php require "php/header.php" ?>
		<main class="page">
			<?php
			require "php/sections/multi-profile.php";
			require "php/sections/check-up.php";
			?>
		</main>
	</div>
	<?php require "php/footer.php" ?>
	<div class="overlay"></div>
	<?php require "php/forms/reception-form.php" ?>
</body>
<script src="/js/swiper.js"></script>
<script src="/js/script.js"></script>

</html>