    <main>
        <a href="faq.php" class="back-button">
            <img src="./media/icons/back-arrow.png" alt="">
            <span>SPÄŤ NA ZOZNAM OTÁZOK</span>
        </a>

        <div class="header">
            <h1>PRIDAJ OTÁZKU A ODPOVEĎ</h1>
            <div class="underline"></div>
        </div>
        <form action="./php/insertData.php?tb=<?php echo $table ?>" method="post">
            <div class="inputs">
                <label for="name">Otázka</label>
                <input type="text" placeholder="Otázka" name="question" id="question" autocomplete="no">

                <label for="process">Odpoveď</label>
                <textarea name="answer" id="answer" placeholder="Odpoveď" rows="15" autocomplete="no"></textarea>
            </div>
            <div class="submit-button">
                <input class="submit" type="submit" value="PRIDAŤ">
            </div>
        </form>
    </main>