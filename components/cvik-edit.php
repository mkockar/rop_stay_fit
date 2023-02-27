<?php
$sql = "SELECT * FROM `cviky`
        JOIN svaly ON svaly.IDsval = cviky.IDsval
        JOIN vybavenia ON vybavenia.IDvybavenie = cviky.IDvybavenie WHERE IDcvik = $id";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $i) {
    $name = $i['cvik'];
    $process = $i['postup'];
    $IDequipment = $i["IDvybavenie"];
    $equipment = $i["vybavenie"];
    $IDmuscle = $i["IDsval"];
    $muscle = $i["sval"];
    //$image = $i["image"];
}
?>

<main>
    <div class="back-button">
        <img src="./media/icons/back-arrow.png" alt="">
        <a href="cviky.php">SPÄŤ NA ZOZNAM CVIKOV</a>
    </div>
    <div class="header">
        <h1>EDIT <br> <strong><?php echo $name ?></strong></h1>
    </div>
    <form action="./php/databaseUpdate.php?id=<?php echo $id ?>&tb=<?php echo $table ?>" method="post">
        <div class="inputs">
            <label for="name">Názov cviku</label>
            <input type="text" placeholder="Názov" name="name" id="name" value="<?php echo $name ?>" autocomplete="no">

            <select name="muscle" id="muscle">
                <option value="<?php echo $IDmuscle ?>"> <?php echo $muscle ?></option>
                <?php
                $stmt = $conn->prepare('SELECT * FROM svaly');
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $i) : ?>
                    <option value="<?php echo $i['IDsval'] ?>"> <?php echo $i['sval'] ?></option>
                <?php endforeach ?>
            </select>

            <select name="equipment" id="equipment">
                <option value="<?php echo $IDequipment ?>"> <?php echo $equipment ?></option>
                <?php
                $stmt = $conn->prepare('SELECT * FROM vybavenia');
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $i) : ?>
                    <option value="<?php echo $i['IDvybavenie'] ?>"> <?php echo $i['vybavenie'] ?></option>
                <?php endforeach ?>
            </select>

            <label for="process">Postup</label>
            <textarea name="process" id="process" placeholder="Postup" rows="15" autocomplete="no"><?php echo $process ?></textarea>

        </div>
        <div class="submit-button">
            <input class="submit" type="submit" value="UPRAVIŤ">
        </div>
    </form>
</main>