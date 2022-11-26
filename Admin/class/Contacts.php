<?php 

require_once("Query.php");


Class Contacts extends Query{
    
    function __consturct($conn){
      parent::__consturct($conn);
    }


    public function callsData(){        
       return  $this->select("SELECT `id`, `first_name`, `last_name`, `phone`, `email`, `message`, `created_at` FROM `contact_form` ORDER BY `id` DESC");
    }//

    public function Login($post){
     return $this->select("SELECT * FROM `admins` WHERE email='".$post['email']."'  AND password='".$post['password']."'" );       
    } //Login

    public function deleteContact($id) {
      return $this->delete("DELETE from `contact_form` WHERE `id`='$id'");
    }

}


?>