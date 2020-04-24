<?
//1. Пусть дан текстовый файл. Необходимо четные строки перенести в один файл, а нечетные в другой
echo '<h1>1</h1>
<form action="1.php" method="post">
<label>Введите имя исходного файла: </label><br/>
<input type="text" name="inputfilename" value="1.0.txt"/><br/>
<label>Введите имя файла для нечетных строк: </label><br/>
<input type="text" name="firstfilename" value="1.1.txt"/><br/>
<label>Введите имя файла для четных строк: </label><br/>
<input type="text" name="secondfilename" value="1.2.txt"/><br/>
<button type="submit" name="submit">Выполнить</button></form>';

if(isset($_POST['firstfilename']) && isset($_POST['secondfilename']) && isset($_POST['inputfilename']) && isset($_POST['submit'])) {
    
    $text = file($_POST['inputfilename']);
    file_put_contents($_POST['firstfilename'],'');
    file_put_contents($_POST['secondfilename'],'');

    foreach ($text as $i=>$line)
        if ($i % 2 == 0) file_put_contents($_POST['firstfilename'], $line, FILE_APPEND);
        else file_put_contents($_POST['secondfilename'], $line, FILE_APPEND);
    
    echo "<br/>Исходный файл:";
    echo file_get_contents($_POST['inputfilename']);
    echo "<br/>Файл с четными строками:";
    echo file_get_contents($_POST['firstfilename']);
    echo "<br/>Файл с нечетными строками:";
    echo file_get_contents($_POST['secondfilename']);
}
?>