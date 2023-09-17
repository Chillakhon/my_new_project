<?php
include "function.php";
$db = include "database/start.php";
$adPost = $db->create('posts',
  $_POST);
header("location:index.php");