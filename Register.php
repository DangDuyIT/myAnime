<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="background.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <title>Register page</title>
</head>

<body class="bg-black">

    <div id='stars'></div>
    <div class="card-Register card  m-auto w-50 " style="font-size: 16px;">

        <div class="card-body px-lg-5 pt-0 mt-5 ">

            <form class="text-center mt-2" action="xuly.php" method="POST">
                <table class=" table-responsive d-flex justify-content-center border-0 mt-5">
                    <tr class="mb-5 h-100">
                        <td></td>
                        <td>
                            <img class="" src="Anime.png" alt="logo" width="400px" height="62px">
                        </td>
                    </tr>
                    <tr class="border-none mt-5">

                        <td><span class="mr-2">Username:</span></td>
                        <td><input type="text" name="txtUsername" size="50" /> </td>

                    </tr>
                    <tr class="border-0">

                        <td><span class="mr-2">Password:</span></td>

                        <td> <input type="password" name="txtPassword" size="50" /></td>

                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>
                            <input type="text" name="txtEmail" size="50" />
                        </td>
                    </tr>
                    <tr>
                        <td>Full Name:</td>
                        <td><input type="text" name="txtFullname" size="50" /></td>
                    </tr>
                    <tr>
                        <td>Birthday:</td>
                        <td>
                            <input type="date" name="txtBirthday" />
                        </td>
                    </tr>
                    <tr>
                        <td>Sex:</td>
                        <td>
                            <select name="txtSex">
                                <option value=""></option>
                                <option value="Nam">Male</option>
                                <option value="Nu">Female</option>
                            </select>
                        </td>


                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" value="Register" /></td>

                    </tr>
                </table>

            </form>

        </div>
    </div>
</body>

</html>