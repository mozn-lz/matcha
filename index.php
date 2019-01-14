<?php
include('frame/header.php');
include('frame/menu.php');
?>
	<section class="main" ng-app="indexApp">
		main
		<div>
			<div>
				<h3>Sort</h3>
				<div class="row">
					<div class="col-sm-2">proximity</div>
					<div class="col-sm-2">common</div>
					<div class="col-sm-2">fame</div>
					<div class="col-sm-2">age</div>
				</div>
			</div>
			<div>
				<h3>Filter</h3>
				<div class="row">
					<div class="col-sm-2">proximity</div>
					<div class="col-sm-2">common</div>
					<div class="col-sm-2">fame</div>
					<div class="col-sm-2">age</div>
				</div>
			</div>
		</div>
		<div class="profile_list">
			<div>
				<div>: <img src="http://" alt="profile pic"></div>
				<div>{{Username}}</div>
			</div>
			<div>40 + 5 = {{40-5}}</div>
			<div>age: {{age}}</div>
			<div>gender: {{gender}}</div>
			<div>oriantation: {{oriantation}}</div>
			<div>bio: {{bio}}</div>
			<div>intrests: {{intrests}}</div>
		</div>
	</section>
	<section class="footer">footer</section>
<?php include('frame/footer.php') ?>