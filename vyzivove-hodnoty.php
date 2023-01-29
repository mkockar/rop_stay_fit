<!DOCTYPE html>
<html lang="sk">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VÝŽIVOVÉ HODNOTY</title>

  <link rel="stylesheet" href="styles/layout.css" />
  <link rel="stylesheet" href="styles/nav.css" />
  <link rel="stylesheet" href="styles/footer.css" />
  <link rel="stylesheet" href="./styles/services-header.css" />
  <link rel="stylesheet" href="./styles/nutritions.css" />
</head>

<?php
require_once("db.php");

$sql = "SELECT * FROM potraviny JOIN typypotravin ON typypotravin.IDtyp = potraviny.IDtyp ORDER BY nazovPotraviny ASC";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<body>
  <nav class="header">

  <?php require_once "./components/services-header.php" ?>

    <div class="popis">
      <h1>VÝŽIVOVÉ HODNOTY</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ab quidem
        tempora perspiciatis aperiam esse impedit ullam voluptas magni
        voluptates.
      </p>
    </div>

    <img class="background" src="media/nutritions-nav-background.jpg" alt="" />
  </nav>

  <main class="nutritions-main">
    <div class="groceries-wrapper">
      <div class="searchbar">
        <input class="search-bar" type="text" name="name" required="not-required" onkeyup="search()" />
        <div class="placeholder">
          <span>HĽADAŤ POTRAVINU</span>
          <img src="./media/icons/search-searchbar.png" alt="" />
        </div>
      </div>

      <div class="groceries-list-wrapper">
        <table class="groceries-list table-sortable" id="table">
          <thead class="filter-container" id="list-top">
            <tr>
              <th class="name">NÁZOV</th>
              <th class="kalorie">KALÓRIE</th>
              <th class="bielkoviny">BIELKOVINY</th>
              <th class="tuky">TUKY</th>
              <th class="sacharidy">SACHARIDY</th>
              <th class="druhPotraviny">DRUH</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result as $potravina) : ?>
              <tr>
                <td>
                  <a href="potravina.php?id=<?php echo $potravina['IDpotravina']; ?>" class="item-container">
                    <span class="product-name" id="name">
                      <?php echo $potravina["nazovPotraviny"]; ?>
                    </span>
                    <span class="kcal"><?php echo $potravina["kalorie"]; ?></span>
                    <span class="protein">
                      <?php echo $potravina["bielkoviny"]; ?>
                    </span>
                    <span class="fat"><?php echo $potravina["tuky"]; ?></span>
                    <span class="carbohydrates">
                      <?php echo $potravina["sacharidy"]; ?>
                    </span>
                    <span class="type"><?php echo $potravina["typPotraviny"]; ?></span>
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- <div class="up-button">
      <a href="#list-top">
        <img src="./media/icons/down-arrow.png" alt="">
      </a>
    </div> -->
  </main>

  <?php
  require_once "./components/footer.php";
  ?>
  <script src="./js/burger.js"></script>
  <script src="./js/searchBar.js"></script>
  <script src="./js/tableSort.js"></script>
  <script src="./js/activepage.js"></script>
  <script src="./js/tableSortNumbers.js"></script>
</body>

</html>