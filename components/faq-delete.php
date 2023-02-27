<?php
$id = test_input($_GET['id']);

$sql = "SELECT * FROM faq WHERE IDotazka = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $i) {
    $name = $i['otazka'];
}
?>

<main>
    <div class="header">
        <h1>
            NAOZAJ SI ŽELÁŠ VYMAZAŤ OTÁZKU <br> <strong><?php echo $name ?></strong> ?
        </h1>

        <div class="options-delete">
            <a href="php/delete.php?id=<?php echo $id ?>&tb=faq">ÁNO
            </a>
            <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">NIE</a>
        </div>
    </div>
</main>