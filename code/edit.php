<?php
include "function.php";
$db = include "database/start.php";
$id = $_GET['id'];
$post = $db->getOne('posts',$id);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 offet-md-2">
<form action="update.php" method="post">
    <input type="hidden" value="<?php echo $post['id'];?>" name="id">
    <div class="forum-group">
        <label for="">Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $post['title'];?>">
    </div>
    <div class="form-group">
        <button class="btn btn-warning">Edit Post</button>
    </div>
</form>
        </div>
    </div>
</div>

</body>
</html>
