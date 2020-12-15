<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php 
      
      
  require("vendor/autoload.php"); 
  
  
  $dotenv = Dotenv\Dotenv::createImmutable('./');
  $dotenv->load();

  $db_host=getenv("DDBB_HOST");
  $db_user=getenv("DDBB_USER");
  $db_password=getenv("DDBB_PASSWORD");
  $db_name=getenv("DDBB_NAME"); 

  $connection=mysqli_connect($db_host,$db_user,$db_password);
  
  
  #catch errors
  if (mysqli_connect_errno()) {
    echo "<h3>Connection failed!</h3>";
    
    exit();
  }


  mysqli_select_db($connection, $db_name) or die ("Don't found database");

  $query="INSERT INTO expenses ";
  
  $results=mysqli_query($connection,$query);

  mysqli_close($connection);
  
  echo("<form action='insert_record.php' method='get'>
          <table>
            <tr>
              <td>
                <label>Service:</label>
                </td>
                <td>
                  <input type='text' name='service' id='service'>
                </td>
            </tr>
            <tr>
              <td>
                <label>Cost:</label>
                </td>
                <td>
                  <input type='number' name='cost' id='cost'>
                </td>
            </tr>
            <tr>
              <td>
                <button type='reset'>Clear</button>
              </td>
              <td>
                <button type='submit'>Send</button>
              </td>
            </tr>

          </table>
       </form>");

 ?>
</body>
</html>