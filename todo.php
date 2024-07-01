<?php
$toDoList = [
    [
        'content' => "Compare un lanciafiamme",
        'done' => false
    ],
    [
        'content' => "Accarezzare un cano",
        'done' => true
    ],
    [
        'content' => "Invadere uno Stato Sovrano",
        'done' => false
    ],
    [
        'content' => "Vincere Miss Universo",
        'done' => false
    ],
    [
        'content' => "Confutare la teoria della relatività",
        'done' => false
    ],
];

header("Content-type: application/json");

$toDoListJSON = json_encode($toDoList, true);

file_put_contents('./db/todoList.json', $toDoListJSON);

?>