<?php
  
  require("vendor/autoload.php"); 
  
  
  $dotenv = Dotenv\Dotenv::createImmutable('./');
  $dotenv->load();

  define('DB_HOST', getenv("DDBB_HOST"));
  define('DB_NAME', getenv("DDBB_NAME"));
  define('DB_USER', getenv("DDBB_USER"));
  define('DB_PASSWORD', getenv("DDBB_PASSWORD"));
  define('DB_CHARSET', 'utf-8');

?>