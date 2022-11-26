<?php 
Class Query{  

    private $conn;

    function __construct($conn){
           $this->conn=$conn;
    }


    public function select($qu){
        $ex_query=mysqli_query($this->conn,$qu);
        $array=[];
        while($arr=mysqli_fetch_assoc($ex_query)){
          array_push($array,$arr);
        }
        
        
        $rows=mysqli_num_rows($ex_query);  
        return json_encode(["rows"=>$rows,"data"=>$array],false);
    }//select _query

    public function delete($qu) {
      $query_exec = mysqli_query($this->conn, $qu);
      return $query_exec;
    }

}
?>