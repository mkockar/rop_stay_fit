<?php
require_once('db.php');
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
    switch ($table) {
        case 'potraviny':
            $name = test_input($_POST['name']);
            $type = test_input($_POST['type']);
            $calories = test_input($_POST['calorie']);
            $protein = test_input($_POST['protein']);
            $fat = test_input($_POST['fat']);
            $carbohydrates = test_input($_POST['carbohydrates']);
            $sodium = test_input($_POST['sodium']);
            $calcium = test_input($_POST['calcium']);
            $potassium = test_input($_POST['potassium']);
            $magnesium = test_input($_POST['magnesium']);
            $phosphorus = test_input($_POST['phosphorus']);
            $imgDIR = "media/";
            $img = $imgDIR . $_POST['image'];

            $sql = "INSERT INTO $table VALUES(0, :name, :type, :image, :calories, :protein, :carbohydrates, :fat, :potassium, :magnesium, :phosphorus, :calcium, :sodium)";

            $data = [
                ':name' => $name,
                ':type' => $type,
                ':image' => $img,
                ':calories' => $calories,
                ':protein' => $protein,
                ':carbohydrates' => $carbohydrates,
                ':fat' => $fat,
                ':potassium' => $potassium,
                ':magnesium' => $magnesium,
                ':phosphorus' => $phosphorus,
                ':calcium' => $calcium,
                ':sodium' => $sodium
            ];

            $stmt = $conn->prepare($sql)->execute($data);
            header('Location: ../vyzivove-hodnoty.php');
            break;
        case 'recepty':
            $name = test_input($_POST['name']);
            $calories = test_input($_POST['calorie']);
            $protein = test_input($_POST['protein']);
            $fat = test_input($_POST['fat']);
            $carbohydrates = test_input($_POST['carbohydrates']);
            $difficulty = test_input($_POST['difficulty']);
            $time = test_input($_POST['time']);
            $process = test_input($_POST['process']);
            $imgDIR = "media/";
            $image = $imgDIR . $_POST['image'];

            $sql = "INSERT INTO $table VALUES(0, :name, :difficulty, :time, :process, :image, :calories, :protein, :carbohydrates, :fat)";

            $data = [
                ':name' => $name,
                ':difficulty' => $difficulty,
                ':image' => $image,
                ':calories' => $calories,
                ':protein' => $protein,
                ':carbohydrates' => $carbohydrates,
                ':fat' => $fat,
                ':time' => $time,
                ':process' => $process
            ];

            $stmt = $conn->prepare($sql)->execute($data);

            $sql2 = "SELECT IDrecept FROM $table WHERE IDrecept = (SELECT MAX(IDrecept) FROM $table)";
            $stmt2 = $conn->prepare($sql2);
            $stmt2->execute();
            $result = $stmt2->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $i) {
                $IDrecept = $i['IDrecept'];
            }

            $ingredient = $_POST['ingredient'];
            $weight = $_POST['weight'];

            foreach ($ingredient as $index => $ingredients) {
                $all_ingredients = $ingredients;
                $all_weights = $weight[$index];

                $sql3 = "INSERT INTO ingrediencie VALUES(0, :IDrecept, :ingredient, :weight)";
                $data3 = [
                    ':IDrecept' => $IDrecept,
                    ':ingredient' => $all_ingredients,
                    ':weight' => $all_weights,
                ];

                $stmt3 = $conn->prepare($sql3)->execute($data3);
            }

            header('Location: ../recepty.php');
            break;
        case 'faq':
            $question = test_input($_POST['question']);
            $answer = test_input($_POST['answer']);

            $sql = "INSERT INTO $table VALUES (0, :question, :answer)";

            $data = [
                ':question' => $question,
                ':answer' => $answer
            ];

            $stmt = $conn->prepare($sql)->execute($data);
            header('Location: ../faq.php');
            break;
        case 'cviky':
            $name = test_input($_POST['name']);
            $process = test_input($_POST['process']);
            $muscle = test_input($_POST['muscle']);
            $equipment = test_input($_POST['equipment']);

            $sql = "INSERT INTO $table VALUES(0, '$name', '$process', $muscle, $equipment)";

            $stmt = $conn->prepare($sql)->execute();
            header('Location: ../cviky.php');
            break;
    }
} else {
    header('Location: ../error.php');
}
