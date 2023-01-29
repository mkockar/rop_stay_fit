<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>STAY FIT</title>

  <link rel="stylesheet" href="styles/layout.css" />
  <link rel="stylesheet" href="styles/nav.css" />
  <link rel="stylesheet" href="styles/footer.css" />
  <link rel="stylesheet" href="styles/home.css" />
</head>

<body>
  <nav class="header">
    <?php
    require_once "./components/main-header.php"
    ?>

    <div class="popis">
      <h1>STAY FIT WITH ME</h1>
      <p>
        OSOBNÝ TRÉNER <strong class="divider">|</strong> TRÉNINGY NA MIERU
        <strong class="divider">|</strong> JEDÁLNIČEK NA MIERU
      </p>
      <div class="buttons">
        <a href="o-mne.html">KTO SOM</a>
        <a href="eshop.html">TRÉNUJ</a>
      </div>
    </div>

    <img class="background" src="media/home-nav-background.jpg" alt="" />
  </nav>

  <main class="home">
    <div class="container">
      <div class="article">
        <h1>JE ČAS SÚSTREDIŤ SA NA SEBA</h1>
        <div class="text">
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum,
            labore.
          </p>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi
            ducimus odio a quia at soluta.
          </p>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores,
            et! Obcaecati sequi laudantium dolor magni aliquid similique
            provident explicabo eos ad atque.
          </p>
        </div>
        <div class="button">
          <a href="">ZISTIŤ VIAC</a>
        </div>
      </div>

      <div class="container-cards">
        <div class="header-cards">
          <h1>PONÚKAM VÁM</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
            a omnis ratione, labore aspernatur hic.
          </p>
        </div>

        <div class="cards">
          <div class="card">
            <div class="image">
              <img src="media/cardio-home-card.jpg" alt="" />
            </div>
            <div class="content">
              <h1>CHUDNUTIE</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                aperiam, inventore possimus odit officia consequuntur quas
                mollitia cum repellat iusto.
              </p>
              <div class="button">
                <a href="eshop.html">CHCEM TO</a>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="image">
              <img src="media/powerlifting-home-card.jpeg" alt="" />
            </div>
            <div class="content">
              <h1>SVALOVÁ HMOTA</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                aperiam, inventore possimus odit officia consequuntur quas
                mollitia cum repellat iusto.
              </p>
              <div class="button">
                <a href="eshop.html">CHCEM TO</a>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="image">
              <img src="media/condition-home-card.jpeg" alt="" />
            </div>
            <div class="content">
              <h1>LEPŠIA KONDÍCIA</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                aperiam, inventore possimus odit officia consequuntur quas
                mollitia cum repellat iusto.
              </p>
              <div class="button">
                <a href="eshop.html">CHCEM TO</a>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="image">
              <img src="media/food-home-card.jpeg" alt="" />
            </div>
            <div class="content">
              <h1>ZDRAVÁ STRAVA</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                aperiam, inventore possimus odit officia consequuntur quas
                mollitia cum repellat iusto.
              </p>
              <div class="button">
                <a href="recepty.html">CHCEM TO</a>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="image">
              <img src="media/physioteraphy-home-card.jpeg" alt="" />
            </div>
            <div class="content">
              <h1>FYZIOTERAPIA</h1>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                aperiam, inventore possimus odit officia consequuntur quas
                mollitia cum repellat iusto.
              </p>
              <div class="button">
                <a href="eshop.html">CHCEM TO</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="get-started">
      <div class="get-started-box">
        <div class="section">
          <img src="media/icons/choose-home.png" alt="" />
          <div class="get-started-popis">
            <h1>VYBER SI</h1>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
        </div>
        <img class="right-arrow" src="media/icons/right-arrow.png" alt="" />
        <img class="down-arrow" src="media/icons/down-arrow.png" alt="" />
        <div class="section">
          <img src="media/icons/meet-home.png" alt="" />
          <div class="get-started-popis">
            <h1>STRETNIME SA</h1>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
        </div>
        <img class="right-arrow" src="media/icons/right-arrow.png" alt="" />
        <img class="down-arrow" src="media/icons/down-arrow.png" alt="" />
        <div class="section">
          <img src="media/icons/grow-home.png" alt="" />
          <div class="get-started-popis">
            <h1>ZAČNI NOVÝ ŽIVOT</h1>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php
  require_once "./components/footer.php";
  ?>
  <script src="./js/burger.js"></script>
  <script src="./js/activepage.js"></script>
</body>

</html>