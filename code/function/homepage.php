<?php
include __DIR__ . "/../function.php";
$db = include __DIR__ . "/../database/start.php";
$posts = $db->getAll('posts');
include __DIR__ . "/../index.view.php";
