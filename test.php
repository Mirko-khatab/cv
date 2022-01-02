
  <?php include "includ/nav.php" ?>
  <div class="container mt-3 mb-3">  
  <div class="d-flex flex-row align-items-center"></div>
    <div class="heading mt-2 text-light"> <span>Creat Your CV <br>Online</span> </div> 
    <div class="row mt-1 g-4">  
<?php
$query = mysqli_query($db, "SELECT * FROM `cards`");
while($row = mysqli_fetch_assoc($query)){
  ?>
      <div class="col-md-4">
        <div class="card p-2" data-bs-toggle="modal" data-bs-target="#<?php echo $row['id']; ?>">
          <div class="p-4 px-4 m-auto"><img src="img/<?php echo $row['img']; ?>.png" height="95" width="90"/></div>
          <div class="email mt-1 m-auto"> <span><?php echo $row['title']; ?></span></div>
      </div>
      <!-- Modal -->
<div class="modal fade" id="<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> 
    </div>
    <?php } ?>
    </div>     
    </div>
  


  
</body>

</html>