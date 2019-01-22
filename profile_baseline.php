<?php include_once('frame/header.php') ?>

	<section class="main">
		main
		<form action="" method="post">
			<div class="form-group">
				<label for="age">Age</label>
				<input class="form-control" type="text" name="age" id="age" placeholder="Age">
			</div>
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
				<div><textarea class="form-control" name="" id="" cols="30" rows="10 max=72" placeholder="About me"></textarea></div>
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