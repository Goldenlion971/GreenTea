<?php 
 include 'components/connection.php';
 session_start();
 if (isset($_SESSION['user_id'])) {
		$user_id = $_SESSION['user_id'];
	}else{
		$user_id = '';
	}

	if (isset($_POST['logout'])) {
		session_destroy();
		header("location: login.php");
	}
?>
<style type="text/css">
	<?php include 'style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Green Coffee - contact</title>
</head>
<body>
	<?php include 'components/header.php'; ?>
	<div class="main">
		<div class="banner">
			<h1>nous contacter</h1>
		</div>
		<div class="title2">
			<a href="home.php">accueil </a><span>/ nous contacter</span>
		</div>
		<section class="services">
			<div class="box-container">
				<div class="box">
					<img src="img/icon2.png">
					<div class="detail">
						<h3>grandes économies</h3>
						<p>économisez gros à chaque commande</p>
					</div>
				</div>
				<div class="box">
					<img src="img/icon1.png">
					<div class="detail">
						<h3>soutien 24*7</h3>
						<p>soutien individuel</p>
					</div>
				</div>
				<div class="box">
					<img src="img/icon0.png">
					<div class="detail">
						<h3>chèques cadeaux</h3>
						<p>Des chèques cadeaux pour chaque occasion</p>
					</div>
				</div>
				<div class="box">
					<img src="img/icon.png">
					<div class="detail">
						<h3>livraison express</h3>
						<p>Livraison dans le monde entier</p>
					</div>
				</div>
			</div>
		</section>
		<div class="form-container">
			 <form method="post">
			 	<div class="title">
			 		<img src="img/download.png" class="logo">
			 		<h1>laisser un message</h1>
			 	</div>
			 	<div class="input-field">
			 		<p>votre nom <sup>*</sup></p>
			 		<input type="text" name="name">
			 	</div>
			 	<div class="input-field">
			 		<p>votre email <sup>*</sup></p>
			 		<input type="email" name="email">
			 	</div>
			 	<div class="input-field">
			 		<p>votre numéro <sup>*</sup></p>
			 		<input type="text" name="number">
			 	</div>
			 	<div class="input-field">
			 		<p>votre message <sup>*</sup></p>
			 		<textarea name="message"></textarea>
			 	</div>
			 	<button type="submit" name="submit-btn" class="btn">envoyer votre message</button>
			 </form>
			 
		</div>
		<div class="address">
			 	<div class="title">
			 		<img src="img/download.png" class="logo">
			 		<h1>coordonnées</h1>
			 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,consectetur adipisicing elit </p>
			 	</div>
			 	<div class="box-container">
			 		<div class="box">
			 			<i class="bx bxs-map-pin"></i>
			 			<div>
			 				<h4>adresse</h4>
			 				<p>1092 Merigold Lane, Coral Way</p>
			 			</div>
			 		</div>
			 		<div class="box">
			 			<i class="bx bxs-phone-call"></i>
			 			<div>
			 				<h4>phone number</h4>
			 				<p>8866889955</p>
			 			</div>
			 		</div>
			 		<div class="box">
			 			<i class="bx bxs-map-pin"></i>
			 			<div>
			 				<h4>email</h4>
			 				<p>golden@golden.com</p>
			 			</div>
			 		</div>
			 	</div>
			 </div>
		<?php include 'components/footer.php'; ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="script.js"></script>
	<?php include 'components/alert.php'; ?>
</body>
</html>