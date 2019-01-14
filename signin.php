<?php
include('frame/header.php');
include('frame/menu.php');
?>
	<section class="main">
		main
		<form action="" method="post">
			<div>
				<label for="username">Username</label>
				<input class="form-control" type="text" name="username" id="username" placeholder="username">
			</div>
			<div>
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" id="password" placeholder="password">
			</div>
			<button class="btn btn-success" type="submit">login</button>
		</form>
		<div><a href="forgot_password.php">forgot_password</a></div>
		<div>Don't have an account? <a href="register.php">register</a></div>
	</section>
	<section class="footer">footer</section>
<?php include('frame/footer.php') ?>