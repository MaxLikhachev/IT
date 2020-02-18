<?php
function message_render($text, $type, $title='') {
    switch($type){
        case 'success': $title = "Успешно!"; break;
        case 'error': $title = "Ошибка!"; break;
    }
    echo '<section><form class='.$type.'><span class='.$type.'>'.$title.'</span><p class='.$type.'>'.$text.'</p></form></section>';
}
?>