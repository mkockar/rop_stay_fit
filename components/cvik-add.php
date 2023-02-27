<main>
    <div class="back-button">
        <img src="./media/icons/back-arrow.png" alt="">
        <a href="cviky.php">SPÄŤ NA ZOZNAM CVIKOV</a>
    </div>
    <div class="header">
        <h1>PRIDAJ CVIK</h1>
    </div>
    <form action="./php/insertData.php?tb=<?php echo $table ?>" method="post">
        <div class="inputs">
            <label for="name">Názov cviku</label>
            <input type="text" placeholder="Názov" name="name" id="name" autocomplete="no">

            <select name="muscle" id="muscle">
                <?php
                $stmt = $conn->prepare('SELECT * FROM svaly');
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $i) : ?>
                    <option value="<?php echo $i['IDsval'] ?>"> <?php echo $i['sval'] ?></option>
                <?php endforeach ?>
            </select>

            <select name="equipment" id="equipment">
                <?php
                $stmt = $conn->prepare('SELECT * FROM vybavenia');
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $i) : ?>
                    <option value="<?php echo $i['IDvybavenie'] ?>"> <?php echo $i['vybavenie'] ?></option>
                <?php endforeach ?>
            </select>

            <!-- <input type="file" name="image" id="image">
            <label for="image">OBRÁZOK CVIKU</label> -->

            <label for="process">Postup</label>
            <textarea name="process" id="process" placeholder="Postup" rows="15" autocomplete="no"></textarea>

        </div>
        <div class="submit-button">
            <input class="submit" type="submit" value="PRIDAŤ">
        </div>
    </form>
</main>