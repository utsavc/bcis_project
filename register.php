<?php $title="Login Page"; ?>
<?php include_once 'includes/header.php'; ?>
<?php include_once 'includes/navbar.php'; ?>

<div class="row">

	<div class="col-lg-4"></div>
	<div class="col-lg-4 mt-5 bg-info p-5">

		<form action="registration.php" method="post">
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Username</label>
				<input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">	
			</div>

			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password" name="password" class="form-control" id="exampleInputPassword1">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>

		<?php 

		if (isset($_GET['success'])) {
			echo "<div class='mt-5 alert alert-success' role='alert'>
			Registration Success
			</div>";
		}

		if (isset($_GET['error'])) {
			echo "<div class='mt-5 alert alert-danger' role='alert'>
			Registration Failure
			</div>";
		}



		?>

	</div>
	<div class="col-lg-4"></div>


</div>




</body>
</html>