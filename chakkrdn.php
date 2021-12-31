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
$query = mysqli_query($db, "SELECT * FROM `form`");
while($row = mysqli_fetch_assoc($query)){?>
      <div class="col-md-4">
        <div class="card p-2" style='background:#F6F6F6;' data-bs-toggle="modal" data-bs-target="#exampleModal">
          <div class="email mt-1 m-auto"> <span><?php echo x($row['personal']); ?></span></div>
      </div> 
    </div>
      <?php }?>
        </div>
    </div>
  </div>
</body>

</html>