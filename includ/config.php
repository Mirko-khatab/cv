<?php
$db = mysqli_connect('localhost' , 'root' , '' , 'cv');
function x($data){
    global $db;
    $data = mysqli_real_escape_string($db , htmlspecialchars($data));
    return $data;
}

?>