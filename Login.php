<?php
session_start();
require "Connection.php";
if (isset($_POST["txtUsername"]) && isset($_POST["txtPassword"])) {

    $username = $_POST["txtUsername"];
    $password = $_POST["txtPassword"];
    $mdpass = md5($password);
    $sql = "SELECT * FROM account WHERE username = '$username' AND password = '$mdpass'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    if ($mdpass != $row['password']) {
        echo "Password is incorrect. Please enter again. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    } else {
        $_SESSION["username"] = $username;
        header("Location: index.php");
        die();
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="background.css">
</head>

<body class="bg-black">
    <!-- Material form login -->
    <div id='stars'></div>
    <div class="card card-login  shadow w-25 d-flex ">
        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Sign in</strong>
        </h5>
        <!--Card content-->
        <div class="card-body px-lg-5 pt-0 mt-5 ">
            <!-- Form -->
            <form class="text-center mt-2" action='Login.php?do=login' method='POST'>
                <table class=" table-responsive d-flex justify-content-center border-0 mt-5">
                
                       
                            <img class="img-thumbnails h-75" src="Anime.png" alt="logo"  width="400px" height="10px">
                       
                 
                    <tr class="border-none">

                        <td><span class="mr-2">Username:</span></td>
                        <td><input type='text' name='txtUsername' id="txtUsername" /> </td>

                    </tr>
                    <tr class="border-0">

                        <td><span class="mr-2">Password:</span></td>

                        <td><input type='password' name='txtPassword' id="txtPassword" /></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="checkbox" id="materialLoginFormRemember">
                            <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type='submit' name="dangnhap" value='Login' /></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <p >Not a member?
                                <a class="button bg-black border" href='Register.php' title='Register' >Register</a>
                            </p>
                        </td>
                    </tr>
                </table>


                <!-- Sign in button -->

                <!-- Register -->

            </form>
            <!-- Form -->
        </div>
    </div>
</body>

</html>