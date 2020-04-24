<?
//2. Пусть строка состоит из имен и фамилий. Проверить, все ли они начинаются с заглавных букв, если нет, то исправить ситуацию.
echo '<h1>2</h1>
<form action="2.php" method="post">
<label>Введите строку: </label>
<input type="text" name="string" />
<button type="submit" name="submit">Выполнить</button></form>';

if(isset($_POST['submit']) && isset($_POST['string'])) {
    echo '<b>Введенная строка:</b> ' . $_POST['string'] . '</br>';

    echo '<b>Проверка строки:</b></br>';
    if (ctype_alnum($_POST['string'])) echo "Корректный идентификатор";
    else echo "Неорректный идентификатор";
}
?>