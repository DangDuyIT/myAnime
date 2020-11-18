<?php
require "Connection.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="background.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script href="main.js"> </script>

    <title></title>
</head>

<body class="bg-black">

    <?php include("Header.php"); ?>
    <?php
    if (isset($_GET["idfilm"])) {
        $idfilm = $_GET["idfilm"];
        echo $idfilm;
    ?><div class="container mt-5 bg .bg-secondary border main-section">
            <div class="row mt-5">
                <div class="col-2 mt-4"> </div>
                <div class="col-8">
                    
                    <?php $sql = "SELECT * FROM detailfilm WHERE id_film = '" . $_GET['idfilm'] . "'";
                    $result = $conn->query($sql) or die($conn->error);
                    $row = $result->fetch_assoc();
                    ?>

                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <h2 class="text-white"><?php echo $row["animeName"]?></h2>
                        <div class="mt-5">
                            <iframe width="700" height="500" src="<?php echo $row["url"] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                        <?php
                        $sql = "SELECT * FROM descriptionfilm WHERE id_film = '" . $_GET['idfilm'] . "'";
                        $result = $conn->query($sql) or die($conn->error);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                        ?>

                                <div class="card text-white  bg-dark border shadow mt-5">
                                    <p style="font-size: 14px;"><?php echo $row["description"] ?> </p>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-2 mt-5">
                    <div class="card">
                        Advertisement here
                    </div>
                </div>

            </div>
        </div>
    <?php } else { ?>
        <h1>Don't have a Flim</h1>
    <?php } ?>
</body>
<?php include("Footer.php"); ?>

</html>