<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSG Quiz (Profile)</title>
    <link rel="stylesheet" href="style.css">

    <?php
	require './connect.php';
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
	require './includes/menubar_login.php';
	?>

</head>

<body>
    <div class="container">
        <div class="row" style="margin-left: 10px;">
            <div class="col-xs-12 col-lg-12">
                <div class="card" data-mdb-toggle="animation" data-mdb-animation-reset="true"
                    data-mdb-animation="slide-right">
                    <h5 class="card-title mt-3">User Profile</h5>
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

<?php
	require './includes/js_include.php';
?>

</html>