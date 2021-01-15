<?php

  class Costs_model {

    private $db;
    private $costs;

    public function __construct() {

      require_once("./includes/database/connection.php");
      $this->db=Connect::Connection();
      $this->costs=array();
    }


    public function get_costs() {
      $query=$this->db->query("SELECT * FROM expenses");

      while($rows=$query->fetch(PDO::FETCH_ASSOC)) {
        $this->costs[]=$rows;

      }
      return $this->costs;
    }
  }

?>