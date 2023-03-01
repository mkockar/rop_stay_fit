<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN</title>

    <link rel="stylesheet" href="./styles/admin_login.css">
    <link rel="stylesheet" href="./styles/layout.css">
    <link rel="stylesheet" href="./styles/admin_nav.css">

</head>

<body>
    <?php require_once('./components/admin-header.php') ?>
    <main>
        <div class="header">
            <h1>ADMIN LOGIN</h1>
        </div>
        <form action="./php/login.php" method="post">
            <div class="inputs">
                <input type="text" placeholder="Meno" name="name">
                <input type="password" placeholder="Heslo" name="pswd">
            </div>
            <div class="submit-button">
                <input class="submit" type="submit" value="LOGIN">
            </div>
        </form>
    </main>
</body>

</html>