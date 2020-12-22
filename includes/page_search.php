<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
</head>
<body>

 <?php
   require('./database/show.php');

   $mySearch=$_GET["search"];

   $page=$_SERVER["PHP_SELF"];

   if($mySearch!=NULL) {
     $service=new ShowIt();
     $service->showing_services($mySearch);
     
   } else {
     echo("<form action='" . $page . "' method='get'>
         <label>Buscar: <input type='text' name='search'></label>
         <input type='submit' name='sending' value='send'>
       </form>");
     
   }
 ?>

</body>
</html>