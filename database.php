<?php
   $host='localhost';
   $username='root';
   $password='';
   $database="transaction";

   $connection=mysqli_connect($host, $username, $password, $database);

   if(mysqli_connect_error()){
     echo "Error:   Unable to connect to MYSQL<br>";
     echo "Message:".mysqli_connect_error()."<br>";
   }

?>