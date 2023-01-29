<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SLUŽBY</title>

  <link rel="stylesheet" href="styles/layout.css" />
  <link rel="stylesheet" href="styles/nav.css" />
  <link rel="stylesheet" href="styles/services.css" />
  <link rel="stylesheet" href="styles/footer.css" />
</head>

<body>
  <nav class="header">

    <?php require_once "./components/services-header.php" ?>

    <div class="popis">
      <h1>SLUŽBY</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ab quidem
        tempora perspiciatis aperiam esse impedit ullam voluptas magni
        voluptates.
      </p>
    </div>

    <img class="background" src="media/services-nav-background.jpg" alt="" />
  </nav>

  <main class="services">
    <div class="cards">
      <ul>
        <li>
          <a href="recepty.php" class="card">
            <div class="overlay">
              <img src="media/recepty-services-background.jpg" alt="" />
            </div>
            <img class="icon" src="media/icons/recipes-services-black.png" alt="" />
            <h1>RECEPTY</h1>
          </a>
        </li>
        <li>
          <a href="vyzivove-hodnoty.php" class="card">
            <div class="overlay">
              <img src="media/vyzivove-hodnoty-services-background.jpg" alt="" />
            </div>

            <img class="icon" src="media/icons/vyzivove-hodnoty-services-black.png" alt="" />

            <h1>VÝŽIVOVÉ HODNOTY</h1>
          </a>
        </li>
        <li>
          <a href="cviky.php" class="card">
            <div class="overlay">
              <img src="media/cviky-services-background.jpeg" alt="" />
            </div>

            <img class="icon" src="media/icons/exercise-services-black.png" alt="" />

            <h1>CVIKY</h1>
          </a>
        </li>
        <li>
          <a href="faq.php" class="card">
            <div class="overlay">
              <img src="media/casto-kladene-otazky-services-background.jpeg" alt="" />
            </div>

            <img class="icon" src="media/icons/frequently-asked-questions-services-black.png" alt="" />

            <h1>ČASTO KLADENÉ OTÁZKY</h1>
          </a>
        </li>
      </ul>
    </div>
  </main>

  <?php
  require_once "./components/footer.php";
  ?>
  <script src="./js/burger.js"></script>
  <script src="./js/activepage.js"></script>
</body>

</html>