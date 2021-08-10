<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #42455a;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/rsglogo.png" width="55px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="indexlogin.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rules.php">Rules</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Quiz
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="QUIZ/indexquiz1.php">Quiz 1</a></li>
                        <li><a class="dropdown-item" href="QUIZ/indexquiz2.php">Quiz 2</a></li>
                        <!-- <li>
                                <hr class="dropdown-divider">
                            </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="leaderboard.php">Leaderboards</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
            </ul>
            <form class="d-flex">
                <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                <a href="index.php">
                    <button type="button" class="btn btn-warning">Logout</button>
                </a>
            </form>
        </div>
    </div>
</nav>