<!DOCTYPE html>
<html lang="en">

<?php
session_start();
require_once("./php/db.php");
$id = $_GET["id"];

$sql = "SELECT * FROM recepty JOIN ingrediencie ON ingrediencie.IDrecept = recepty.IDrecept WHERE recepty.IDrecept = $id || ingrediencie.IDrecept = $id";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $i) {
  $recept = $i['recept'];
  $obtiaznost = $i['obtiaznost'];
  $cas = $i['cas'];
  $kalorie = $i['kalorie'];
  $bielkoviny = $i['bielkoviny'];
  $sacharidy = $i['sacharidy'];
  $tuky = $i['tuky'];
  // $ingrediencia = $i['ingrediencia'];
  // $gramaz = $i['gramaz'];
  $image = $i['image'];
  $postup = $i['postup'];
}
?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $recept ?></title>

  <link rel="stylesheet" href="styles/layout.css" />
  <link rel="stylesheet" href="styles/potravina-header.css" />
  <link rel="stylesheet" href="styles/small-footer.css" />
  <link rel="stylesheet" href="styles/recepty.css" />
  <link rel="stylesheet" href="styles/recipe.css">
</head>

<body>
  <?php include_once "./components/small-header.php" ?>

  <main class="recept">
    <div class="content-wrapper">
      <div class="content-header">
        <div class="back-button">
          <a href="recepty.php">SPÄŤ NA ZOZNAM RECEPTOV</a>
        </div>
        <div class="content-start">
          <div class="name">
            <h1><?php echo $recept ?></h1>
            <span class="underline"></span>
          </div>
        </div>
      </div>

      <div class="info-wrapper">
        <div class="basic-info">
          <div class="photo">
            <img src="<?php echo $image ?>" alt="" />
          </div>
          <div class="nutritions-wrapper">
            <ul>
              <li>
                <div class="hodnota"><?php echo $kalorie ?>g</div>
                <div>KCAL</div>
              </li>
              <li>
                <div class="hodnota"><?php echo $bielkoviny ?>g</div>
                <div>BIELKOVÍN</div>
              </li>
              <li>
                <div class="hodnota"><?php echo $sacharidy ?>g</div>
                <div>SACHARIDOV</div>
              </li>
              <li>
                <div class="hodnota"><?php echo $tuky ?>g</div>
                <div>TUKOV</div>
              </li>
            </ul>
          </div>
        </div>

        <div class="extended-info">
          <div class="name">
            <h1>INGREDIENCIE</h1>
            <div class="underline"></div>
          </div>
          <div class="ingredients-wrapper">
            <ul class="ingredients-list">
              <?php foreach ($result as $i) : ?>
                <li class="ingredient">
                  <img src="./media/icons/eshop-cards-dash.png" alt="" class="extended-info-dash" />
                  <div class="ingredient-container">
                    <div class="ingredient-name"><?php echo $i['ingrediencia'] ?></div>
                    <div class="ingredient-weight"><?php echo $i['gramaz'] ?></div>
                  </div>
                </li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="instructions-wrapper">
        <div class="name">
          <h1>POSTUP</h1>
          <span class="underline"></span>
        </div>
        <p><?php echo $postup ?></p>
      </div>
    </div>
  </main>
  <?php require_once "./components/small-footer.php" ?>
</body>

<script src="./js/burgerServices.js"></script>

</html>