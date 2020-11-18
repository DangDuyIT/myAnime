<?php
session_start();
if (isset($_SESSION['username']) && $_SESSION['username']) {
} else {
    header("Location: Login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="background.css">

    <title>518H0168 - Films</title>
</head>


<body class=" bg-black">


    <div class="container-fluid mt-0 .bg-secondary">
        <?php include("Header.php") ?>

        <div class="container mt-5 bg-dark mt-0">


        </div>
        <div class="container mt-5 bg .bg-secondary border main-section">

            <div class="row mt-5">
                <?php
                require "Connection.php";
                $sql = "SELECT * FROM listFilm";


                $result = $conn->query($sql) or die($conn->error);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 mt-3 rounded-sm">
                            <div class="card border-bottom-0 rounded-sm">
                                <img class="card-img-top" src="<?php echo $row['img'] ?>">
                            </div>
                            <div class="card border-top-0 rounded-0">
                                <div class="card-footer .bg-black border-0">
                                    <a class=" float-left text-lg mt-2" href="Film.php?idfilm=  <?php echo $row["id"] ?>"><?php echo $row['nameAnime'] ?></a>
                                    <span class="float-right text-danger mt-2">Views: <?php echo $row['views'] ?></span>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }

                ?>


            </div>

        </div>
</body>
<?php include("Footer.php"); ?>

</html>