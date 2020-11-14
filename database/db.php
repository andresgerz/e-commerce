<?php 
   
  $db_host="localhost";
  $db_user="andrestein";
  $db_password="";
  $db_name="accounting_db"; 

  $connection=mysqli_connect($db_host,$db_user,$db_password,$db_name);

  $query="SELECT * FROM expenses";
  
  $results=mysqli_query($connection,$query);

  $row=mysqli_fetch_row($results);

  echo $fila[0] . " ";
  echo $fila[1];

?>