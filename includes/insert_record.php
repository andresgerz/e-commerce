<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php 
   
  $ser=$_GET['service'];
  $cos=$_GET['cost'];
  
  var_dump($searching);

  $db_host="localhost";
  $db_user="root";
  $db_password="jpFG57J&AI";
  $db_name="accounting_db"; 

  $connection=mysqli_connect($db_host,$db_user,$db_password);
  
  
  #catch errors
  if (mysqli_connect_errno()) {
    echo "<h3>Connection failed!</h3>";
    
    exit();
  }


  mysqli_select_db($connection, $db_name) or die ("Don't found database");

  $query="INSERT INTO expenses (service,cost) VALUES('$ser','$cos')";
  
  $results=mysqli_query($connection,$query);

  if($results==false) {
    echo "Error of query";
  } else {
    echo "It sent successfull";
  }

  mysqli_close($connection);

 
 ?>
</body>
</html>