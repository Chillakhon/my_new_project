<?php
include "function.php";
$db = include "database/start.php";
$posts = $db->getAll('posts');
$post = $db->getOne('posts',2);
dd($post);
require "index.view.php";

