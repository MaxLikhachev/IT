<?
//1. Пусть дан текстовый файл. Необходимо каждую строку, начинающуюся на букву ‘S’, распечатать посимвольно.
echo '<h1>1</h1>
<form action="1.php" method="post">
<label>Введите имя файла: </label>
<input type="text" name="filename" />
<button type="submit" name="submit">Выполнить</button></form>';

if(isset($_POST['submit']) && isset($_POST['filename'])) {
    echo '<b>Выбранный файл:</b> ' . $_POST['filename'] . '</br>';

    echo '<b>Строки, начинающуюся на букву "S":</b></br>';
    foreach(file($_POST['filename']) as $string)
        if ($string[0] == 'S')
            foreach(str_split($string) as $char)
                echo $char . '</br>';  
}
?>