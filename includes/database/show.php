<?php

  require('connection.php');

  class ShowIt extends Connection {
   

    public function get_services($data = "") {
      $where="";
      
      if (!empty($data)) {
        $where = "WHERE service='" . $data ."'";
      }
      
      $sql="SELECT * FROM expenses " . $where;
      
      $sentence=$this->connection_db->prepare($sql);
      $sentence->execute(array());
      $results=$sentence->fetchAll(PDO::FETCH_ASSOC);
      $sentence->closeCursor();
      
      return $results;
      $this->connection_db=null;

      } 

      public function showing_services($search) {

        $array_services=$this->get_services($search);
        
        echo "<table class='table table-hover'>
        <thead>
        <tr>
        <th scope='col'>#</th>
        <th scope='col'>Service</th>
        <th scope='col'>Cost</th>
        </tr>
        </thead>
        <tbody>";
        
        foreach ($array_services as $elem) { 
          
          echo "<tr><td>";
          echo $elem['expense_id'] . "</td><td>";
          echo $elem['service'] . "</td><td>";
          echo $elem['cost'] . "</td>";
        }
        
        echo "</tr></tbody></table>";
    }

  }

?>