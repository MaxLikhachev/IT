<?
// 4. Получить список студентов, проживающих в Воронеже и не получающих стипендию.
include 'config.php';

echo '<h1>4</h1>';
$sql = 'SELECT * FROM student WHERE scholarship = 0 AND city = "Воронеж"';
   
echo '<b>Cтуденты, проживающие в Воронеже и не получающие стипендию:</b></br>';
foreach ($pdo->query($sql) as $row)
    echo $row['second_name'] . " " . $row['first_name'] . ", " . $row['course'] . " курс, стипендия: "  . $row['scholarship'] . "</br>";
?>