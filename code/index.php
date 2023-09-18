<?php
include "function.php";
$db = include "database/start.php";
$posts = $db->getAll('posts');
require "index.view.php";

