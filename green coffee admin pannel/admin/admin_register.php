<?php 
	include '../components/connection.php';

	if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['password']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = sha1($_POST['cpassword']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   $image = $_FILES['image']['name'];
   $image = filter_var($image, FILTER_SANITIZE_STRING);
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = '../image/'.$image;

   $select_admin = $conn->prepare("SELECT * FROM `admin` WHERE name = ?");
   $select_admin->execute([$name]);
   
   if($select_admin->rowCount() > 0){
      $message[] = 'cet utilisateur existe déjà!';
   }else{
      if($pass != $cpass){
         $warning_msg[] = 'le mot de passe ne correspond pas!';
      }else{
         $insert_admin = $conn->prepare("INSERT INTO `admin`(name, password,profile) VALUES(?,?,?)");
         $insert_admin->execute([$name, $cpass,$image]);
         move_uploaded_file($image_tmp_name, $image_folder);
         $success_msg[] = 'nouvel administrateur enregistré!';
      }
   }

}

?>
<style>
	<?php include 'admin_style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- font awesome cdn link  -->
   <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<title>Administrateur connexion page</title>
</head>
<body style="padding-left: 0 !important;">

	<div class="main-container">
		
		
		<section>
			
			<div class="form-container" id="admin_login">
				<form action="" method="post" enctype="multipart/form-data">
					<h3>s'enregistrer</h3>
					<div class="input-field">
						<label>nom d'utitilisateur <sup>*</sup></label>
						<input type="text" name="name" maxlength="20" required placeholder="Enter your username" oninput="this.value.replace(/\s/g,'')">
					</div>
					<div class="input-field">
						<label>mot de passe <sup>*</sup></label>
						<input type="password" name="password" maxlength="20" required placeholder="Enter your password" oninput="this.value.replace(/\s/g,'')">
					</div>
					<div class="input-field">
						<label>confirmez votre mot de passe <sup>*</sup></label>
						<input type="password" name="cpassword" maxlength="20" required placeholder="Enter your password" oninput="this.value.replace(/\s/g,'')">
					</div>
					<div class="input-field">
						<label>télécharger le profil <sup>*</sup></label>
						<input type="file" name="image" accept="image/jpg, image/jpeg, image/png, image/webp">
					</div>
					<input type="submit" name="submit" value="register now" class="btn">
					<p>vous avez déjà un compte ? <a href="admin_login.php">se connecter</a></p>
				</form>
			</div>
		</section>
	</div>
	<!-- sweetalert cdn link  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

	<!-- custom js link  -->
	<script type="text/javascript" src="script.js"></script>

	<?php include '../components/alert.php'; ?>
</body>
</html>