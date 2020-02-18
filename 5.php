<?php
include 'config.php';

function copylines($firstfilename, $secondfilename, $arrayindexes) {
    $text = file($firstfilename);
    file_put_contents($secondfilename,'');

    foreach ($text as $i=>$line)
        foreach ($arrayindexes as $index)
            if ($i == $index)
                file_put_contents($secondfilename, $line, FILE_APPEND); 
}

if(isset($_POST['firstfilename']) && isset($_POST['secondfilename']) && isset($_POST['arrayindexes']) && file_get_contents($_POST['firstfilename']) && file_get_contents($_POST['firstfilename'])){
    $firstfilename = $_POST['firstfilename'];
    $secondfilename = $_POST['secondfilename'];
    $arrayindexes = preg_split('/[., ]/', $_POST['arrayindexes']);

    copylines($firstfilename, $secondfilename, $arrayindexes);
    
    message_render('Введенные данные корректны','success');
    message_render(implode("<br />", file($firstfilename)),'', 'Входной файл');
    message_render(implode("<br />", file($secondfilename)),'', 'Выходной файл');

}
else message_render('Введенные данные некорректны','error');
?>