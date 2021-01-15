<?php 

  require_once("./models/Costs_model.php");

  $cost=new Costs_model();
  $matrixCosts =$cost->get_costs();

  require_once("./views/Costs_view.php");


?>