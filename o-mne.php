<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>O MNE</title>

    <link rel="stylesheet" href="styles/layout.css" />
    <link rel="stylesheet" href="styles/nav.css" />
    <link rel="stylesheet" href="styles/footer.css" />
  </head>
  <body>
    <nav class="header">
     
    <?php 
      require_once "./components/main-header.php"
    ?>

      <div class="popis">
        <h1>KTO SOM</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ab quidem
          tempora perspiciatis aperiam esse impedit ullam voluptas magni
          voluptates.
        </p>
      </div>

      <img class="background" src="media/o-mne-nav-background.jpg" alt="" />
    </nav>

    <main>
      <p>MAIN</p>
    </main>

    <?php
    require_once "./components/footer.php";
    ?>
    <script src="./js/burger.js"></script>
    <script src="./js/activepage.js"></script>
  </body>
</html>
