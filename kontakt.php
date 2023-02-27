<?php
if (isset($_POST['send'])) {
  $mail = $_POST['email'];
  $msg = $_POST['message'];
  $title = 'KONTAKT';

  require('generateEmail.php');

  sendMsg($mail, $title, $msg);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KONTAKTUJ MA</title>

  <link rel="stylesheet" href="styles/layout.css" />
  <link rel="stylesheet" href="styles/nav.css" />
  <link rel="stylesheet" href="styles/contact.css" />
  <link rel="stylesheet" href="styles/footer.css" />
</head>

<body>
  <nav class="header">
    <?php
    require_once "./components/main-header.php"
    ?>

    <div class="popis">
      <h1>KONTAKTUJ MA</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Et ab quidem
        tempora perspiciatis aperiam esse impedit ullam voluptas magni
        voluptates.
      </p>
    </div>

    <img src="media/contact-nav-background.jpg" alt="" class="background" />
  </nav>

  <main class="kontakt">
    <div class="kontakt-box">
      <div class="kontakt-info">
        <div class="container">
          <img src="media/icons/email-nav.png" alt="" />
          <div class="text">
            <div class="name">E-MAIL</div>
            <div class="info">stayfitwithme@gmail.com</div>
          </div>
        </div>
        <div class="container">
          <img src="media/icons/phone-nav.png" alt="" />
          <div class="text">
            <div class="name">TELEFÓNNE ČÍSLO</div>
            <div class="info">+4219123456789</div>
          </div>
        </div>
      </div>
      <div class="form-container">
        <div class="contact-header">
          <h1>KONTAKTNÝ FORMULÁR</h1>
          <div class="underline"></div>
        </div>
        <form class="form" id="form" method="post" action="">
          <div class="inputBox">
            <input type="text" name="name" valid id="fname" />
            <span class="label">MENO</span>
            <img src="./media/icons/error-mark-form.png" alt="" class="error-icon" />
            <img src="./media/icons/check-icon-form.png" alt="" class="success-icon" />
            <div class="error-msg"></div>
          </div>
          <div class="inputBox">
            <input type="text" name="surname" id="lname" />
            <span class="label">PRIEZVISKO</span>
            <img src="./media/icons/error-mark-form.png" alt="" class="error-icon" />
            <img src="./media/icons/check-icon-form.png" alt="" class="success-icon" />
            <div class="error-msg"></div>
          </div>
          <div class="inputBox">
            <input type="text" name="email" id="email" />
            <span class="label">E-MAIL</span>
            <img src="./media/icons/error-mark-form.png" alt="" class="error-icon" />
            <img src="./media/icons/check-icon-form.png" alt="" class="success-icon" />
            <div class="error-msg"></div>
          </div>
          <div class="inputBox">
            <textarea name="message" id="msg"></textarea>
            <span class="label">TVOJA SPRÁVA</span>
            <img src="./media/icons/error-mark-form.png" alt="" class="error-icon" />
            <img src="./media/icons/check-icon-form.png" alt="" class="success-icon" />
            <div class="error-msg"></div>
          </div>
          <div class="inputBox">
            <input type="submit" name="send" value="ODOSLAŤ" />
          </div>
          <div class="success-msg">SPRÁVA BOLA ODOSLANÁ</div>
        </form>
      </div>
    </div>
  </main>

  <?php
  require_once "./components/footer.php";
  ?>
  <script src="./js/burger.js"></script>
  <!-- <script src="./js/formValidation.js"></script> -->
  <script src="./js/activepage.js"></script>
</body>

</html>