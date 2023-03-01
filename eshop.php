<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>E-SHOP</title>

  <link rel="stylesheet" href="styles/layout.css" />
  <link rel="stylesheet" href="styles/nav.css" />
  <link rel="stylesheet" href="styles/footer.css" />
  <link rel="stylesheet" href="styles/eshop.css" />
</head>

<?php
require_once("./php/db.php");

$sql = "SELECT * FROM balicek";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<body>
  <nav class="header">
    <?php
    require_once "./components/main-header.php"
    ?>

    <div class="popis">
      <h1>E-SHOP</h1>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        Reprehenderit dolorem quae voluptas itaque. Labore quaerat reiciendis
        accusantium odio? Excepturi, ducimus.
      </p>
    </div>

    <img class="background" src="media/eshop-nav-background.jpg" alt="" />
  </nav>

  <main class="eshop">
    <div class="container">

      <div class="cards-membership">
        <form action="" method="post">
          <div class="card" id="bronze">
            <div class="inside">
              <div class="top-strip">
                <div class="strip"></div>
              </div>
              <div class="content">
                <div class="icon">
                  <img src="media/icons/about-me-nav.png" alt="" />
                </div>
                <div class="name">
                  <h1>BRONZOVÝ BALÍČEK</h1>
                  <div class="price">100€</div>
                </div>
                <div class="list">
                  <ul>
                    <li>
                      <img src="media/icons/eshop-cards-dash.png" alt="" />
                      <div>lorem</div>
                    </li>
                    <li>
                      <img src="media/icons/eshop-cards-dash.png" alt="" />
                      <div>lorem</div>
                    </li>
                    <li>
                      <img src="media/icons/eshop-cards-dash.png" alt="" />
                      <div>lorem</div>
                    </li>
                    <li>
                      <img src="media/icons/eshop-cards-dash.png" alt="" />
                      <div>lorem</div>
                    </li>
                    <li>
                      <img src="media/icons/eshop-cards-dash.png" alt="" />
                      <div>lorem</div>
                    </li>
                  </ul>
                  <div class="button">
                    <input type="text" name="product" value="Bronzový balíček" hidden>
                    <input type="text" name="price" value="100€" hidden>
                    <input type="submit" name="submit" value="ZAKÚPIŤ" class="btn">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>

        <form action="" method="post">
          <div class="card" id="platinum">
            <div class="inside">
              <div class="top-strip">
                <div class="strip"></div>
              </div>
              <div class="content">
                <div class="icon">
                  <img src="media/icons/about-me-nav.png" alt="" />
                </div>
                <div class="name">
                  <h1>PLATINOVÝ BALÍČEK</h1>
                  <div class="price">300€</div>
                </div>
                <div class="list">
                  <ul>
                    <li>
                      <img src="media/icons/eshop-cards-dash.png" alt="" />
                      <div>lorem</div>
                    </li>
                    <li>
                      <img src="media/icons/eshop-cards-dash.png" alt="" />
                      <div>lorem</div>
                    </li>
                    <li>
                      <img src="media/icons/eshop-cards-dash.png" alt="" />
                      <div>lorem</div>
                    </li>
                    <li>
                      <img src="media/icons/eshop-cards-dash.png" alt="" />
                      <div>lorem</div>
                    </li>
                    <li>
                      <img src="media/icons/eshop-cards-dash.png" alt="" />
                      <div>lorem</div>
                    </li>
                  </ul>
                  <div class="button">
                    <input type="text" name="product" value="Platinum balíček" hidden>
                    <input type="text" name="price" value="300€" hidden>
                    <input type="submit" name="submit" value="ZAKÚPIŤ" class="btn">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>

        <form action="" method="post">
          <div class="card" id="gold">
            <div class="inside">
              <div class="top-strip">
                <div class="strip"></div>
              </div>
              <div class="content">
                <div class="icon">
                  <img src="media/icons/about-me-nav.png" alt="" />
                </div>
                <div class="name">
                  <h1>ZLATÝ BALÍČEK</h1>
                  <div class="price">200€</div>
                </div>
                <div class="list">
                  <ul>
                    <li>
                      <img src="media/icons/eshop-cards-dash.png" alt="" />
                      <div>lorem</div>
                    </li>
                    <li>
                      <img src="media/icons/eshop-cards-dash.png" alt="" />
                      <div>lorem</div>
                    </li>
                    <li>
                      <img src="media/icons/eshop-cards-dash.png" alt="" />
                      <div>lorem</div>
                    </li>
                    <li>
                      <img src="media/icons/eshop-cards-dash.png" alt="" />
                      <div>lorem</div>
                    </li>
                    <li>
                      <img src="media/icons/eshop-cards-dash.png" alt="" />
                      <div>lorem</div>
                    </li>
                  </ul>
                  <div class="button">
                    <input type="text" name="product" value="Zlatý balíček" hidden>
                    <input type="text" name="price" value="200€" hidden>
                    <input type="submit" name="submit" value="ZAKÚPIŤ" class="btn">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
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