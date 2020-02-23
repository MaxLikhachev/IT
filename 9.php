<?php
include 'config.php';

if(isset($_POST['submit'])) {
    $sql = 'SELECT * FROM subject ORDER BY semestr, hours DESC';
    $maxhours = [];
    $result = [];
    $info = [];

    foreach ($pdo->query($sql) as $row) {
        $string = $row['name'] . ",\t" . $row['hours'] . "\tчас." . ",\t" . $row['semestr'] . "\tсеместр";
        if (is_null($maxhours[$row['semestr']])) $maxhours[$row['semestr']] = $row['hours'];
        if ($row['hours'] == $maxhours[$row['semestr']]) array_push($result, $string);
        array_push($info, $string);
    }
    
    message_render('Введенные данные корректны','success');
    message_render(implode("<br />", $info),'', 'Информация о всех предметах');
    message_render(implode("<br />", $result),'', 'Информация о наиболее нагруженных предметах');
}
else message_render('Введенные данные некорректны','error');
?>