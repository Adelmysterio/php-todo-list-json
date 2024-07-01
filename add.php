<?php
if (isset($_GET['task'])) {
    $data = file_get_contents('./db/todoList.json');
    $data = json_decode($data, true);
    $data[] = $_GET['task'];
    $data = json_encode($data);
    file_put_contents('./db/todoList.json', $data);
    header('Location: ./index.php');
    exit;
}
