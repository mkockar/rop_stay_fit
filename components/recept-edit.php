<?php
$sql = "SELECT * FROM recepty
        JOIN ingrediencie ON ingrediencie.IDrecept = recepty.IDrecept
        WHERE recepty.IDrecept = $id || ingrediencie.IDrecept = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $i) {
    $name = $i['recept'];
    $difficulty = $i['obtiaznost'];
    $time = $i['cas'];
    $process = $i['postup'];
    $calorie = $i["kalorie"];
    $protein = $i["bielkoviny"];
    $fat = $i["tuky"];
    $carbohydrates = $i["sacharidy"];
    $image = $i["image"];
}
?>

<main>
    <div class="back-button">
        <img src="./media/icons/back-arrow.png" alt="">
        <a href="recepty.php">SPÄŤ NA ZOZNAM RECEPTOV</a>
    </div>
    <div class="header">
        <h1>EDIT <strong><?php echo $name ?></strong></h1>
    </div>
    <form action="./php/databaseUpdate.php?id=<?php echo $id ?>&tb=<?php echo $table ?>" method="post">
        <div class="inputs">
            <label for="name">Názov receptu</label>
            <input type="text" placeholder="Názov" name="name" id="name" value="<?php echo $name ?>" autocomplete="no">

            <label for="calorie">Kalórie</label>
            <input type="number" placeholder="Kalórie" name="calorie" id="calorie" value="<?php echo $calorie ?>" autocomplete="no">
            
            <label for="protein">Bielkoviny</label>
            <input type="number" placeholder="Bielkoviny" name="protein" id="protein" value="<?php echo $protein ?>" autocomplete="no">

            <label for="fat">Tuky</label>
            <input type="number" placeholder="Tuky" name="fat" id="fat" value="<?php echo $fat ?>" autocomplete="no">

            <label for="carbohydrates">Sacharidy</label>
            <input type="number" placeholder="Sacharidy" name="carbohydrates" id="carbohydrates" value="<?php echo $carbohydrates ?>" autocomplete="no">

            <label for="difficulty">Obtiažnosť</label>
            <input type="number" placeholder="Obtiažnosť" name="difficulty" id="difficulty" value="<?php echo $difficulty ?>" autocomplete="no">

            <label for="time">Čas</label>
            <input type="text" placeholder="Čas" name="time" id="time" value="<?php echo $time ?>" autocomplete autocomplete="no"="no">

            <table>
                <tbody>
                    <?php foreach ($result as $i) : ?>
                        <tr>
                            <td>
                                <label for="ingredient">Ingrediencia</label>
                                <input type="text" name="ingredient[]" id="ingredient" placeholder="Ingrediencia" value="<?php echo $i['ingrediencia'] ?>" autocomplete="no">
                            </td>
                            <td>
                                <label id="weight" for="weight">Gramáž</label>
                                <input type="text" name="weight[]" id="weight" placeholder="Gramáž" value="<?php echo $i['gramaz'] ?>" autocomplete="no">
                            </td>
                            <td>
                                <input type="text" hidden name="IDingredient[]" value="<?php echo $i['IDingrediencie'] ?>" autocomplete="no">
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

            <label for="process">Postup</label>
            <textarea name="process" id="process" placeholder="Postup" rows="15" autocomplete="no"><?php echo $process ?></textarea>

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