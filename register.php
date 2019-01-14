<?php
include('frame/header.php');
include('frame/menu.php');
?>
	<section class="main">
		<h2 class="center">Matcha</h2>
		<form action="" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input class="form-control" type="text" name="username" id="username" placeholder="username">
			</div>
			<div class="form-group">
				<label for="name">Name</label>
				<input class="form-control" type="text" name="name" id="name" placeholder="name">
			</div>
			<div class="form-group">
				<label for="surname">Surname</label>
				<input class="form-control" type="text" name="surname" id="surname" placeholder="surname">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="psswd" id="password" placeholder="Password">
			</div>
			<div class="form-group">
				<label for="confirm_password">Confirm Password</label>
				<input class="form-control" type="password" name="psswd1" id="confirm_password" placeholder="confirm_password">
			</div>
			<!-- <div class="form-group">
				<label for="age">Age</label>
				<input class="form-control" type="text" name="age" id="age" placeholder="age">
			</div> -->
			<!-- <input class="form-control" type="date" name="" id="">
			<div class="form-group"><input type="text" name="" id="" placeholder="Sex"></div> -->
			<button class="btn btn-success" type="submit">Signup</button>
		</form>
	</section>
	<section class="footer">footer</section>
<?php include('frame/footer.php') ?>