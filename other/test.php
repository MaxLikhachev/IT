<?php

//$text = array("5"=>array("action"=>"5.php", "title"=>"#5", "task"=>"Скопировать 5 строк из одного файла в другой", "inputnames"=>['firstfilename','secondfilename','arrayindexes'], "inputplaceholders"=>['firstfilename','secondfilename','arrayindexes']));
//file_put_contents('tasks.json',json_encode($text));

$array = json_decode(file_get_contents('tasks.json'),true);
foreach ($array as $key=>$value)
    if(is_array($value))
        foreach ($value as $subkey=>$subvalue)
            echo $subkey." -> ".$subvalue."<br />";
    else echo $key." -> ".$value."<br />";
?>