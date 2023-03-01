<!DOCTYPE html>
<html lang="en">

<?php
require_once("./php/db.php");
$id = $_GET["id"] ?? null;

$sql = "SELECT * FROM cviky 
        JOIN vybavenia ON vybavenia.IDvybavenie = cviky.IDvybavenie
        JOIN svaly ON svaly.IDsval = cviky.IDsval
        WHERE cviky.IDcvik = $id";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $i) {
  $nazovCviku = $i['cvik'];
  $sval = $i["sval"];
  $vybavenie = $i["vybavenie"];
  $postup = $i["postup"];
}
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $nazovCviku ?></title>

  <link rel="stylesheet" href="./styles/potravina-header.css" />
  <link rel="stylesheet" href="./styles/layout.css">
  <link rel="stylesheet" href="./styles/cvik.css">
  <link rel="stylesheet" href="./styles/small-footer.css">
</head>

<?php 
session_start();
?>

<body>
  <?php include_once "./components/small-header.php" ?>

  <main class="cvik">
    <div class="content-wrapper">
      <div class="content-header">
        <div class="back-button">
          <a href="cviky.php">SPÄŤ NA ZOZNAM CVIKOV</a>
        </div>
        <div class="content-start">
          <div class="name">
            <h1><?php echo $nazovCviku; ?></h1>
            <span class="underline"></span>
            <span class="type"><?php echo $sval; ?></span>
          </div>
        </div>
      </div>

      <div class="cvik-wrapper">
        <div class="basic-info">
          <div class="photo">
            <img src="./media/fig-potravina.jpg" alt="" />
          </div>
        </div>
        <div class="extended-info">
          <div class="name">
            <h1>POSTUP</h1>
            <span class="underline"></span>
          </div>
          <p><?php echo $postup ?></p>
        </div>
      </div>
    </div>
  </main>

  <?php require_once "./components/small-footer.php" ?>

</body>

<script src="./js/burgerServices.js"></script>

</html>