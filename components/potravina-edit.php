<?php
$sql = "SELECT * FROM potraviny JOIN typypotravin ON typypotravin.IDtyp = potraviny.IDtyp WHERE ID = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $i) {
    $name = $i['nazovPotraviny'];
    $type = $i["typPotraviny"];
    $IDtype = $i["IDtyp"];
    $calorie = $i["kalorie"];
    $protein = $i["bielkoviny"];
    $fat = $i["tuky"];
    $carbohydrates = $i["sacharidy"];
    $sodium = $i["sodik"];
    $magnesium = $i["horcik"];
    $potassium = $i["draslik"];
    $calcium = $i["vapnik"];
    $phosphorus = $i["fosfor"];
    $image = $i["imagePotravina"];
}
?>
<main>
    <div class="back-button">
        <img src="./media/icons/back-arrow.png" alt="">
        <a href="vyzivove-hodnoty.php">SPÄŤ NA ZOZNAM POTRAVÍN</a>
    </div>
    <div class="header">
        <h1>EDIT <strong><?php echo $name ?></strong></h1>
        <div class="underline"></div>
    </div>
    <form action="./php/databaseUpdate.php?id=<?php echo $id ?>&tb=<?php echo $table ?>" method="post">
        <div class="inputs">
            <label for="name">Názov potraviny</label>
            <input type="text" placeholder="Názov" name="name" id="name" value="<?php echo $name ?>" autocomplete="no">

            <select name="type" id="type">
                <option value="<?php echo $IDtype ?>"> <?php echo $type ?></option>
                <?php
                $stmt = $conn->prepare('SELECT * FROM typypotravin');
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $i) : ?>
                    <option value="<?php echo $i['IDtyp'] ?>"> <?php echo $i['typPotraviny'] ?></option>
                <?php endforeach ?>
            </select>
            <label for="calorie">Kalórie</label>
            <input type="text" placeholder="Kalórie" name="calorie" id="calorie" value="<?php echo $calorie ?>" autocomplete="no" >

            <label for="protein">Bielkoviny</label>
            <input type="text" placeholder="Bielkoviny" name="protein" id="protein" value="<?php echo $protein ?>" autocomplete="no" >

            <label for="fat">Tuky</label>
            <input type="text" placeholder="Tuky" name="fat" id="fat" value="<?php echo $fat ?>" autocomplete="no" >

            <label for="carbohydrates">Sacharidy</label>
            <input type="text" placeholder="Sacharidy" name="carbohydrates" id="carbohydrates" value="<?php echo $carbohydrates ?>" autocomplete="no">

            <label for="sodium">Sodík</label>
            <input type="text" placeholder="Sodík" name="sodium" id="sodium" value="<?php echo $sodium ?>" autocomplete="no" >

            <label for="calcium">Vápnik</label>
            <input type="text" placeholder="Vápnik" name="calcium" id="calcium" value="<?php echo $calcium ?>" autocomplete="no" >

            <label for="potassium">Draslík</label>
            <input type="text" placeholder="Draslík" name="potassium" id="potassium" value="<?php echo $potassium ?>" autocomplete="no" >

            <label for="magnesium">Horčík</label>
            <input type="text" placeholder="Horčík" name="magnesium" id="magnesium" value="<?php echo $magnesium ?>" autocomplete="no" >

            <label for="phosphorus">Fosfor</label>
            <input type="text" placeholder="Fosfor" name="phosphorus" id="phosphorus" value="<?php echo $phosphorus ?>" autocomplete="no" >

            <div class="image-container">
                <h1>AKTUÁLNY OBRÁZOK</h1>
                <img src="<?php echo $image ?>" alt="OBRÁZOK POTRAVINY">
            </div>

            <label for="image">OBRÁZOK POTRAVINY</label>
            <input type="file" name="image" id="image">

        </div>
        <div class="submit-button">
            <input class="submit" type="submit" value="UPRAVIŤ">
        </div>
    </form>
</main>