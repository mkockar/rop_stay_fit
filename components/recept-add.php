    <main>
        <div class="back-button">
            <img src="./media/icons/back-arrow.png" alt="">
            <a href="recepty.php">SPÄŤ NA ZOZNAM RECEPTOV</a>
        </div>
        <div class="header">
            <h1>PRIDAJ RECEPT</h1>
            <div class="underline"></div>
        </div>
        <form action="./php/insertData.php?tb=<?php echo $table ?>" method="post">
            <div class="inputs">

                <div class="name-wrapper">
                    <label for="name">Názov receptu</label>
                    <input type="text" placeholder="Názov" name="name" id="name" autocomplete="no">
                </div>

                <div class="calorie-wrapper">
                    <label for="calorie">Kalórie</label>
                    <input type="number" placeholder="Kalórie" name="calorie" id="calorie" autocomplete="no">
                </div>

                <div class="protein-wrapper">
                    <label for="protein">Bielkoviny</label>
                    <input type="number" placeholder="Bielkoviny" name="protein" id="protein" autocomplete="no">
                </div>

                <div class="fat-wrapper">
                    <label for="fat">Tuky</label>
                    <input type="number" placeholder="Tuky" name="fat" id="fat" autocomplete="no">
                </div>

                <div class="carbohydrates-wrapper">
                    <label for="carbohydrates">Sacharidy</label>
                    <input type="number" placeholder="Sacharidy" name="carbohydrates" id="carbohydrates" autocomplete="no">
                </div>

                <div class="difficulty-wrapper">
                    <label for="difficulty">Obtiažnosť</label>
                    <input type="number" placeholder="Obtiažnosť" name="difficulty" id="difficulty" autocomplete="no">
                </div>

                <div class="time-wrapper">
                    <label for="time">Čas</label>
                    <input type="text" placeholder="Čas" name="time" id="time" autocomplete="no">
                </div>

                <div class="add-button">
                    <div class="button">
                        <img src="./media/icons/add-admin.png" alt="" class="delete-image">
                        <span>PRIDAJ INGREDIENCIU</span>
                    </div>
                </div>

                <table>
                    <tbody>
                        <tr class="input-box">
                            <td>
                                <label for="ingredient">Ingrediencia</label>
                                <input type="text" name="ingredient[]" id="ingredient" placeholder="Ingrediencia" autocomplete="no">
                            </td>
                            <td>
                                <label id="weight" for="weight">Gramáž</label>
                                <input type="text" name="weight[]" id="weight" placeholder="Gramáž" autocomplete="no">
                            </td>
                            <td>
                                <img src="" alt="">
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="image-wrapper">
                    <label for="image">OBRÁZOK RECEPTU</label>
                    <input type="file" name="image" id="image">
                </div>

                <div class="process-wrapper">
                    <label for="process">Postup</label>
                    <textarea name="process" id="process" placeholder="Postup" rows="15" autocomplete="no"></textarea>
                </div>
            </div>
            <div class="submit-button">
                <input class="submit" type="submit" value="PRIDAŤ">
            </div>
        </form>
    </main>