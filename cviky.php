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
  <link rel="stylesheet" href="styles/exercises.css">
  <link rel="stylesheet" href="./styles/tables.css">
  <link rel="stylesheet" href="./styles/searchbar.css">

</head>

<?php
require_once("./php/db.php");
session_start();

$sql = "SELECT cviky.IDcvik, cviky.cvik, svaly.sval, vybavenia.vybavenie FROM `cviky`
        JOIN svaly ON svaly.IDsval = cviky.IDsval
        JOIN vybavenia ON vybavenia.IDvybavenie = cviky.IDvybavenie 
        ORDER BY cviky.cvik";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php if (isset($_SESSION['admin'])) : ?>
  <style>
    @media (min-width: 1200px) {
      .exercises-main .exercises-wrapper .exercises-list-wrapper .exercises-list .exercises-columns .exercises-table-head {
        grid-template-columns: 55% 15% 15% 15%;
      }
    }

    @media (min-width: 1200px) {
      .exercises-main .exercises-wrapper .exercises-list-wrapper .exercises-list tbody tr {
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
      <form action="" method="get" class="search-form">
        <div class="searchbar">
          <div class="search-wrapper">
            <label for="search">HĽADAŤ CVIK</label>
            <input class="search-bar" type="text" name="search" value="<?php if (isset($_GET['search'])) echo $_GET['search'] ?>" />
          </div>
          <input class="submit-button" type="submit" value="HĽADAŤ">
        </div>
      </form>

      <?php if (isset($_SESSION['admin'])) : ?>
        <div class="add-button">
          <a class="button" href="./add.php?tb=cviky">
            <img src="./media/icons/add-admin.png" alt="">
            <span>PRIDAJ CVIK</span>
          </a>
        </div>
      <?php endif ?>

      <div class="filter-wrapper">
        <div class="filter-muscle">
          <div class="nadpis">
            <span>VYBERTE ZAMERANIE SVALOV</span>
          </div>
          <?php require_once("./php/svalyRadioButtons.php") ?>
        </div>

        <div class="filter-equipment">
          <div class="nadpis">
            <span>VYBERTE VYBAVENIE NA CVIČENIE</span>
          </div>
          <?php require_once("./php/equipmentRadioButtons.php") ?>
        </div>
      </div>

      <div class="exercises-list-wrapper">
        <table class="exercises-list table-sortable">
          <thead class="exercises-columns">
            <tr class="exercises-table-head">
              <th class="name">NÁZOV CVIKU</th>
              <th class="equipment">VÝBAVA</th>
              <th class="muscle">ZAMERANIE</th>
              <?php if (isset($_SESSION['admin'])) : ?>
                <th class="admin">EDIT</th>
              <?php endif ?>
            </tr>
          </thead>
          <tbody>

            <?php
            if (isset($_GET['search'])) {
              $filtervalues = $_GET['search'];
              $sql = "SELECT cviky.IDcvik, cviky.cvik, svaly.sval, vybavenia.vybavenie FROM cviky
                      JOIN svaly ON svaly.IDsval = cviky.IDsval
                      JOIN vybavenia ON vybavenia.IDvybavenie = cviky.IDvybavenie
                      WHERE cvik LIKE '%$filtervalues%'";
              $stmt = $conn->prepare($sql);
              $stmt->execute();
              $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
              if ($_GET['search'] == '') {
                $sql = "SELECT cviky.IDcvik, cviky.cvik, svaly.sval, vybavenia.vybavenie FROM `cviky`
                        JOIN svaly ON svaly.IDsval = cviky.IDsval
                        JOIN vybavenia ON vybavenia.IDvybavenie = cviky.IDvybavenie 
                        ORDER BY cviky.cvik";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
              }
            }
            ?>

            <?php foreach ($result as $cvik) : ?>
              <tr>
                <td class="exercise-wrapper">
                  <a class="item-container" href="cvik.php?id=<?php echo $cvik['IDcvik'] ?>"> <span class="exercise-name"><?php echo $cvik['cvik'] ?></span></a>
                </td>
                <td class="equipment-wrapper">
                  <a class="item-container" href="cvik.php?id=<?php echo $cvik['IDcvik'] ?>"><span class="exercise-equipment"><?php echo $cvik['vybavenie'] ?></span></a>
                </td>
                <td class="target-wrapper">
                  <a class="item-container" href="cvik.php?id=<?php echo $cvik['IDcvik'] ?>"> <span class="exercise-target"><?php echo $cvik['sval'] ?></span></a>
                </td>
                <?php if (isset($_SESSION['admin'])) : ?>
                  <td class="admin-wrapper">
                    <span class="adminicons-wrapper">
                      <a href="./edit.php?id=<?php echo $cvik['IDcvik'] ?>&tb=cviky"><img class="admin-icons" src="./media/icons/edit-admin.png" alt="" /></a>
                    </span>
                    <span class="adminicons-wrapper">
                      <a href="delete-alert.php?id=<?php echo $cvik['IDcvik'] ?>&tb=cviky"><img class="admin-icons" src="./media/icons/delete-admin.png" alt="" /></a>
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
  <script src="./js/activepage.js"></script>
  <script src="./js/searchBar.js"></script>
  <script src="./js/tableSort.js"></script>
</body>

</html>