<?php include_once('frame/header.php') ?>

	<section class="main">
		<!-- main
		<div>
			<nav class="navbar navbar-light bg-light">
				<form class="form-inline">
					<button class="btn btn-outline-success" type="button"> <img src="./res/ionicons.designerpack/ios-heart-empty.svg" alt=""> Main button</button>
					<button class="btn btn-sm btn-outline-secondary" type="button">Smaller button</button>
				</form>
			</nav>
		</div> -->
		<div>
			<a href="take_pic.php">take pic</a> <br>
			<button>change profile pic</button>
		</div>
		<form action="" method="post">
			<div class="form-group"><input class="form-control" type="text" name="" id="" placeholder="First Name"></div>
			<div class="form-group"><input class="form-control" type="text" name="" id="" placeholder="Surname"></div>
			<div class="form-group"><input class="form-control" type="email" name="" id="" placeholder="Email"></div>
<br>
<br>
			<div class="form-group"><input class="form-control" type="text" name="" id="" placeholder="Age"></div>
			<div class="form-group">
				<label for="">Your gender</label> <br>
				<select class="form-control" name="" id="">
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Sexual Orientation</label> <br>
				<select class="form-control" name="" id="">
					<option value=""></option>
					<option value="male">Hetrosexual(opposite)</option>
					<option value="female">Homosexual(same)</option>
					<option value="bisexual">Bisexual(we are all humman)</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Describe yourself</label>
				<div><textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="About me"></textarea></div>
			</div>
			<div class="form-group">
				<label for="">Hash_me</label>
				<div>[food, music, movies, books,lifestyle, hobbies]</div>
			</div>
			<button class="btn btn-success" type="submit">Save</button>
		</form>
	</section>
	<section class="footer">footer</section>
	<!-- footer -->
<?php include_once('frame/footer.php') ?>