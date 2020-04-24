<?
// 4. Написать запрос, который выполняет вывод списка фамилий студентов, обучающихся на третьем и более старших курсах.
include 'config.php';

echo '<h1>4</h1>';
$sql = 'SELECT * FROM student WHERE course >= 3';
   
echo '<b>Cтуденты 3 курса и старше:</b></br>';
foreach ($pdo->query($sql) as $row)
    echo $row['second_name'] . " " . $row['first_name'] . ", " . $row['course'] . " курс, стипендия: "  . $row['scholarship'] . "</br>";
?>