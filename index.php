<?php session_start(); ?>
<?php $title="Login Page"; ?>
<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/navbar.php'; ?>

	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/bg.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="images/photo.jpg" class="d-block w-100" alt="...">
			</div>
			
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>


	<div class="container-fluid p-5" style="background: #ebf0ec;">
		<h1 class="text-center mt-5">About Us</h1>

		<div class="row">
			<div class="col-lg-4">
				<img class="img img-thumbnail" src="images/bg.jpg">
				
			</div>
			<div class="col-lg-8">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>

	<div class="p-5 text-center">
		<h1 class="text-center mb-5">Our Team</h1>

		<img class="member_img" src="images/user1.jpeg" >
		<img class="member_img" src="images/user2.jpg">
		<img style="border-radius: 40%; width: 10%;" src="images/user3.jpg">
		
	</div>


	<div class="text-center mt-5 p-2" style="background: #ebf0ec;">

		<span>All Rights Reserved <a href="">My Website</a> Copyright &copy; 2022 </span>
		
	</div>

	<style type="text/css">
		.member_img{
			border-radius: 50%;
			width: 15%;
		}
	</style>





</body>
</html>