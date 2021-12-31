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
$query = mysqli_query($db, "SELECT * FROM `cards`");
while($row = mysqli_fetch_assoc($query)){?>


      <div class="col-md-4">
        <div class="card p-2" style='background:#F6F6F6;' data-bs-toggle="modal" data-bs-target="#<?php echo $row['title']; ?>">
          <div class="p-4 px-4 m-auto"><img src="img/<?php echo $row['img']; ?>.png" height="95" width="90"/></div>
          <div class="email mt-1 m-auto"> <span><?php echo $row['title']; ?></span></div>
      </div> 
    </div>

<!-- Modal -->
<div class="modal fade" id="<?php echo $row['title']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
      <form>
  <div class="form-group">
    <input type="email" class="form-control p-2 my-3">
  </div>
  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>
      </div>
    </div>
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