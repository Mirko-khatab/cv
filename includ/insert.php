<?php 
if(isset($_POST['add_1'])){
$name=x($_POST['Name']);
$addrase=x($_POST['Addrase']);
$email=x($_POST['Email']);
$phone=x($_POST['Phone']);
$Date=x($_POST['Date_of_Birthday']);
$face=x($_POST['facebook']);
$insta=x($_POST['insta']);
$profile=x($_POST['profile']);
//this is information about image
$file=$_FILES['file'];

$file_name=$file['name'];
$file_type=$file['type'];
$file_tmp=$file['tmp_name'];
$file_size=$file['size'];
$file_error=$file['error'];
$file_full_path=$file['full_path'];
$fileEXT=explode('.',$file_name);
$file_ActualEXT=strtolower(end($fileEXT));
$fileAllowed=array('png','jpg','jpeg','svg','giv');
if(in_array($file_ActualEXT , $fileAllowed)){
  if($file_error === 0){
    if($file_size < 10000000){
      $filenewname=rand().'.'.$file_ActualEXT;
      $filedestnsion="uplod/$filenewname";
      move_uploaded_file($file_tmp,$filedestnsion);

  $query=mysqli_query($db,"INSERT INTO `person`(`Name`,`addras`,`Email`,`phone`,`Data_of_berthday`,`facebook`,`insta`,`profile`,`img`) values ('$name','$addrase','$email','$phone','$Date','$face','$insta','$profile','$filenewname')");
if($query){
  header("Location:form.php");
}

}else{
  echo "<script>alert('img size is to long   !!');</script>";
}
}else{
  echo "<script>alert('try again  !!');</script>";
}
}
else{
  echo "<script>alert('file is not support !!');</script>";
}
}
else if(isset($_POST['add_2'])){
$person_id=x($_POST['idd']);
  $st=x($_POST['st']);
  $end_year=x($_POST['end_year']);
  $edu_title=x($_POST['edu_title']);
  $institu=x($_POST['institu']);
  $query=mysqli_query($db,"INSERT INTO `education`(`edu_title`,`edu_start_year`,`edu_end_year`,`edu_place`,`person_id`) values ('$edu_title','$st','$end_year','$institu','$person_id')");
  if($query){
    header("Location:form.php");
  }
  }
else if(isset($_POST['add_3'])){
  $person_id=x($_POST['idd']);
  $CompanyName=x($_POST['CompanyName']);
  $Start_day=x($_POST['Start_day']);
  $End_day=x($_POST['End_day']);
  $Details=x($_POST['Details']);
  
  $query=mysqli_query($db,"INSERT INTO `experience`(`exp_title`,`exp_start_day`,`exp_end_day`,`exp_details`,`person_id`) values ('$CompanyName','$Start_day','$End_day','$Details','$person_id')");
  if($query){
    header("Location:form.php");
  
  
  }
  }
else if(isset($_POST['add_6'])){
  $person_id=x($_POST['idd']);
  $Name=x($_POST['Name']);
  $job_title=X($_POST['Job_title']);
  $Email=x($_POST['Email']);
  $Phone=x($_POST['Phone']);
  
  $query=mysqli_query($db,"INSERT INTO `refrence`(`refrence_name`,`refrence_jobtitle`,`refrence_phone`,`refrance_email`,`person_id`) values ('$Name','$job_title','$Phone','$email','$person_id')");
  if($query){
    header("Location:form.php");
  }
  }
else if(isset($_POST['add_4'])){
  $person_id=x($_POST['idd']);
  $Skill=x($_POST['Skill']);
  $lang=x($_POST['lang']);

  $query=mysqli_query($db,"INSERT INTO `sckill`(`Sckills`,`lang`,`person_id`) values ('$Skill','$lang','$person_id')");
  if($query){
    header("Location:form.php");
  
  
  }
  }
else if(isset($_POST['add_5'])){
  $person_id=x($_POST['idd']);
  $title=x($_POST['title']);
  $deta=x($_POST['Details']);
  $year=x($_POST['Year']);

  
  $query=mysqli_query($db,"INSERT INTO `certification`(`certification_title`,`certification_year`,`certification_details`,`person_id`) values ('$title','$year','$deta','$person_id')");
  if($query){
    header("Location:form.php");
  
  
  }
  }

?>

