<?php
$sql = "SELECT * FROM faq WHERE IDotazka = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $i) {
    $name = $i['otazka'];
    $text = $i['odpoved'];
}

?>

<main>
    <a href="faq.php" class="back-button">
        <img src="./media/icons/back-arrow.png" alt="">
        <span>SPÄŤ NA ZOZNAM OTÁZOK</span>
    </a>

    <div class="header">
        <h1>EDIT <br> <strong><?php echo $name ?></strong></h1>
        <div class="underline"></div>
    </div>
    <form action="./php/databaseUpdate.php?id=<?php echo $id ?>&tb=<?php echo $table ?>" method="post">
        <div class="inputs">
            <label for="name">Názov otázky</label>
            <input type="text" placeholder="Názov" name="name" id="name" value="<?php echo $name ?>" autocomplete="no">

            <label for="text">Text otázky</label>
            <textarea name="text" id="text" placeholder="Text otázky" rows="15" autocomplete="no"><?php echo $text ?></textarea>
        </div>
        <div class="submit-button">
            <input class="submit" type="submit" value="UPRAVIŤ">
        </div>
    </form>
</main>