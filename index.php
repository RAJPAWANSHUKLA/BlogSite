<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="container d-flex">
    <?php include "connect.php";
    function custom_echo($x, $length)
    {
      if(strlen($x)<=$length)
      {
        return $x;
      }
      else
      {
        $y=substr($x,0,$length) . '...';
        return $y;
      }
    }
        $query = "SELECT *FROM blog";
        $res = mysqli_query($conn,$query);
        while($row= mysqli_fetch_assoc($res)){
            $des = custom_echo($row['Description'],50);
            $id = $row['blog_id'];
            $tit = $row['Title'];
            $img = $row['image'];
            $writerName = $row['Writer'];
            echo '<div class="card item" style="width: 18rem;">
            <h3 class="card-title">'.$tit.'</h3>
            <img src="'.$img.'" class="card-img-top img-fluid " alt="...">
            <div class="card-body">
              <h5 class="card-title">'.date("d/m/y").'</h5>
              <p class="card-text">'.$des.'</p>
              <p class=\'card-text\'>by - '.$writerName.'</p>
              <a href=" blog.php?id='.$id.'" class="btn btn-primary">Read This Blog</a>
            </div>
          </div>';
        }
    ?>
    <a href="addcontent.php">Add Your Product</a>
    </div>
</body>
</html>