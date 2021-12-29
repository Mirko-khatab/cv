<!DOCTYPE html>
<html lang="en">
<head>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cv_maker</title>
</head>
<body style='background:#C2C0E5;'>
  <?php include "nav_and_foter/nav.php" ?>
  <div class="container mt-3 mb-3"> 
  <div class="d-flex flex-row align-items-center"></div>
    <div class="heading mt-2 text-light"> <span>Creat Your CV <br>Online</span> </div> 
    <div class="row mt-1 g-4">  
      <?php 
 require_once 'includ/dbc.php';
 $result = $dbh->prepare("SELECT img,title FROM cards");
 $result->execute();
 $row = $result->fetchall();
  foreach ($row as $val) {
    ?>
      <div class="col-md-4">
        <div class="dropdown">
        <div class="card p-2 text-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style='background:#F6F6F6;'>
          <div class="p-4 px-4 m-auto"><img src="img/<?php echo $val['img']; ?>.png" height="95" width="90"/></div>
          <div class="email mt-1 m-auto"> <span><?php echo $val['title']; ?></span></div>
      </div> 
      <ul class="dropdown-menu m-auto ms-3 w-100 rounded-3 bg-white" aria-labelledby="dropdownMenuButton1">
                <form action="#" method="post">
                <li class="dropdown-item"><div class="mb-3"><input type="text" class="form-control" placeholder="Name"></div></li>
                <li class="dropdown-item"><div class="mb-3"><input type="text" class="form-control" placeholder="location"></div></li>
      
              </form>
              </ul>
              </div>

    </div>
      <?php
         }
        ?>
        </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>