<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RECEPTY</title>

  <link rel="stylesheet" href="styles/layout.css" />
  <link rel="stylesheet" href="styles/nav.css" />
  <link rel="stylesheet" href="styles/footer.css" />
  <link rel="stylesheet" href="styles/recepty.css" />
  <link rel="stylesheet" href="./styles/searchbar.css">
  <link rel="stylesheet" href="./styles/tables.css">
</head>

<?php
session_start();
require_once("./php/db.php");

$sql = "SELECT * FROM recepty ORDER BY recepty.recept ASC";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC); ?>

<?php if (isset($_SESSION['admin'])) : ?>
  <style>
    .recipes-main .recipes-wrapper .recipes-list-wrapper .recipes-list .columns-container .columns-row {
      display: grid;
      grid-template-columns: 80% 10% 10%;
    }

    .recipes-main .recipes-wrapper .recipes-list-wrapper .recipes-list tbody tr {
      display: grid;
      grid-template-columns: 80% 10% 10%;
      justify-content: center;
      align-items: center;
      text-decoration: none;
      text-align: center;
    }

    @media (min-width: 1200px) {
      .recipes-main .recipes-wrapper .recipes-list-wrapper .recipes-list .columns-container .columns-row {
        display: grid;
        grid-template-columns: 55% 15% 15% 15%;
      }
    }

    @media (min-width: 1200px) {
      .recipes-main .recipes-wrapper .recipes-list-wrapper .recipes-list tbody tr {
        display: grid;
        grid-template-columns: 55% 15% 15% 15%;
      }
    }
  </style>
<?php endif ?>

<body>
  <nav class="header">
    <?php require_once "./components/services-header.php" ?>

    <div class="popis">
      <h1>RECEPTY</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ab quidem
        tempora perspiciatis aperiam esse impedit ullam voluptas magni
        voluptates.
      </p>
    </div>

    <img class="background" src="media/reciepe-nav-background.jpg" alt="" />
  </nav>

  <main class="recipes-main">
    <div class="recipes-wrapper">
      <form action="" method="get" class="search-form">
        <div class="searchbar">
          <div class="search-wrapper">
            <label for="search">HĽADAŤ RECEPT</label>
            <input class="search-bar" type="text" name="search" value="<?php if (isset($_GET['search'])) echo $_GET['search'] ?>" />
          </div>
          <input class="submit-button" type="submit" value="HĽADAŤ">
        </div>
      </form>

      <?php if (isset($_SESSION['admin'])) : ?>
        <div class="add-button">
          <a class="button" href="./add.php?tb=recepty">
            <img src="./media/icons/add-admin.png" alt="">
            <span>PRIDAJ RECEPT</span>
          </a>
        </div>
      <?php endif ?>

      <div class="recipes-list-wrapper">
        <table class="recipes-list table-sortable" id="table">
          <thead class="columns-container">
            <tr class="columns-row">
              <th class="name">NÁZOV RECEPTU</th>
              <th class="difficulty">NÁROČNOSŤ RECEPTU</th>
              <th class="preptime">DĹŽKA PRÍPRAVY</th>
              <?php if (isset($_SESSION['admin'])) : ?>
                <th class="admin">EDIT</th>
              <?php endif ?>
            </tr>
          </thead>
          <tbody>

            <?php
            if (isset($_GET['search'])) {
              $filtervalues = $_GET['search'];
              $sql = "SELECT * FROM recepty WHERE recept LIKE '%$filtervalues%'";
              $stmt = $conn->prepare($sql);
              $stmt->execute();
              $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
              if ($_GET['search'] == '') {
                $sql = "SELECT * FROM recepty ORDER BY recepty.recept ASC";

                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
              }
            }
            ?>

            <?php foreach ($result as $recept) : ?>
              <tr>
                <td class="name-wrapper">
                  <a href="recept.php?id=<?php echo $recept['IDrecept'] ?>"><span class="recipe-name" id="name"><?php echo $recept['recept'] ?></span></a>
                </td>
                <td class="difficulty-wrapper">
                  <a href="recept.php?id=<?php echo $recept['IDrecept'] ?>"><span class="recipe-difficulty"><?php echo $recept['obtiaznost'] ?></span></a>
                </td>
                <td class="time-wrapper">
                  <a href="recept.php?id=<?php echo $recept['IDrecept'] ?>"><span class="recipe-time"><?php echo $recept['cas'] ?></span></a>
                </td>
                <?php if (isset($_SESSION['admin'])) : ?>

                  <td class="admin-wrappper">
                    <span class="admin-wrapper">
                      <a class="adminicons-wrapper" href="edit.php?id=<?php echo $recept['IDrecept'] ?>&tb=recepty"><img class="admin-icons" src="./media/icons/edit-admin.png" alt="" /></a>
                    </span>
                    <span class="admin-wrapper">
                      <a class="adminicons-wrapper" href="delete-alert.php?id=<?php echo $recept['IDrecept'] ?>&tb=recepty"><img class="admin-icons" src="./media/icons/delete-admin.png" alt="" /></a>
                    </span>
                  </td>
                <?php endif ?>
              </tr>
            <?php endforeach ?>
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
  <script src="./js/activepage.js"></script>
  <script src="./js/tableSort.js"></script>
</body>

</html>