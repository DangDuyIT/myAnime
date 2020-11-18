<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script href="main.js"> </script>
</head>
<style>
    .logo span {
        font-size: 20px;
        color: white;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }

    .star {
        position: absolute;
        top: 0px;
    }
</style>

<body>
    <div id='stars'></div>
    <nav class="nav">
        <div class="container navbar-light bg-dark border">
            <div class="row mb-2">
                <div class="col-3">
                    <div class="logo">
                        <a href="index.php"><img class="w-80 h-100" src="Anime.png" alt="logo"></a>

                    </div>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <form class="form-inline mb-3">
                        <input class="form-control mt-4 p-4 d-flex justify-content-center rounded-pill" type="search" placeholder="Search Anime" aria-label="Search" style="width:200px">
                        <button class="btn btn-outline-secondary mt-4 px-3 py-2 ml-2" type="submit">Search</button>
                    </form>
                </div>
                <div class="col-3 float-right">
                    <div id="mainListDiv" class="main_list float-right ">
                        <div class="containButton mt-2 text-white">
                            <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {

                            ?>
                                <span class="mr-3" style="font-size:16px;"> <?php echo $_SESSION['username']; ?></span>
                                <a class="btn btn-outline-primary " href="login.php">Log out</a>
                            <?php } else { ?>

                            <?php } ?>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </nav>
    <nav class="nav navbar navbar-expand-lg justify-content-center mt-5">
        <div class="container">
            <ul id="mega-menu-1">
                <li><a class="navbar-brand " href="index.php">Home Page</a></li>
                <li><a class="navbar-brand " href="index.php">Newest</a></li>

                <li>
                    <div class="dropdown">
                        <a class="navbar-brand  dropbtn" href="#">Category</a>
                        <div class="dropdown-content">
                            <ul>
                                <li>
                                    <a href="">Completed</a>
                                </li>
                                <li>
                                    <a href="">
                                        In progress
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>

                </li>
                <li>
                    <div class="dropdown">
                        <a class="navbar-brand " href="#">Status</a>
                        <div class="dropdown-content">
                            <ul>
                                <li>
                                    <a href="">Action</a>
                                </li>
                                <li>
                                    <a href="">
                                        Comedy
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        School
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="navbar-brand " href="#">
                        See Multiple </a>
                </li>
                <li><a class="navbar-brand " href="#">Most Comments</a></li>
                <li>
                    <div class="dropdown">
                        <a class="navbar-brand " href="#">Year</a>
                        <div class="dropdown-content">
                            <ul>
                                <li>
                                    <a href="">2012</a>
                                </li>
                                <li>
                                    <a href="">
                                        2013
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        2014
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        2016
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        2017
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        2018
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        2019
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        2020
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </li>
            </ul>
        </div>
    </nav>
    <!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="scripts.js"></script>

    <!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>



</body>

</html>