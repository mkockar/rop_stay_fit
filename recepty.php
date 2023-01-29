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
  <!-- <link rel="stylesheet" href="styles/services-header.css" /> -->
  <link rel="stylesheet" href="styles/recepty.css" />
</head>

<?php
require_once("db.php");

$sql = "SELECT * FROM recepty ORDER BY recepty.recept ASC";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

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
      <div class="searchbar">
        <input class="search-bar" type="text" name="name" required="not-required" onkeyup="search()" />
        <div class="placeholder">
          <span>HĽADAŤ RECEPT</span>
          <img src="./media/icons/search-searchbar.png" alt="" />
        </div>
      </div>

      <div class="recipes-list-wrapper">
        <table class="recipes-list table-sortable" id="table">
          <thead class="columns-container" id="list-top">
            <tr>
              <th class="name">NÁZOV RECEPTU</th>
              <th class="difficulty">NÁROČNOSŤ RECEPTU</th>
              <th class="preptime">DĹŽKA PRÍPRAVY</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result as $recept) : ?>
              <tr>
                <td>
                  <a href="recept.php?id=<?php echo $recept['IDrecept']; ?>" class="item-container">
                    <span class="recipe-name" id="name">
                      <?php echo $recept['recept'] ?>
                    </span>
                    <span class="recipe-difficulty"><?php echo $recept['obtiaznost'] ?></span>
                    <span class="recipe-time">
                      <?php echo $recept['cas'] ?>
                    </span>
                  </a>
                </td>
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