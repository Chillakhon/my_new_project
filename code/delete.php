<?php
include "function.php";
$db = include "database/start.php";
$id = $_GET['id'];
$db->delete('posts',$id);
header("location:index.php");