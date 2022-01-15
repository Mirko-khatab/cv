<?php
include'includ/nav.php';
?>
<div class="container mt-3 mb-3">
    <div class="d-flex flex-row align-items-center"></div>
    <div class="heading mt-2"> <span class="text-white">CV_ONLINE<br>Services</span> </div>
    <div class="row mt-1 g-4">
<?php
$query = mysqli_query($db, "SELECT * FROM `test`");
while($row = mysqli_fetch_assoc($query)){?>
 <div class="col-md-4">
            <div class="card p-3 rounded-5 g">
                <img src="img/us.png" alt="svg" class="w-50 m-auto">
               <div class="mb-2"><h5 class="card-title text-center mt-2"><?php echo x($row['title']);?></h5></div>
               <span data-bs-toggle="modal" data-bs-target="#s<?php echo x($row['id']); ?>"><img src="img/edit.svg" alt="edit" width="40"></span>
            </div>
        </div>

<div class="modal fade" id="s1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#">
        <div class='mb-3'> <input type='text' class='form-control' placeholder='Name'></div>   
        <div class='mb-3'> <input type='text' class='form-control' placeholder='Addrase'></div>   
        <div class='mb-3'> <input type='text' class='form-control' placeholder='Email'></div>   
        <div class='mb-3'> <input type='text' class='form-control' placeholder='Phone'></div>   
        <div class='mb-3'> <input type='text' class='form-control' placeholder="Date_of_Birthday ('optional')"></div>  
        <div class="mb-3"><input type="submit" class="btn w-100 g text-white" name='add' value="add"></div> 
      </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="s2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#!">
        <div class='mb-3'> <input type='text' class='form-control' placeholder='Degree'></div>   
        <div class='mb-3'> <input type='text' class='form-control' placeholder='Instate'></div>   
        <div class='mb-3'> <input type='text' class='form-control' placeholder='Grad'></div>   
        <div class='mb-3'> <input type='text' class='form-control' placeholder='Year'></div>  
        <div class="mb-3"><input type="submit" class="btn w-100 g text-white" name='add' value="add"></div>  
      </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="s3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#!">
        <div class='mb-3'> <input type='text' class='form-control' placeholder='CompanyName'></div>   
        <div class='mb-3'> <input type='text' class='form-control' placeholder='job title'></div>   
        <div class='mb-3'> <input type='text' class='form-control' placeholder='Start day'></div>   
        <div class='mb-3'> <input type='text' class='form-control' placeholder='End day'></div>   
        <div class='mb-3'> <input type='text' class='form-control' placeholder='Details'></div> 
        <div class="mb-3"><input type="submit" class="btn w-100 g text-white" name='add' value="add"></div>  
      </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="s4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#!">
        <div class='mb-3'> <input type='text' class='form-control' placeholder='Name'></div>   
        <div class='mb-3'> <input type='text' class='form-control' placeholder='Job title'></div>   
        <div class='mb-3'> <input type='text' class='form-control' placeholder='CompanyName'></div>   
        <div class='mb-3'> <input type='text' class='form-control' placeholder='Email'></div>   
        <div class='mb-3'> <input type='text' class='form-control' placeholder='Phone'></div>
        <div class="mb-3"><input type="submit" class="btn w-100 g text-white" name='add' value="add"></div>     
      </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="s5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#!">
        <div class='mb-3'> <input type='text' class='form-control' placeholder='Skill'></div>    
        <div class="mb-3"><input type="submit" class="btn w-100 g text-white" name='add' value="add"></div>  
      </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="s6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#!">
        <div class='mb-3'> <input type='text' class='form-control' placeholder='Object'></div>  
        <div class="mb-3"><input type="submit" class="btn w-100 g text-white" name='add' value="add"></div>   
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

