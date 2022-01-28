<?php
include'includ/nav.php';
?>
<div class="container-sm mt-3 mb-3">
   
    <div class="row mt-1 g-4">
<?php
$query = mysqli_query($db, "SELECT * FROM `category`");
while($row = mysqli_fetch_assoc($query)){?>
 <div class="col-sm-4">
            <div class="card p-3 rounded-5" style="background:#C2C0E5 !important;">
                <img src="img/<?php echo $row['category_img']; ?>" alt="svg" class="w-50 m-auto">
              <div class="mb-2"><h3 class="card-title text-center mt-3 text-white"><?php echo x($row['category_title']);?></h3></div>
               <span data-bs-toggle="modal" data-bs-target="#s<?php echo x($row['category_id']); ?>"><img src="img/edit.svg" alt="edit" width="40"></span>
            </div>
        </div>
        <?php } ?>
        <?php
$query = mysqli_query($db, "SELECT * FROM person ORDER BY person_id DESC LIMIT 1");
while($row = mysqli_fetch_assoc($query)){?>
     
<div class="modal fade" id="s1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">

        <form action="form.php?id=<?PHP echo $row['person_id']?>" method="POST" enctype="multipart/form-data">
          <input type="text" name="idd" value="<?PHP echo $row['person_id']+1 ?>" hidden>
        <div class='mb-3'> <input name="Name"  type='text' class='form-control' placeholder='Name'></div>   
        <div class='mb-3'> <input name="Addrase" type='text' class='form-control' placeholder='Addrase'></div>   
        <div class='mb-3'> <input name="Email" type='text' class='form-control' placeholder='Email'></div>   
        <div class='mb-3'> <input name="Phone" type='text' class='form-control' placeholder='Phone'></div>   
        <div class='mb-3'> <input name="facebook" type='text' class='form-control' placeholder='facebook'></div>   
        <div class='mb-3'> <input name="insta" type='text' class='form-control' placeholder='Instagram'></div>   
        <div class='mb-3'> <input name="Date_of_Birthday" type='text' class='form-control' placeholder="Date_of_Birthday"></div> 
        <div class='mb-3'> <input name="file" type='file' class='form-control btn w-100 g'></div> 
        <div class='mb-3'> <textarea name="profile" type='' class='form-control' placeholder="PROFILE"></textarea></div>  
        <div class="mb-3"> <input name="add_1"  type="submit" class="btn w-100 g text-white" value="add"></div>
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
        <form action="form.php" method="POST">
        <input type="text" name="idd" value="<?PHP echo $row['person_id']?>" hidden>
        <div class='mb-3'> <input name="edu_title" type='text' class='form-control' placeholder='Education Title'></div>   
        <div class='mb-3'> <input name="institu" type='text' class='form-control' placeholder='institute or university '></div>   
        <div class='mb-3'> <input name="st" type='text' class='form-control' placeholder='START-Year'></div>   
        <div class='mb-3'> <input name="end_year" type='text' class='form-control' placeholder='END-Year'></div>   
        <div class="mb-3"><input name="add_2" type="submit" class="btn w-100 g text-white" value="add"></div>  
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
       <form action="form.php" method="POST">
       <input type="text" name="idd" value="<?PHP echo $row['person_id']?>" hidden>
        <div class='mb-3'> <input name="CompanyName" type='text' class='form-control' placeholder='EXPERIANCE TITILE'></div>      
        <div class='mb-3'> <input name="Start_day" type='text' class='form-control' placeholder='Start day'></div>   
        <div class='mb-3'> <input name="End_day" type='text' class='form-control' placeholder='End day'></div>   
        <div class='mb-3'> <textarea name="Details" type='text' class='form-control' placeholder='Details'></textarea></div> 
        <div class="mb-3"><input name="add_3" type="submit" class="btn w-100 g text-white" value="add"></div>  
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
      <form action="form.php" method="POST">
      <input type="text" name="idd" value="<?PHP echo $row['person_id']?>" hidden>
        <div class='mb-3'> <input name="Skill" type='text' class='form-control' placeholder='Skill'></div>    
        <div class='mb-3'> <input name="lang" type='text' class='form-control' placeholder='Language'></div>    
        <div class="mb-3"><input type="submit" class="btn w-100 g text-white" name='add_4' value="add"></div>  
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
      <form action="form.php" method="POST">
      <input type="text" name="idd" value="<?PHP echo $row['person_id']?>" hidden>
        <div class='mb-3'> <input name="title" type='text' class='form-control' placeholder='Certification Title'></div>  
        <div class='mb-3'> <input name="Year" type='text' class='form-control' placeholder='Year'></div>  
        <div class='mb-3'> <input name="Details" type='text' class='form-control' placeholder='Certification Details'></div>  
        <div class="mb-3"><input type="submit" class="btn w-100 g text-white" name='add_5' value="add"></div>   
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
      <form action="form.php" method="POST">
               <input type="text" name="idd" value="<?PHP echo $row['person_id']?>" hidden>
        <div class='mb-3'> <input name="Name" type='text' class='form-control' placeholder='Name'></div>   
        <div class='mb-3'> <input name="Job_title" type='text' class='form-control' placeholder='Job title'></div>   
        <div class='mb-3'> <input name="Email" type='text' class='form-control' placeholder='Email'></div>   
        <div class='mb-3'> <input name="Phone" type='text' class='form-control' placeholder='Phone'></div>
        <div class="mb-3"><input name="add_6" type="submit" class="btn w-100 g text-white" value="add"></div>     
      </form>
    
      </div>
    </div>
  </div>
</div>



</div>
<div class="d-flex flex-row align-items-center"></div>
    <div class="heading mt-2"> <a href="cvs/resum.php?id=<?php echo $row['person_id'] ;?>" class="text-white btn btn-danger">Your_CV</a></div>

  </div>
<?php } ?>
<?php
include'includ/footer.html';
?>

