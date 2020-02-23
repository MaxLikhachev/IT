<?php
include 'config.php';

if(isset($_POST['submit'])) {
    $sql = 'SELECT * FROM student WHERE age>25 and course=1 ORDER BY id';
    $info = [];

    foreach ($pdo->query($sql) as $row) {
        array_push($info, $row['secondname'] . "\t" . $row['firstname'] . "\t" . $row['thirdname'] . ",\t" . $row['age'] . "\tлет" . ",\t" . $row['course'] . "\tкурс");
    }
    
    message_render('Введенные данные корректны','success');
    message_render(implode("<br />", $info),'', 'Информация о студентах');
}
else message_render('Введенные данные некорректны','error');
?>