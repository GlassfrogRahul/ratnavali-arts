<?php 
Class Query{  

    private $conn;

    function __construct($conn){
           $this->conn=$conn;
    }


    public function select($qu){
        $ex_query=mysqli_query($this->conn,$qu);
        $array=[];
        while($arr=mysqli_fetch_array($ex_query)){
          array_push($array,$arr);
        }
        $rows=mysqli_num_rows($ex_query);  
        return json_encode(["rows"=>$rows,"data"=>$array],false);
    }//select _query

}
?>