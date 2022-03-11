<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
        include  "connect.php";
if(isset($_POST['email'])){
    $title = $_POST['title'];
    $name = $_POST['email'];
    $des = $_POST['desc'];
    // $des = $_POST['desc'];
    move_uploaded_file($_FILES['img']['tmp_name'],"images/{$_FILES['img']['name']}");
    $query = "INSERT INTO blog VALUES (Null,'$title','$des','$name','images/{$_FILES['img']['name']}')";
    mysqli_query($conn,$query);
}

?>
<body>
<form method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="email" class="form-label">Name</label>
    <input type="text" class="form-control" name="email" aria-describedby="emailHelp">
    <div class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="password" class="form-control" name="title">
  </div>
  <div class="mb-3">
    <label for="img" class="form-label">Image</label>
    <input type="file" class="form-control" name="img">
  </div>
  <div class="mb-3">
    <label for="desc" class="form-label">Description</label>
    <textarea name="desc" cols="30" rows="10"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>