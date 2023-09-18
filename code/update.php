<?php
include "function.php";
$db = include "database/start.php";
$id = $_POST['id'];
$title = $_POST['title'];
$update = $db->update('posts',
    [
        "title"=>'new',
        "email"=>'gmail',
        "userName"=>'sho'

],$id);
