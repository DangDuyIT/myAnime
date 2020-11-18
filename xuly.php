<?php

if (!isset($_POST['txtUsername'])) {
    die('');
}

require "Connection.php";

header('Content-Type: text/html; charset=UTF-8');


$username   = addslashes($_POST['txtUsername']);
$password   = addslashes($_POST['txtPassword']);
$email      = addslashes($_POST['txtEmail']);
$fullname   = addslashes($_POST['txtFullname']);
$birthday   = addslashes($_POST['txtBirthday']);
$sex        = addslashes($_POST['txtSex']);


if (!$username || !$password || !$email || !$fullname || !$birthday || !$sex) {
    echo "Please enter full information. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

$password = md5($password);


if (mysqli_num_rows(mysqli_query($conn, "SELECT username FROM account WHERE username='$username'")) > 0) {
    echo "This username is already exists. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo"Invalid email format";
  }


if (mysqli_num_rows(mysqli_query($conn, "SELECT email FROM account WHERE email='$email'")) > 0) {
    echo "This Email is already exists. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}


$sql = "INSERT INTO account (username,password, email,fullname,birthday,sex)
    VALUES (
        '{$username}',
        '{$password}',
        '{$email}',
        '{$fullname}',
        '{$birthday}',
        '{$sex}'
    )";
if ($conn->query($sql) == TRUE) {
    echo "Register successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
