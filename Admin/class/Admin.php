<?php 

require_once("Query.php");


Class Admin extends Query{
    
    function __consturct($conn){
      parent::__consturct($conn);
    }


    public function callsData(){        
       return  $this->select('SELECT * FROM booked_slots ');
    }
}


?>