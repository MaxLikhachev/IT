<?
// 3. Создать форму, позволяющую выбрать количество часов по названию предмета.
include 'config.php';

echo '<h1>3</h1>
<form action="3.php" method="post">
<label>Введите количество часов: </label>
<input type="text" name="time" />
<button type="submit" name="submit">Выполнить</button></form>';

if(isset($_POST['submit']) && isset($_POST['time'])) {
    echo '<b>Введенная количество часов:</b> ' . $_POST['time'] . '</br>';

    $sql = 'SELECT * FROM subject WHERE time = "' . $_POST['time'] .'"';
   
    echo '<b>Найденные предметы:</b></br>';
    foreach ($pdo->query($sql) as $row)
        echo $row['name'] . '</br>';
}
?>