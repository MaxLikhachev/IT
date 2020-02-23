<?php
include 'config.php';

function find_vowels($string) {
    $finded_vowels = [];
    $vowels = ['a','e','i','o','u','y','A','E','I','O','U','Y'];
    for ($i = 0; $i < strlen($string); $i++)
        if (in_array($string[$i], $vowels) && !in_array($string[$i], $finded_vowels))
            array_push($finded_vowels, $string[$i]);

    return $finded_vowels;
}

if(isset($_POST['firststring']) && isset($_POST['secondstring']) && isset($_POST['submit'])) {
    $firststring = $_POST['firststring'];
    $secondstring = $_POST['secondstring'];

    $firststring_vowels = find_vowels($firststring);
    $secondstring_vowels = find_vowels($secondstring);
    
    message_render('Введенные данные корректны','success');
    message_render(implode("<br />", $firststring_vowels),'', 'Латинские гласные в первой строке');
    message_render(implode("<br />", $secondstring_vowels),'', 'Латинские гласные во второй строке');
    message_render(implode("<br />", array_diff($firststring_vowels, $secondstring_vowels)),'', 'Разница между гласными');
}
else message_render('Введенные данные некорректны','error');
?>