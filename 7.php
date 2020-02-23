<?php
include 'config.php';

if(isset($_POST['firstname']) && isset($_POST['secondname']) && isset($_POST['secondname']) && isset($_POST['submit'])) {
    $sql = 'SELECT * FROM student ORDER BY id';
    $info = [];

    foreach ($pdo->query($sql) as $row) {
        array_push($info, $row['secondname'] . "\t".$row['firstname'] . "\t".$row['thirdname']);
        array_push($info, $row['age'] . "\tлет");
        array_push($info, $row['course'] . "\tкурс");
    }
    
    message_render('Введенные данные корректны','success');
    message_render(implode("<br />", $info),'', 'Информация о студенте');
}
else message_render('Введенные данные некорректны','error');
?>