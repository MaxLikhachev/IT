<?
// 5. Написать запрос, выполняющий вывод имен и фамилий студентов, место проживания которых не совпадает с городом, в котором находится их университет.
include 'config.php';

echo '<h1>5</h1>';

$sql = 'SELECT * FROM student';
foreach ($pdo->query($sql) as $row) {
    $sql = 'SELECT city FROM university WHERE name = "' . $row['university'] .'"';
    $city = '';

    foreach ($pdo->query($sql) as $subrow)
        $city = $subrow['city'];
    
    if ($city != $row['city']) 
        echo $row['second_name'] . " " . $row['first_name'] . "</br>";

}
?>