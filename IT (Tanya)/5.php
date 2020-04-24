<?
// 5. Получить список университетов, в которых работает более 5 преподавателей, отсортировать его по величине рейтинга университетов.
include 'config.php';

echo '<h1>5</h1>';

echo '<b>Университеты в которых работает более 5 преподавателей:</b></br>';
$sql = 'SELECT * FROM university ORDER BY rating';
foreach ($pdo->query($sql) as $row) {
    $countteachers = 0;
    $count = 0;
    $sql = 'SELECT * FROM teacher WHERE university = "' . $row['name'] . '"';
    foreach($pdo->query($sql) as $subrow) $count++;
    if($count > 5)
        echo $row['name'] . ", " . $row['city'] . ", рейтинг: "  . $row['rating'] . "</br>";
}
?>