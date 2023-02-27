<!DOCTYPE html>
<html lang="en">

<?php
require_once('./php/db.php');
session_start();

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$table = test_input($_GET['tb']);


if (isset($_SESSION['admin'])) {
    $sql = "INSERT INTO $table";
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>

    <!-- <link rel="stylesheet" href="./styles/admin_login.css"> -->
    <link rel="stylesheet" href="./styles/layout.css">
    <link rel="stylesheet" href="./styles/admin_nav.css">
    <link rel="stylesheet" href="./styles/admin_forms.css">

</head>

<body>
    <?php require_once('./components/admin-header.php') ?>


    <?php
    if (isset($_SESSION['admin'])) {
        switch ($table) {
            case 'potraviny':
                require_once('./components/potravina-add.php');
                break;
            case 'recepty':
                require_once('./components/recept-add.php');
                break;
            case 'faq':
                require_once('./components/faq-add.php');
                break;
            case 'cviky':
                require_once('./components/cvik-add.php');
                break;
        }
    } else {
        header('Location: error.php');
    }
    ?>

    <script src="js/add-input.js"></script>

</body>