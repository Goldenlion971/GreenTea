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
	<title>Green Coffee - À propos de nous</title>
</head>
<body>
	<?php include 'components/header.php'; ?>
	<div class="main">
		<div class="banner">
			<h1>À propos de nous</h1>
		</div>
		<div class="title2">
			<a href="home.php">accueil </a><span>/ à propos</span>
		</div>
		<div class="about-category">
			<div class="box">
				<img src="img/3.webp">
				<div class="detail">
					<span>coffee</span>
					<h1>lemon green</h1>
					<a href="view_products.php" class="btn">acheter mainteant</a>
				</div>
			</div>
			<div class="box">
				<img src="img/2.webp">
				<div class="detail">
					<span>coffee</span>
					<h1>lemon Teaname</h1>
					<a href="view_products.php" class="btn">acheter maintenant</a>
				</div>
			</div>
			<div class="box">
				<img src="img/about.png">
				<div class="detail">
					<span>coffee</span>
					<h1>lemon Teaname</h1>
					<a href="view_products.php" class="btn">shop now</a>
				</div>
			</div>
			<div class="box">
				<img src="img/1.webp">
				<div class="detail">
					<span>coffee</span>
					<h1>lemon green</h1>
					<a href="view_products.php" class="btn">acheter maintenant</a>
				</div>
			</div>
		</div>
		<section class="services">
			<div class="title">
				<img src="img/download.png" class="logo">
				<h1>pourquoi nous choisir ?</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dolorum deserunt minus veniam
                    tenetur
                </p>
			</div>
			<div class="box-container">
				<div class="box">
					<img src="img/icon2.png">
					<div class="detail">
						<h3>grandes économies</h3>
						<p>Économisez gros à chaque commande</p>
					</div>
				</div>
				<div class="box">
					<img src="img/icon1.png">
					<div class="detail">
						<h3>soutien 24/7 </h3>
						<p>Soutien individuel</p>
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
		<div class="about">
			<div class="row">
				<div class="img-box">
					<img src="img/3.png">
				</div>
				<div class="detail">
					<h1>visitez notre showroom !</h1>
					<p>Our showroom is an expression of what we love doing; being creative with floral and plant
                        arrangements.
                        Whether you are looking for a florist for your perfect wedding, or just want to uplift any room
                        with
                        some one of a kind living decor, Blossom With Love can help.</p>
                    <a href="view_products.php" class="btn">acheter maintenant</a>
				</div>
			</div>
		</div>
		<div class="testimonial-container">
			<div class="title">
				<img src="img/download.png" class="logo">
				<h1>que disent les gens à notre propos ?</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dolorum deserunt minus veniam
                    tenetur
                </p>
            </div>
                <div class="container">
                	<div class="testimonial-item active">
                		<img src="img/01.jpg">
                		<h1>sara smith</h1>
                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                	</div>
                	<div class="testimonial-item">
                		<img src="img/02.jpg">
                		<h1>john smith</h1>
                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                	</div>
                	<div class="testimonial-item">
                		<img src="img/03.jpg">
                		<h1>selena panari</h1>
                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                	</div>
                	<div class="testimonial-item">
                		<img src="img/04.png">
                		<h1>alweena ansari</h1>
                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                	</div>
                	<div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
                	<div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
                </div>
		</div>
		<?php include 'components/footer.php'; ?>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="script.js"></script>
	<script type="text/javascript">
		let slides = document.querySelectorAll('.testimonial-item');
		let index = 0;

		function nextSlide(){
		    slides[index].classList.remove('active');
		    index = (index + 1) % slides.length;
		    slides[index].classList.add('active');
		}
		function prevSlide(){
		    slides[index].classList.remove('active');
		    index = (index - 1 + slides.length) % slides.length;
		    slides[index].classList.add('active');
		}
	</script>
	<?php include 'components/alert.php'; ?>
</body>
</html>