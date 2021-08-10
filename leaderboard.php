<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSG Quiz (Leaderboards)</title>
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
                    <h1 class="card-title mt-3">User Leaderboards</h1>
                    <div class="card-body">

                        <div class="row">
                            <h3>Quiz 1</h3>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Score</th>
                                        <th scope="col">Quiz No.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
    
                            $sql = "SELECT * FROM quiz WHERE quizNo=1 ORDER BY score DESC LIMIT 5";
                            $result = mysqli_query($con, $sql);
    
                            while($row = mysqli_fetch_assoc($result)) {  
                            ?>
    
                                    <tr>
                                        <th>
                                            <?php echo $row['id']; ?>
                                        </th>
                                        <td>
                                            <?php echo $row['username']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['score']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['quizNo']; ?>
                                        </td>
                                    </tr>
    
                                    <?php
                            }
                            ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="row mt-3">
                            <h3>Quiz 2</h3>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Score</th>
                                        <th scope="col">Quiz No.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
    
                            $sql = "SELECT * FROM quiz WHERE quizNo=2 ORDER BY score DESC LIMIT 5";
                            $result = mysqli_query($con, $sql);
    
                            while($row = mysqli_fetch_assoc($result)) {  
                            ?>
    
                                    <tr>
                                        <th>
                                            <?php echo $row['id']; ?>
                                        </th>
                                        <td>
                                            <?php echo $row['username']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['score']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['quizNo']; ?>
                                        </td>
                                    </tr>
    
                                    <?php
                            }
                            ?>
                                </tbody>
                            </table>
                        </div>

                        <!-- <h1>DI BAWAH ADALAH SYARAT UNTUK MENJAWAB QUIZ:</h1><br><br>
						<P>1. Peserta diwajibkan untuk membaca risalah RSG Medicare sebelum menjawab.</p>
						<p>2. Peserta diwajibkan untuk menonton video program Bicara Pakar Dari Bumi di YT Channel.</p>
						<p>3. Setiap soalan perlu dijawab dalam masa 60 saat.</p>
						<div style="text-align: center;">
							<p>
								<iframe width="420" height="345"
									src="https://www.youtube.com/embed/SSEXnpa1z4g"></iframe>
							</p>
							<p>
								<iframe width="420" height="345"
									src="https://www.youtube.com/embed/I_BnjU2DwOY"></iframe>
							</p>
							<p>
								<iframe width="420" height="345"
									src="https://www.youtube.com/embed/FlhntUOkyNo"></iframe>
							</p> -->
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