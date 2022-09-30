<?php 

require_once("Query.php");


Class Admin extends Query{
    
    function __consturct($conn){
      parent::__consturct($conn);
    }


    public function callsData(){        
       return  $this->select("SELECT * FROM booked_slots INNER JOIN users ON booked_slots.user_id=users.id ORDER BY slot_id desc");
    }//

    public function Login($post){
     return $this->select("SELECT * FROM `admins` WHERE email='".$post['email']."'  AND password='".$post['password']."'" );       
    } //Login

}


?>