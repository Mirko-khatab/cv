<?php
include'includ/nav.php';
?>
<div class="container">
<div class="row m-3 justify-content-center">
<?php
$query = mysqli_query($db, "SELECT * FROM `card`");
while($row = mysqli_fetch_assoc($query)){?>
<div class="card m-2 border-0 p-3 rounded-3 shadow-sm" style="width: 18rem;">
  <img src="img/<?php echo x($row['img']);?>.png" class="w-50 m-auto">
  <div class="card-body text-center">
    <h5 class="card-title"><?php echo x($row['title']);?></h5>
  </div>
  <a href="?d=<?php echo x($row['id']);?>"><img src="assets/img/remove.svg" width="40" style="position:absolute;top:0;right:0;margin:10px" alt=""></a>
</div>
<?php } ?>
</div>
</div>
<?php
include'includ/footer.html';
?>
