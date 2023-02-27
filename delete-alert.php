<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DELETE</title>

    <link rel="stylesheet" href="./styles/admin_login.css" />
    <link rel="stylesheet" href="./styles/layout.css" />
    <link rel="stylesheet" href="./styles/admin_nav.css">
    <link rel="stylesheet" href="./styles/delete_alert.css">
</head>

<?php
session_start();
require_once('./php/db.php');

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<body>
    <?php require_once('./components/admin-header.php') ?>

    <?php
    if (isset($_SESSION['admin'])) {
        $table = test_input($_GET['tb']);
        switch ($table) {
            case 'potraviny':
                require_once('./components/potravina-delete.php');
                break;
            case 'recepty':
                require_once('./components/recept-delete.php');
                break;
            case 'faq':
                require_once('./components/faq-delete.php');
                break;
            case 'cviky':
                require_once('./components/cvik-delete.php');
                break;
        }
    } else {
        header('Location: ../error.php');
    }
    ?>
</body>

</html>