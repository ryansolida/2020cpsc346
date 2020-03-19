<?php
header("Access-Control-Allow-Origin: *");
$json_file_loc = __DIR__.'/todos.json';
$todos = json_decode(file_get_contents($json_file_loc));


if ( $_POST ){
    $todos[] = [
        'todo'=>$_POST['todo_text'],
        'completed'=>false
    ];
    file_put_contents($json_file_loc,json_encode($todos));
}

echo json_encode($todos);

?>