<?php
session_start();
?>

<div class="navbar">
  <div class="logo">
    <img src="media/logo02.png" alt="LOGO STAY FIT" />
  </div>

  <div class="burger-menu">
    <span class="burger-menu-btn-u"></span>
    <span class="burger-menu-btn-m"></span>
    <span class="burger-menu-btn-d"></span>
  </div>

  <div class="links-container">
    <ul class="nav-links">
      <li>
        <a class="link" href="index.php">
          <img src="media/icons/home-nav.png" alt="" />
          <div class="name">DOMOV</div>
        </a>
      </li>

      <li>
        <a class="link" href="sluzby.php">
          <img src="media/icons/services-nav.png" alt="" />
          <div class="name">SLUŽBY</div>
        </a>
      </li>

      <li>
        <a class="link" href="eshop.php">
          <img src="media/icons/eshop-nav.png" alt="" />
          <div class="name">E-SHOP</div>
        </a>
      </li>

      <li>
        <a class="link" href="kontakt.php">
          <img src="media/icons/contact-nav.png" alt="" />
          <div class="name">KONTAKT</div>
        </a>
      </li>

      <?php if (isset($_SESSION['admin'])) : ?>
        <li>
          <a class="link" href="./php/logout.php">
            <img src="media/icons/admin-nav.png" alt="" />
            <div class="name">ODHLÁSIŤ</div>
          </a>
        </li>
      <?php endif ?>

    </ul>
  </div>
</div>