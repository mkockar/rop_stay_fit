<!DOCTYPE html>
<html lang="en">

<?php
require_once("db.php");
$id = $_GET["id"] ?? null;

$sql = "SELECT * FROM potraviny JOIN typypotravin ON typypotravin.IDtyp = potraviny.IDtyp WHERE IDpotravina = $id";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $i) {
  $nazovPotraviny = $i['nazovPotraviny'];
  $typ = $i["typPotraviny"];
  $kalorie = $i["kalorie"];
  $bielkoviny = $i["bielkoviny"];
  $tuky = $i["tuky"];
  $sacharidy = $i["sacharidy"];
  $sodik = $i["sodik"];
  $horcik = $i["horcik"];
  $draslik = $i["draslik"];
  $vapnik = $i["vapnik"];
  $fosfor = $i["fosfor"];
  $image = $i["imagePotravina"];
}
?>


<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $nazovPotraviny ?></title>

  <link rel="stylesheet" href="styles/layout.css" />
  <link rel="stylesheet" href="./styles/potravina-header.css" />
  <link rel="stylesheet" href="./styles/potravina.css" />
  <link rel="stylesheet" href="./styles/small-footer.css">
</head>

<body>

  <?php include_once "./components/small-header.php" ?>

  <main class="potravina">
    <div class="content-wrapper">
      <div class="content-header">
        <div class="back-button">
          <a href="vyzivove-hodnoty.php">SPÄŤ NA ZOZNAM POTRAVÍN</a>
        </div>
        <div class="content-start">
          <div class="name">
            <h1><?php echo $nazovPotraviny; ?></h1>
            <span class="underline"></span>
            <span class="type"><?php echo $typ; ?></span>
          </div>
          <div class="reminder">
            <span>ÚDAJE SÚ UVEDENÉ NA 100g POTRAVINY</span>
          </div>
        </div>
      </div>

      <div class="info-wrapper">
        <div class="basic-info">
          <div class="photo">
            <img src="<?php echo $image; ?>" alt="" />
          </div>
          <div class="nutritions-wrapper">
            <ul>
              <li>
                <div class="hodnota"><?php echo $kalorie; ?></div>
                <div>KCAL</div>
              </li>
              <li>
                <div class="hodnota"><?php echo $bielkoviny; ?>g</div>
                <div>BIELKOVÍN</div>
              </li>
              <li>
                <div class="hodnota"><?php echo $sacharidy; ?>g</div>
                <div>SACHARIDOV</div>
              </li>
              <li>
                <div class="hodnota"><?php echo $tuky; ?>g</div>
                <div>TUKOV</div>
              </li>
            </ul>
          </div>
        </div>
        <div class="extended-info">
          <div class="name">
            <h1>ĎALŠIE VÝŽIVOVÉ HODNOTY</h1>
            <div class="underline"></div>
          </div>
          <div class="extended-nutritions-wrapper">
            <ul class="extended-nutritions-list">
              <li class="extended-nutritions-list-item">
                <img src="./media/icons/eshop-cards-dash.png" alt="" class="extended-nutritions-dash" />
                <div class="mineral-wrapper">
                  <div class="mineral">Sodík</div>
                  <div class="value"><?php echo $sodik; ?>g</div>
                </div>
              </li>
              <li class="extended-nutritions-list-item">
                <img src="./media/icons/eshop-cards-dash.png" alt="" class="extended-nutritions-dash" />
                <div class="mineral-wrapper">
                  <div class="mineral">Draslík</div>
                  <div class="value"><?php echo $draslik; ?>g</div>
                </div>
              </li>
              <li class="extended-nutritions-list-item">
                <img src="./media/icons/eshop-cards-dash.png" alt="" class="extended-nutritions-dash" />
                <div class="mineral-wrapper">
                  <div class="mineral">Vápnik</div>
                  <div class="value"><?php echo $vapnik; ?>g</div>
                </div>
              </li>
              <li class="extended-nutritions-list-item">
                <img src="./media/icons/eshop-cards-dash.png" alt="" class="extended-nutritions-dash" />
                <div class="mineral-wrapper">
                  <div class="mineral">Horčík</div>
                  <div class="value"><?php echo $horcik; ?>g</div>
                </div>
              </li>
              <li class="extended-nutritions-list-item">
                <img src="./media/icons/eshop-cards-dash.png" alt="" class="extended-nutritions-dash" />
                <div class="mineral-wrapper">
                  <div class="mineral">Fosfor</div>
                  <div class="value"><?php echo $fosfor; ?>g</div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php require_once "./components/small-footer.php" ?>

  <script src="./js/burgerServices.js"></script>
</body>

</html>