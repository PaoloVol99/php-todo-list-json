<?php 

$todo_string = file_get_contents("./todo.json");

$todo_list = json_decode($todo_string, true);

$new_todo = $_POST['todo'] ?? null;

$new_todo_formatted = [
    'text' => $new_todo,
    'done' => true
];

if ($new_todo !== null) {
    $todo_list[] = $new_todo_formatted;
}

$todo_list_updated = json_encode($todo_list);

file_put_contents('./todo.json', $todo_list_updated);

header("Content-Type: application/json");

echo $todo_list_updated;

?>