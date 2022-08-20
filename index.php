<?php
   $server="localhost";
   $username="root";
   $password="";
   $con=mysqli_connect($server,$username,$password);
   
   if(!$con){
    echo "failed connecting to the db due to ".mysqli_connect_error();
   }
   else{
    //echo "success connecting to the db  ";
   }

?>