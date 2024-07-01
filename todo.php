<?php
$toDoList = [
    "Compare un lanciafiamme",
    "Accarezzare un cano",
    "Invadere uno Stato Sovrano",
    "Vincere Miss Universo",
    "Confutare la teoria della relatività",
];

header("Content-type: application/json");

$toDoListJSON = json_encode($toDoList, true);

file_put_contents('./db/todoList.json', $toDoListJSON);
