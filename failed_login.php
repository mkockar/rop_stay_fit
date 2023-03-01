<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NEÚSPEŠNÉ PRIHLÁSENIE</title>

  <link rel="stylesheet" href="./styles/admin_login.css" />
  <link rel="stylesheet" href="./styles/layout.css" />
  <link rel="stylesheet" href="./styles/admin_nav.css">
</head>

<?php
session_start();
?>

<body>
  <nav>
    <div class="logo-container">
      <img src="./media/logo02.png" alt="" class="logo" />
    </div>
    <div class="home-button-container">
      <a href="index.php" class="home-button"><img src="./media/icons/home-nav.png" alt="" /></a>
    </div>
  </nav>

  <main>
    <div class="header">
      <h1>
        NEPODARILO SA PRIHLÁSIŤ, POUŽÍVATEĽ
        <?php echo $_SESSION['username'] ?>
        NEEXISTUJE
      </h1>

      <div class="options">
        <a href="admin_login.php">PRIHLÁSIŤ SA ZNOVA
        </a>
      </div>
    </div>
  </main>
</body>

</html>