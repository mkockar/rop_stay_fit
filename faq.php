<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ČASTO KLADENÉ OTÁZKY</title>

  <link rel="stylesheet" href="styles/footer.css" />
  <link rel="stylesheet" href="styles/nav.css" />
  <link rel="stylesheet" href="styles/layout.css" />
  <link rel="stylesheet" href="styles/services-header.css" />
  <link rel="stylesheet" href="styles/faq.css">
</head>

<?php
require_once("./php/db.php");
session_start();

$sql = "SELECT * FROM faq";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php if (isset($_SESSION['admin'])) : ?>
  <style>
    .faq-main .faq .question {
      display: grid;
      grid-template-columns: auto auto auto;
      justify-content: space-between;
      align-items: center;
    }

    .faq-main .faq .question .admin-buttons {
      display: flex;
      gap: 2rem;
      justify-content: center;
      align-items: center;
    }

    .faq-main .faq .question .arrow {
      display: flex;
      justify-content: end;
      align-items: center;
    }

    @media (min-width: 1200px) {
      .faq-main .faq .question {
        display: grid;
        grid-template-columns: 80% 10% 10%;
        justify-content: space-between;
        align-items: center;
      }
    }
  </style>
<?php endif ?>

<body>
  <nav class="header">

    <?php require_once "./components/services-header.php" ?>

    <div class="popis">
      <h1>ČASTO KLADENÉ OTÁZKY</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ab quidem
        tempora perspiciatis aperiam esse impedit ullam voluptas magni
        voluptates.
      </p>
    </div>

    <img class="background" src="media/faq-nav-background.jpg" alt="" />
  </nav>

  <main class="faq-main">
    <?php if (isset($_SESSION['admin'])) : ?>
      <div class="add-button">
        <a href="./add.php?tb=faq">
          <img src="./media/icons/add-admin.png" alt="">
          <span>PRIDAJ OTÁZKU</span>
        </a>
      </div>
    <?php endif ?>
    <?php foreach ($result as $faq) : ?>
      <div class="faq">
        <div class="question">
          <span class="title"><?php echo $faq['otazka'] ?></span>

          <?php if (isset($_SESSION['admin'])) : ?>
            <div class="admin-buttons">
              <a href="edit.php?id=<?php echo $faq['IDotazka'] ?>&tb=faq">
                <img src="./media/icons/edit-admin.png" alt="">
              </a>
              <a href="delete-alert.php?id=<?php echo $faq['IDotazka'] ?>&tb=faq">
                <img src="./media/icons/delete-admin.png" alt="">
              </a>
            </div>
          <?php endif ?>

          <div class="arrow">
            <svg width="15" height="10" viewBox="0 0 42 25">
              <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
            </svg>
          </div>
        </div>
        <div class="answer">
          <p><?php echo $faq['odpoved'] ?></p>
        </div>
      </div>
    <?php endforeach ?>
  </main>

  <?php
  require_once "./components/footer.php";
  ?>
  <script src="./js/burger.js"></script>
  <script src="./js/faq.js"></script>
  <script src="./js/activepage.js"></script> class="link"
</body>

</html>