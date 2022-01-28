<?php
$db = mysqli_connect('localhost' , 'root' , '' , 'chakrdn');
function x($data){
    global $db;
    $data = mysqli_real_escape_string($db , htmlspecialchars($data));
    return $data;
}

?>