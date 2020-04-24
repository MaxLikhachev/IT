<?
//2. Пусть есть две подстроки. Выяснить, можно ли из первой строки путем перестановки получить вторую строку.
echo '<h1>2</h1>
<form action="2.php" method="post">
<label>Введите 1 строку: </label></br>
<input type="text" name="frststring" /></br>
<label>Введите 2 строку: </label></br>
<input type="text" name="scndstring" /></br>
<button type="submit" name="submit">Выполнить</button></form>';

if(isset($_POST['submit']) && isset($_POST['frststring']) && isset($_POST['scndstring'])) {
    echo '<b>Введенная 1 строка:</b> ' . $_POST['frststring'] . '</br>';
    echo '<b>Введенная 2 строка:</b> ' . $_POST['scndstring'] . '</br>';

    echo '<b>Можно ли получить 2 строку из 1 строки?:</b></br>';
    $frststring = str_split($_POST['frststring']);
    $scndstring = str_split($_POST['scndstring']);

    foreach($frststring as $i=>$frstchar) {
        foreach($scndstring as $j=>$scndchar)
            if($frstchar == $scndchar) {
                $tempchar = $scndstring[$i];
                $scndstring[$i] = $frstchar;
                $scndstring[$j] = $tempchar;
            }
    }

    if (strcmp(implode($frststring), implode($scndstring)) == 0) echo "Можно";
    else echo "Нельзя";
}
?>