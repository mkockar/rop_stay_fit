    <main>
        <a href="vyzivove-hodnoty.php" class="back-button">
            <img src="./media/icons/back-arrow.png" alt="">
            <span>SPÄŤ NA ZOZNAM POTRAVÍN</span>
        </a>
        <div class="header">
            <h1>PRIDAJ POTRAVINU</h1>
        </div>
        <form action="./php/insertData.php?tb=<?php echo $table ?>" method="post">
            <div class="inputs">

                <div class="name-wrapper">
                    <label for="name">Názov potraviny</label>
                    <input type="text" placeholder="Názov" name="name" id="name" autocomplete="no">
                </div>

                <div class="calorie-wrapper">
                    <label for="calorie">Kalórie</label>
                    <input type="text" placeholder="Kalórie" name="calorie" id="calorie" autocomplete="no">
                </div>

                <div class="protein-wrapper">
                    <label for="protein">Bielkoviny</label>
                    <input type="text" placeholder="Bielkoviny" name="protein" id="protein" autocomplete="no">
                </div>

                <div class="fat-wrapper">
                    <label for="fat">Tuky</label>
                    <input type="text" placeholder="Tuky" name="fat" id="fat" autocomplete="no">
                </div>

                <div class="carbohydrates-wrapper">
                    <label for="carbohydrates">Sacharidy</label>
                    <input type="text" placeholder="Sacharidy" name="carbohydrates" id="carbohydrates" autocomplete="no">
                </div>

                <div class="sodium-wrapper">
                    <label for="sodium">Sodík</label>
                    <input type="text" placeholder="Sodík" name="sodium" id="sodium" autocomplete="no">
                </div>

                <div class="calcium-wrapper">
                    <label for="calcium">Vápnik</label>
                    <input type="text" placeholder="Vápnik" name="calcium" id="calcium" autocomplete="no">
                </div>

                <div class="potasium-wrapper">
                    <label for="potassium">Draslík</label>
                    <input type="text" placeholder="Draslík" name="potassium" id="potassium" autocomplete="no">
                </div>

                <div class="magnesium-wrapper">
                    <label for="magnesium">Horčík</label>
                    <input type="text" placeholder="Horčík" name="magnesium" id="magnesium" autocomplete="no">
                </div>

                <div class="phosphorus-wrapper">
                    <label for="phosphorus">Fosfor</label>
                    <input type="text" placeholder="Fosfor" name="phosphorus" id="phosphorus" autocomplete="no">
                </div>

                <select name="type" id="type">
                    <?php
                    $stmt = $conn->prepare('SELECT * FROM typypotravin');
                    $stmt->execute();
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($result as $i) : ?>
                        <option value="<?php echo $i['IDtyp'] ?>"> <?php echo $i['typPotraviny'] ?></option>
                    <?php endforeach ?>
                </select>

                <div class="image-wrapper">
                    <label for="image">OBRÁZOK POTRAVINY</label>
                    <input type="file" name="image" id="image">
                </div>

            </div>
            <div class="submit-button">
                <input class="submit" type="submit" value="PRIDAŤ">
            </div>
        </form>
    </main>