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
  <link rel="stylesheet" href="./styles/nutritions.css" />
  <link rel="stylesheet" href="./styles/searchbar.css">
  <link rel="stylesheet" href="./styles/tables.css">
</head>

<?php
require_once("./php/db.php");
session_start();

$sql = "SELECT * FROM potraviny JOIN typypotravin ON typypotravin.IDtyp = potraviny.IDtyp ORDER BY nazovPotraviny ASC";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php if (isset($_SESSION['admin'])) : ?>
  <style>
    .nutritions-main .groceries-wrapper .groceries-list-wrapper .groceries-list .filter-container .columns-container {
      display: grid;
      grid-template-columns: 40% 40% 10% 10%;
      justify-content: space-between;
      align-items: center;
      text-decoration: none;
      text-align: center;
    }

    .nutritions-main .groceries-wrapper .groceries-list-wrapper .groceries-list tbody tr {
      display: grid;
      grid-template-columns: 40% 40% 10% 10%;
      justify-content: space-between;
      align-items: center;
      text-decoration: none;
      text-align: center;
    }

    @media (min-width: 1200px) {
      .nutritions-main .groceries-wrapper .groceries-list-wrapper .groceries-list .filter-container .columns-row {
        grid-template-columns: 40% 10% 10% 10% 10% 10% 10%;
      }
    }

    @media (min-width: 1200px) {
      .nutritions-main .groceries-wrapper .groceries-list-wrapper .groceries-list tbody tr {
        grid-template-columns: 40% 10% 10% 10% 10% 10% 10%;
      }
    }
  </style>
<?php endif ?>

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
      <form action="" method="get" class="search-form">
        <div class="searchbar">
          <div class="search-wrapper">
            <label for="search">HĽADAŤ POTRAVINU</label>
            <input class="search-bar" type="text" name="search" value="<?php if (isset($_GET['search'])) echo $_GET['search'] ?>" />
          </div>
          <input class="submit-button" type="submit" value="HĽADAŤ">
        </div>
      </form>

      <?php if (isset($_SESSION['admin'])) : ?>
        <div class="add-button">
          <a class="button" href="./add.php?tb=potraviny">
            <img src="./media/icons/add-admin.png" alt="">
            <span>PRIDAJ POTRAVINU</span>
          </a>
        </div>
      <?php endif ?>

      <div class="groceries-list-wrapper">
        <table class="groceries-list table-sortable" id="table">
          <thead class="filter-container">
            <tr class="columns-row">
              <th class="name">NÁZOV</th>
              <th class="kalorie">KALÓRIE</th>
              <th class="bielkoviny">BIELKOVINY</th>
              <th class="tuky">TUKY</th>
              <th class="sacharidy">SACHARIDY</th>
              <th class="druhPotraviny">DRUH</th>
              <?php if (isset($_SESSION['admin'])) : ?>
                <th class="admin">EDIT</th>
              <?php endif ?>
            </tr>
          </thead>
          <tbody>

            <?php
            if (isset($_GET['search'])) {
              $filtervalues = $_GET['search'];
              $sql = "SELECT * FROM potraviny JOIN typypotravin ON typypotravin.IDtyp = potraviny.IDtyp WHERE nazovPotraviny LIKE '%$filtervalues%'";
              $stmt = $conn->prepare($sql);
              $stmt->execute();
              $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
              if ($_GET['search'] == '') {
                $sql = "SELECT * FROM potraviny JOIN typypotravin ON typypotravin.IDtyp = potraviny.IDtyp ORDER BY nazovPotraviny ASC";

                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
              }
            }
            ?>

            <?php foreach ($result as $potravina) : ?>
              <tr>
                <td class="name-wrapper">
                  <a href="potravina.php?id=<?php echo $potravina['ID']; ?>" class="item-container"><span class="product-name" id="name"><?php echo $potravina["nazovPotraviny"]; ?></span></a>
                </td>
                <td class="kalorie-wrapper">
                  <a href="potravina.php?id=<?php echo $potravina['ID']; ?>" class="item-container"><span class="kcal"><?php echo $potravina["kalorie"]; ?></span></a>
                </td>
                <td class="protein-wrapper">
                  <a href="potravina.php?id=<?php echo $potravina['ID']; ?>" class="item-container"><span class="protein"><?php echo $potravina["bielkoviny"]; ?></span></a>
                </td>
                <td class="fat-wrapper">
                  <a href="potravina.php?id=<?php echo $potravina['ID']; ?>" class="item-container"><span class="fat"><?php echo $potravina["tuky"]; ?></span></a>
                </td>
                <td class="carbo-wrapper">
                  <a href="potravina.php?id=<?php echo $potravina['ID']; ?>" class="item-container"><span class="carbohydrates"><?php echo $potravina["sacharidy"]; ?></span></a>
                </td>
                <td class="type-wrapper">
                  <a href="potravina.php?id=<?php echo $potravina['ID']; ?>" class="item-container"><span class="type"><?php echo $potravina["typPotraviny"]; ?></span></a>
                </td>
                <?php if (isset($_SESSION['admin'])) : ?>
                  <td class="admin-wrapper">
                    <span class="adminicons-wrapper">
                      <a href="./edit.php?id=<?php echo $potravina['ID'] ?>&tb=potraviny"><img class="admin-icons" src="./media/icons/edit-admin.png" alt="" /></a>
                    </span>
                    <span class="adminicons-wrapper">
                      <!-- <a href="php/delete.php?id=<?php echo $potravina['ID']; ?>&tb=potraviny"><img class="admin-icons" src="./media/icons/delete-admin.png" alt="" /></a> -->
                      <a href="delete-alert.php?id=<?php echo $potravina['ID']; ?>&tb=potraviny"><img class="admin-icons" src="./media/icons/delete-admin.png" alt="" /></a>
                    </span>
                  </td>
                <?php endif ?>
                </a>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>

  <?php
  require_once "./components/footer.php";
  ?>
  <script src="./js/burger.js"></script>
  <script src="./js/searchBar.js"></script>
  <script src="./js/tableSort.js"></script>
  <script src="./js/activepage.js"></script>
</body>

</html>