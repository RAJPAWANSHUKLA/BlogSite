<link rel="stylesheet" href="style.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class='container'>
<?php
    include "connect.php";
    session_start();
    $id = $_GET['id'];
    $query = "SELECT *FROM blog WHERE blog_id = $id";
    $res = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($res)){
        echo "
        <video src='{$row['image']}' autoplay controls style ='width:30rem;height:30rem;'></video>";
        echo "<h1>{$row['Title']} </h1>";
        echo "<div>{$row['Description']}</div>";
        echo "<p style = 'float:right'>by, {$row['Writer']}</p>";
    }
    $_SESSION['id'] = $id;
?>
<div>
    <form method ="post" action="addcomment.php">
    <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Name</span>
  <input type="text" name ="Name" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Email</span>
  <input type="email" name ="Name" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="form-floating">
  <textarea class="form-control" name = "Comment" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Leave a comment here</label>
</div>
<button type="submit" class="btn btn-success">Comment</button>
    </form>
</div>

<h3>Comments</h3>
    <?php 
        $query = "SELECT * FROM Users WHERE blog_id = {$_SESSION['id']} ORDER BY Time DESC ";
        $res = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($res)){
            // echo "<tr><th></th><td></td><td></td></tr>";
            echo "
            <ol class='list-group '>
           <li class='list-group-item d-flex justify-content-between align-items-start'>
               <div class='ms-2 me-auto'>
               <div class='fw-bold'>{$row['Name']}</div>
               {$row['Comments']}
               </div>
               <span class='badge bg-primary rounded-pill'>{$row['Time']}</span>
           </li>
           </ol>
            ";
        } ?>
</div>