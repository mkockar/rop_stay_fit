<?php
session_start();
require_once('db.php');

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_SESSION['admin'])) {
    $table = test_input($_GET['tb']);
    $id = test_input($_GET['id']);
    switch ($table) {
        case 'potraviny':
            $sql = "DELETE FROM $table WHERE ID = :id";
            $data = [':id' => $id];
            $stmt = $conn->prepare($sql)->execute($data);
            header('Location: ../vyzivove-hodnoty.php');
            break;
        case 'recepty':
            $sql = "DELETE FROM $table WHERE recepty.IDrecept = :id";
            $data = [':id' => $id];
            $stmt = $conn->prepare($sql)->execute($data);
            header('Location: ../recepty.php');
            break;
        case 'faq':
            $sql = "DELETE FROM $table WHERE faq.IDotazka = :id";
            $data = [':id' => $id];
            $stmt = $conn->prepare($sql)->execute($data);
            header('Location: ../faq.php');
            break;
        case 'cviky':
            $sql = "DELETE FROM $table WHERE cviky.IDcvik = :id";
            $data = [':id' => $id];
            $stmt = $conn->prepare($sql)->execute($data);
            header('Location: ../cviky.php');
            break;
    }
} else {
    header('Location: ../error.php');
}
