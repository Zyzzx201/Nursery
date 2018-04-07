<?php

class emergency{
    public $id;
    public $nationality;
    public $address_id;
    public $maid_id;
    public $telnum;
    public $mobile1;
    public $maritalstatus_id;

    public function insert(){
        $DBobject = new DB();
        $sql = "INSERT INTO emergency (id, main_id, ecname, ecaddress_id, relation, ecnum, extrainfo) 
        VALUES ('".$this->nationality."','".$this->address_id."','".$this->main_id."','".$this->telnum."', '".$this->mobile1."',
        '".$this->maritalstatus_id."')";
        $DBObject->connect();
         echo $DBObject->execute($sql);
        $DBObject->disconnect();
    }
    public function select(){  
        
    
     }
    public function delete(){ 
    
      }
    public function update(){ 
        
      }
	
}
?>