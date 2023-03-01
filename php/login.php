<?php
session_start();

require_once("db.php");

$nameInput = test_input($_POST['name']);
$passwordInput = test_input($_POST['pswd']);

$sql = "SELECT * FROM admin";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $admin) {
    $name = $admin['login'];
    $pswd = $admin['pswd'];
}

if ($nameInput === $name && $passwordInput === $pswd) {
    $_SESSION['admin'] = '1';
    header('Location: ../index.php');
} else {
    $_SESSION['admin'] = '0';
    $_SESSION['username'] = $nameInput;
    header('Location: ../failed_login.php');
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
