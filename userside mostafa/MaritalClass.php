<?php
require_once("db.php");
class marital{
    public $id;
    public $value;

	public function insert(){
        $DBObject = new DB();
        $sql = "INSERT INTO maritalstatus(value) VALUES ('".$this->value."')";
        $DBObject->connect();
         echo $DBObject->execute($sql);
        $DBObject->disconnect();
    
        }
        public function select(){
            $DBObject = new DB();
            $sql = "SELECT * FROM maritalstatus where id = '".$this->id."' ";
            $DBObject->connect();
            $result =$DBObject->execute($sql);
          
          while ($row = mysqli_fetch_array($result)){
               echo $row['id'];
               echo $row['value'];
           }
           $DBObject->disconnect();
            
        
         }
        public function delete(){ 
            $DBObject = new DB();
            $sql = "DELETE FROM maritalstatus where id = '".$this->id."' ";
            $DBObject->connect();
             $DBObject->execute($sql);
            $DBObject->disconnect();
        
          }


}

?>