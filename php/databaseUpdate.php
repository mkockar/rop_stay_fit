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

$table = test_input($_GET['tb']);
$id = test_input($_GET['id']);

if (isset($_SESSION['admin'])) {
    switch ($table) {
        case 'potraviny':
            $nameUpdated = test_input($_POST['name']);
            $typeUpdated = test_input($_POST['type']);
            $caloriesUpdated = test_input($_POST['calorie']);
            $proteinUpdated = test_input($_POST['protein']);
            $fatUpdated = test_input($_POST['fat']);
            $carbohydratesUpdated = test_input($_POST['carbohydrates']);
            $sodiumUpdated = test_input($_POST['sodium']);
            $calciumUpdated = test_input($_POST['calcium']);
            $potassiumUpdated = test_input($_POST['potassium']);
            $magnesiumUpdated = test_input($_POST['magnesium']);
            $phosphorusUpdated = test_input($_POST['phosphorus']);
            if ($_POST['image'] != '') {
                $imgDIR = "media/";
                $imageUpdated = $imgDIR . $_POST['image'];

                $sql = "UPDATE $table SET nazovPotraviny = '$nameUpdated', imagePotravina = '$imageUpdated' , IDtyp = $typeUpdated, kalorie = $caloriesUpdated, bielkoviny = $proteinUpdated, sacharidy = $carbohydratesUpdated, tuky = $fatUpdated, draslik = $potassiumUpdated, horcik = $magnesiumUpdated, fosfor = $phosphorusUpdated, vapnik = $calciumUpdated, sodik = $sodiumUpdated WHERE ID = :id";
            } else {
                $sql = "UPDATE $table SET nazovPotraviny = '$nameUpdated', IDtyp = $typeUpdated, kalorie = $caloriesUpdated, bielkoviny = $proteinUpdated, sacharidy = $carbohydratesUpdated, tuky = $fatUpdated, draslik = $potassiumUpdated, horcik = $magnesiumUpdated, fosfor = $phosphorusUpdated, vapnik = $calciumUpdated, sodik = $sodiumUpdated WHERE ID = :id";
            }

            $data = [':id' => $id];
            $stmt = $conn->prepare($sql)->execute($data);
            header('Location: ../vyzivove-hodnoty.php');
            break;
        case 'recepty':
            $nameUpdated = test_input($_POST['name']);
            $caloriesUpdated = test_input($_POST['calorie']);
            $proteinUpdated = test_input($_POST['protein']);
            $fatUpdated = test_input($_POST['fat']);
            $carbohydratesUpdated = test_input($_POST['carbohydrates']);
            $difficultyUpdated = test_input($_POST['difficulty']);
            $timeUpdated = test_input($_POST['time']);
            $processUpdated = test_input($_POST['process']);

            if ($_POST['image'] != '') {
                $imgDIR = "media/";
                $imageUpdated = $imgDIR . $_POST['image'];

                $sql = "UPDATE $table SET recept = '$nameUpdated', image = '$imageUpdated', kalorie = $caloriesUpdated, bielkoviny = $proteinUpdated, sacharidy = $carbohydratesUpdated, tuky = $fatUpdated, obtiaznost = $difficultyUpdated, cas = '$timeUpdated', postup = '$processUpdated' WHERE IDrecept = :id";
            } else {
                $sql = "UPDATE $table SET recept = '$nameUpdated', kalorie = $caloriesUpdated, bielkoviny = $proteinUpdated, sacharidy = $carbohydratesUpdated, tuky = $fatUpdated, obtiaznost = $difficultyUpdated, cas = '$timeUpdated', postup = '$processUpdated' WHERE IDrecept = :id";
            }

            $data = [':id' => $id];
            $stmt = $conn->prepare($sql)->execute($data);

            $sql2 = "SELECT IDingrediencie FROM ingrediencie WHERE IDrecept = :id";
            $stmt2 = $conn->prepare($sql2);
            $stmt2->execute(['id' => $id]);
            $ingredientIds = $stmt2->fetchAll(PDO::FETCH_COLUMN);

            $ingredientUpdated = $_POST['ingredient'];
            $weightUpdated = $_POST['weight'];
            $IDingredient = $_POST['IDingredient'];

            foreach ($ingredientUpdated as $index => $ingredientsUpdated) {
                $all_ingredientsUpdated = $ingredientsUpdated;
                $all_weightsUpdated = $weightUpdated[$index];
                $all_IDingredients = $IDingredient[$index];

                $sql3 = "UPDATE ingrediencie SET ingrediencia = :all_ingredientsUpdated, gramaz = :all_weightsUpdated WHERE IDrecept = :id AND IDingrediencie = :all_IDingredients";

                $data3 = [
                    ':id' => $id,
                    ':all_ingredientsUpdated' => $all_ingredientsUpdated,
                    ':all_weightsUpdated' => $all_weightsUpdated,
                    ':all_IDingredients' => $all_IDingredients,
                ];
                $stmt3 = $conn->prepare($sql3);
                $stmt3->execute($data3);
            }
            header('Location: ../recepty.php');
            break;
        case 'faq':
            $nameUpdated = test_input($_POST['name']);
            $textUpdated = test_input($_POST['text']);

            $sql = "UPDATE $table SET otazka = '$nameUpdated', odpoved = '$textUpdated' WHERE IDotazka = :id";
            $data = [':id' => $id];
            $stmt = $conn->prepare($sql)->execute($data);
            header('Location: ../faq.php');
            break;
        case 'cviky':
            $nameUpdated = test_input($_POST['name']);
            $processUpdated = test_input($_POST['process']);
            $muscleUpdated = test_input($_POST['muscle']);
            $equipmentUpdated = test_input($_POST['equipment']);

            $sql = "UPDATE $table SET cvik = '$nameUpdated', postup = '$processUpdated', IDsval = $muscleUpdated, IDvybavenie = $equipmentUpdated WHERE IDcvik = :id";
            $data = [':id' => $id];
            $stmt = $conn->prepare($sql)->execute($data);
            header('Location: ../cviky.php');
            break;
    }
} else {
    header('Location: ../error.php');
}
