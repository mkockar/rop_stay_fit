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
  <?php require_once('./components/admin-header.php') ?>


  <main>
    <div class="header">
      <h1>
        NEPODARILO SA PRIHLÁSIŤ, POUŽÍVATEĽ
        <?php echo $_SESSION['username'] ?>
        NEEXISTUJE
      </h1>
      <div class="underline"></div>

      <div class="options">
        <a href="admin_login.php">PRIHLÁSIŤ SA ZNOVA
          <div class="underline"></div>
        </a>
      </div>
    </div>
  </main>
</body>

</html>