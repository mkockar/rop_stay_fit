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
require_once("db.php");

$sql = "SELECT * FROM faq";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

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
    <?php foreach ($result as $faq) : ?>
      <div class="faq">
        <div class="question">
          <span class="title"><?php echo $faq['otazka'] ?></span>

          <svg width="15" height="10" viewBox="0 0 42 25">
            <path d="M3 3L21 21L39 3" stroke="white" stroke-width="7" stroke-linecap="round" />
          </svg>
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