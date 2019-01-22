<?php include_once('frame/header.php') ?>

	<section class="main">
		<h2 class="center">Matcha</h2>
		<form action="" method="post">
			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<label for="username">Username</label>
						<input class="form-control" type="text" name="username" id="username" placeholder="username">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input class="form-control" type="text" name="email" id="email" placeholder="email">
					</div>
				</div>
				<div class="col-6">
					<div class="form-group">
						<label for="name">Name</label>
						<input class="form-control" type="text" name="name" id="name" placeholder="name">
					</div>
					<div class="form-group">
						<label for="surname">Surname</label>
						<input class="form-control" type="text" name="surname" id="surname" placeholder="surname">
					</div>
				</div>
			</div>
			<div>
				<div class="form-group">
					<label for="password">Password</label>
					<input class="form-control" type="password" name="psswd" id="password" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="confirm_password">Confirm Password</label>
					<input class="form-control" type="password" name="psswd1" id="confirm_password" placeholder="confirm_password">
				</div>
			</div>
			<button class="btn btn-success" type="submit">Signup</button>
		</form>
	</section>
	<section class="footer">footer</section>
	<!-- footer -->
<?php include_once('frame/footer.php') ?>