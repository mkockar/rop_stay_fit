<div class="navbar">
  <div class="logo">
    <img src="media/logo02.png" alt="LOGO STAY FIT WITH ADAM" />
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
        <a class="link" href="cviky.php">
          <img src="media/icons/cviky-nav.png" alt="" />
          <div class="name">CVIKY</div>
        </a>
      </li>

      <li>
        <a class="link" href="recepty.php">
          <img src="media/icons/recipes-services-black.png" alt="" />
          <div class="name">RECEPTY</div>
        </a>
      </li>

      <li>
        <a class="link" href="vyzivove-hodnoty.php">
          <img src="media/icons/potraviny-nav.png" alt="" />
          <div class="name">POTRAVINY</div>
        </a>
      </li>

      <li>
        <a class="link" href="faq.php">
          <img src="media/icons/frequently-asked-questions-services-black.png" alt="" />
          <div class="name">FAQ</div>
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