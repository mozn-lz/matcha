<!DOCTYPE html>
<html lang="en">
<head ng-app="app1">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- <link rel="stylesheet" href="style/css/bootstrap.no-icons.min.css"> -->
	<!-- <link rel="stylesheet" href="style/css/bootstrap.min.js"> -->
	<link rel="stylesheet" href="style/css/bootstrap.min.css">
	<link rel="stylesheet" href="style/css/mastercss.css">
	<title>Matcha</title>
</head>
<body class="container">
	<section class="header">
		<menu>
			<nav class="navbar fixed-top navbar-expand-lg navbar-danger bg-danger">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"><img src="./res/ionicons.designerpack/md-heart-empty.svg" width="40" alt=""></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<a class="navbar-brand" href="index.php"><img src="./res/ionicons.designerpack/md-heart-empty.svg" width="40" alt="">Matcha</a>
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
					<li class="nav-item"><a class="nav-link" href="messages.php">Messages</a></li>
					<li class="nav-item"><a class="nav-link" href="notifications.php">Notifications</a></li>
					<!-- <li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					</li> -->
					</ul>
					<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</nav>
		</menu>
		<div class="inline"><a href="index.php"><img src="" width="50px" alt="">Matcha</a></div>
		<div class="inline right"><a href="profile.php">profile</a></div>
		<div class="inline right"><a href="messages.php">messages</a></div>
		<div class="inline right"><a href="notifications.php">notifications</a></div>
		<div class="inline right">signin/signout</div>
	</section>