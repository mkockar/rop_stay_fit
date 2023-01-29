<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CVIKY</title>

  <link rel="stylesheet" href="styles/layout.css">
  <link rel="stylesheet" href="styles/nav.css">
  <link rel="stylesheet" href="styles/footer.css">
  <link rel="stylesheet" href="styles/services-header.css">
  <link rel="stylesheet" href="styles/exercises.css">

</head>

<?php
require_once("db.php");

$sql = "SELECT cviky.IDcvik, cviky.cvik, svaly.sval, vybavenia.vybavenie FROM `cviky`
        JOIN svalcvik ON svalcvik.IDcvik = cviky.IDcvik
        JOIN svaly ON svaly.IDsval = svalcvik.IDsval
        JOIN cvikvybavenie ON cvikvybavenie.IDcvik = cviky.IDcvik
        JOIN vybavenia ON vybavenia.IDvybavenie = cvikvybavenie.IDvybavenie;";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<body>
  <nav class="header">

    <?php require_once "./components/services-header.php" ?>

    <div class="popis">
      <h1>CVIKY</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ab quidem
        tempora perspiciatis aperiam esse impedit ullam voluptas magni
        voluptates.
      </p>
    </div>

    <img class="background" src="media/cviky-nav-background.jpg" alt="" />
  </nav>

  <main class="exercises-main">
    <div class="exercises-wrapper">
      <div class="searchbar">
        <input class="search-bar" type="text" name="name" required="not-required" onkeyup="search()" />
        <div class="placeholder">
          <span>HĽADAŤ CVIK</span>
          <img src="./media/icons/search-searchbar.png" alt="" />
        </div>
      </div>

      <div class="filter-wrapper">
        <div class="filter-muscle">
          <div class="nadpis">
            <span>VYBERTE ZAMERANIE SVALOV</span>
          </div>
          <?php include_once "./php/svalyRadioButtons.php"; ?>
        </div>

        <div class="filter-equipment">
          <div class="nadpis">
            <span>VYBERTE VYBAVENIE NA CVIČENIE</span>
          </div>
          <?php include_once "./php/equipmentRadioButtons.php" ?>
        </div>
      </div>

      <div class="exercises-list-wrapper">
        <table class="exercises-list table-sortable">
          <thead class="exercises-columns">
            <tr>
              <th class="name">NÁZOV CVIKU</th>
              <th class="equipment">VÝBAVA</th>
              <th class="muscle">ZAMERANIE</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result as $cvik) : ?>
              <tr>
                <td>
                  <a href="cvik.php?id=<?php echo $cvik['IDcvik']; ?>" class="item-container">
                    <span class="exercise-name"><?php echo $cvik['cvik'] ?></span>
                    <span class="exercise-equipment"><?php echo $cvik['vybavenie'] ?></span>
                    <span class="exercise-target"><?php echo $cvik['sval'] ?></span>
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
  <script src="./js/activepage.js"></script>
  <script src="./js/searchBar.js"></script>
  <script src="./js/tableSort.js"></script>
</body>

</html>