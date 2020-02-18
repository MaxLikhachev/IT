<?php
function form_render($action,$title, $task, $inputnames,$inputplaceholders) {
    echo '<section><form action="'.$action.'" method="post"><span>'.$title.'</span><p>'.$task.'</p>';
    foreach ($inputnames as $i=>$inputname)
        echo '<input placeholder="'.$inputplaceholders[$i].'" name="'.$inputname.'" type="text"/>';
    echo '<button type="submit">ОК</button></form></section>';
}
?>