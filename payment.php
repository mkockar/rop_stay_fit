<?php
if (isset($_POST['pay'])) {
    $mail = $_POST['email'];
    $phone = $_POST['phonenum'];
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $msg = $_POST['msg'];
    $msgMail = "Meno: $fname <br> Priezvisko: $lname <br> Telefónne číslo: $phone <br> Poznámka: $msg <br> Produkt: $product";

    $title = "Potvrdenie objednávky - $product";

    require_once('generateEmail.php');

    sendOrder($mail, $title, $msgMail);
}

if (isset($_POST['submit'])) {
    $product = $_POST['product'];
    $price = $_POST['price'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PLATBA</title>

    <link rel="stylesheet" href="./styles/layout.css">
    <link rel="stylesheet" href="./styles/payment.css">
    <link rel="stylesheet" href="./styles/admin_nav.css">
</head>

<body>
    <?php require_once('./components/admin-header.php') ?>

    <main class="payment-form-wrapper">
        <a href="eshop.php" class="back-button">
            <img src="./media/icons/back-arrow.png" alt="">
            <span>SPÄŤ DO E-SHOPU</span>
        </a>
        <form action="" method="post" class="form-wrapper">
            <div class="input-wrapper">
                <div class="contact-details-wrapper">
                    <div class="name-wrapper">
                        <div class="fname">
                            <label for="fname">MENO</label>
                            <input type="text" id="fname" name="fname" placeholder="Peter" autocomplete="no">
                        </div>
                        <div class="lname">
                            <label id="lnamelabel" for="lname">PRIEZVISKO</label>
                            <input type="text" id="lname" name="lname" placeholder="Veľký" autocomplete="no">
                        </div>
                    </div>
                    <div class="mail-phone">
                        <div class="email-wrapper">
                            <label for="email">E-MAIL</label>
                            <input type="email" id="email" name="email" placeholder="peter.velky@gmail.com" autocomplete="no">
                        </div>
                        <div class="phone-wrapper">
                            <label id="phone" for="phone">TEL. ČÍSLO</label>
                            <input type="text" id="phonenum" name="phonenum" placeholder="+421912345678" autocomplete="no">
                        </div>
                    </div>
                    <div class="msg-wrapper">
                        <label for="msg">POZNÁMKA PRE TRÉNERA</label>
                        <textarea maxlength="200" name="msg" id="msg" rows="2" placeholder="Vaša poziadavka, zdravotný problém,..." autocomplete="no"></textarea>
                        <div class="char-counter">
                            <span class="current" id="charcount">0</span>
                            <span class="max">/300</span>
                        </div>
                    </div>
                </div>

                <div class="card-details-wrapper">
                    <div class="card-number-wrapper">
                        <div class="number-icons">
                            <label for="cardnum">ČÍSLO KARTY</label>
                            <div class="icons">
                                <img src="./media/icons/visa-card.png" alt="" class="icon">
                                <img src="./media/icons/mastercard-card.png" alt="" class="icon">
                            </div>
                        </div>
                        <input type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="1234-1234-1234-1234" autocomplete="no">
                    </div>
                    <div class="cardholder-name-wrapper">
                        <label for="cname">MENO DRŽITEĽA KARTY</label>
                        <input type="text" id="cname" name="cname" placeholder="Velky Peter" autocomplete="no">
                    </div>

                    <div class="date-cvv">
                        <div class="exp-wrapper">
                            <label for="expdate">PLATNOSŤ</label>
                            <input type="text" inputmode="numeric" id="expdate" name="expdate" placeholder="12/25" maxlength="5" onkeyup="formatString(event);" autocomplete="no">
                        </div>
                        <div class="cvv-wrapper">
                            <label for="cvv">CVV</label>
                            <input type="text" inputmode="numeric" id="cvv" name="cvv" maxlength="3" placeholder="123" autocomplete="no">
                        </div>
                    </div>
                </div>
            </div>

            <div class="order-sumary">
                <div class="order-wrapper">
                    <span class="title-order-sumary">SUMARIZÁCIA OBJEDNÁVKY</span>
                    <div class="label-wrapper">
                        <span class="label-product-price">Produkt</span>
                        <span class="label-product-price">Cena</span>
                    </div>
                    <div class="product-name-price">
                        <span class="product-price"><?php echo $product ?></span>
                        <span class="product-price"><?php echo $price ?></span>
                    </div>
                </div>
            </div>

            <input type="submit" name="pay" value="OBJEDNAŤ" class="btn">
        </form>
    </main>
</body>
<script src="./js/charCounter.js"></script>
<script src="./js/expFormater.js"></script>

</html>