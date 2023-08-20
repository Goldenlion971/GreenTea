<header class="header">
	<div class="flex">
		<a href="home.php" class="logo"><img src="../img/logo.jpg"></a>
		<nav class="navbar">
			<a href="dashboard.php">dashboard</a>
			<a href="add_posts.php">ajouter un produit</a>
			<a href="view_posts.php">voir l'article</a>
			<a href="user_accounts.php">comptes</a>
		</nav>
		<div class="icons">
			<i class="bx bxs-user" id="user-btn"></i>
			
			<i class='bx bx-list-plus' id="menu-btn" style="font-size: 2rem;"></i>
		</div>
		<div class="profile-detail">
			<?php 
				$select_profile = $conn->prepare("SELECT * FROM `admin` WHERE id=?");
				$select_profile->execute([$admin_id]);
				if ($select_profile->rowCount() > 0) {
					$fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
				
			?>
			<div class="profile">
				<img src="../image/<?= $fetch_profile['profile']; ?>" class="logo-image" width="100">
				<p><?= $fetch_profile['name']; ?></p>
			</div>
			<div class="flex-btn">
				<a href="update_profile.php" class="btn">mettre à jour le profil</a>
				<a href="../components/admin_logout.php" onclick="return confirm('logout from this website')" class="btn">se déconnecter</a>
			</div>
			<?php }?>
		</div>
	</div>
</header>




