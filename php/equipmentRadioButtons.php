<?php
require_once("db.php");

$sql = "SELECT * FROM vybavenia";

$stmt = $conn->prepare($sql);
$stmt->execute();
$array = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach ($array as $i) : ?>
    <div class="filter-button">
        <input class="radio-input" type="radio" value="option1" name="radiobutton" id="<?php echo $i['vybavenie'] ?>">
        <label class="radio-label" for="<?php echo $i['vybavenie'] ?>"><?php echo $i['vybavenie'] ?></label>
    </div>
<?php endforeach ?>