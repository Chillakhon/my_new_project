<?php
include "function.php";
$db = include "database/start.php";
$id = $_POST['id'];
$update = $db->update('posts',$_POST,$id);
header("location:index.php");