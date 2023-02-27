<?php
$id = test_input($_GET['id']);

$sql = "SELECT * FROM potraviny WHERE ID = $id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($result as $i) {
    $name = $i['nazovPotraviny'];
}
?>

<main>
    <div class="header">
        <h1>
            NAOZAJ SI ŽELÁŠ VYMAZAŤ POTRAVINU <br> <strong><?php echo $name ?></strong> ?
        </h1>

        <div class="options-delete">
            <a href="php/delete.php?id=<?php echo $id ?>&tb=potraviny">ÁNO
            </a>
            <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">NIE</a>
        </div>
    </div>
</main>