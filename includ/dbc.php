<?php 
define('host','localhost');
define('user','root');
define('pass','');
define('dbname','cv');
 try {
     $dbh=new PDO('mysql:host='.host.';dbname='.dbname,user,pass);
 } catch (PDOExsepstion $e) {
    exit('Error:'.$e->getMessage());
 }
?>
