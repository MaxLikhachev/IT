<?php
function task_render() {
    foreach (json_decode(file_get_contents('tasks.json'),true) as $i=>$jsonobject) {
        echo '<a name="'.$i.'"></a>';
        form_render($jsonobject['action'],$jsonobject['title'],$jsonobject['task'],$jsonobject['inputnames'],$jsonobject['inputplaceholders']);
    }
}
task_render();
?>