<?php
include'includ/nav.php';
?>
<div class="container mt-3 mb-3">
    <div class="d-flex flex-row align-items-center"></div>
    <div class="heading mt-2"> <span>High-impact Marketing <br>Services</span> </div>
    <div class="row mt-1 g-4">
<?php
$query = mysqli_query($db, "SELECT * FROM `card`");
while($row = mysqli_fetch_assoc($query)){?>
 <div class="col-md-4">
            <div class="card p-3 text-center rounded-5">
                <img src="img/<?php echo x($row['img']);?>.png" alt="svg" class="w-50 m-auto">
                <h5 class="card-title mt-3"><?php echo x($row['title']);?></h5>
               <span data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="img/edit.svg" alt="edit" width="40"></span>
            </div>
        </div>
     

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#!">
        <div class="mb-3">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
        </form>
        
      </div>
    </div>
  </div>
</div>
<?php } ?>
</div>
</div>
<?php
include'includ/footer.html';
?>
