<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RSG Quiz</title>
	<link rel="stylesheet" href="style.css">

	<?php
	require './includes/css_include.php';
	?>

	<!-- <div class="menu">
		<ul class="nav">
			<li class="logo"><img src="img/rsglogo.png"></li>
			<li class="nav-item">
				<a class="nav-link active" aria-current="page" href="index.php" style="color: beige;">HOME</a>
			</li>
			<li>
				<a href="logregform.php" class="logreg">
					<button type="button" class="btn btn-warning">Login/Register</button>
				</a>
			</li>
		</ul>
	</div> -->

	<?php
	require './includes/menubar.php';
	?>

</head>

<body>
	<div class="container">
		<div class="row" style="margin-left: 10px;">
			<div class="col-xs-12 col-lg-6">
				<div class="card" data-mdb-toggle="animation" data-mdb-animation-reset="true"
					data-mdb-animation="slide-right">
					<div class="card-body" id="headertext">
						<h1>RSG QUIZ</h1>
						<p>exclusive for</p>
						<p>MASAD GOLD & MASAD CAFE</p>
						<p1>(Please read the rules first before taking the quiz)</p1>
						<br>
						<div class="selection-button">
							<div class="d-flex">
								<div class="me-auto">
									<button type="button" class="btn btn-warning" style="border-radius: 30px;">
										<a href="rules.php">Read the
											Rules</a>
									</button>
								</div>
								<div class="justify-content-end">
									<button type="button" class="btn btn-warning" style="border-radius: 30px;">
										<a href="logregform.php">QUIZ 1</a>
									</button>
									<button type="button" class="btn btn-warning" style="border-radius: 30px;">
										<a href="logregform.php">QUIZ 2</a>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-lg-6">
				<img width="100%" src="img/masad.png">
			</div>
		</div>
		<!-- <div class="banner">
			<div class="headertext"><span>
					<h1>RSG QUIZ</h1>
					<p>exclusive for</p>
					<p>MASAD GOLD & MASAD CAFE</p>
					<p1>(Please read the rules first before taking the quiz)</p1>
				</span>
			</div>
			<div class="headerphoto">
				<img src="img/masad.png">
			</div>
			<div class="menu1">
				<ul>
					<li><a href="rules.php" class="rules"><span><b>Read the Rules</b></span></a></li>
					<li><a href="logregform.php" class="quiz1"><span><b>QUIZ 1</b></span></a></li>
					<li><a href="logregform.php" class="quiz2"><span><b>QUIZ 2</b></span></a></li>
				</ul>
			</div>
		</div> -->
	</div>
</body>

<?php
	require './includes/js_include.php';
?>

</html>