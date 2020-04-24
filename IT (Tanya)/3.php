<?
// 3. Создать форму, позволяющую выбрать размер по названию предмета.
include 'config.php';

echo '<h1>3</h1>
<form action="3.php" method="post">
<label>Введите название предмета: </label>
<input type="text" name="name" />
<button type="submit" name="submit">Выполнить</button></form>';

if(isset($_POST['submit']) && isset($_POST['name'])) {
    echo '<b>Введенное название:</b> ' . $_POST['name'] . '</br>';

    $sql = 'SELECT size FROM subject WHERE name = "' . $_POST['name'] .'"';
   
    echo '<b>Размер найденного передмета:</b>';
    foreach ($pdo->query($sql) as $row)
        echo $row['size'];
}
?>