<?php

class teacher{
    public $id;
    public $nationality;
    public $address_id;
    public $main_id;
    public $mstatus_id;
    public $acaqual1;
    public $date_acaqual1;
    public $personal_qual1;
    public $date_ppersonalqual1;
    public $pempname;
    public $pempaddress_id;
    public $pempnum;
    public $corsalary;
    public $reqsalary;
    public $othernursery;
    public $povnursery;

    public function insert(){
        $DBObject = new DB();
        $sql = "INSERT INTO teacher (nationality, address_id, main_id, mstatus_id, acaqual1, date_acaqual1, personal_qual1, date_ppersonalqual1, pempname, pempaddress_id, pempnum, corlsalary, reqsalary, othernursery, povnursery) 
        VALUES ('".$this->nationality."','".$this->address_id."','".$this->main_id."','".$this->mstatus_id."',
        '".$this->acaqual1."','".$this->date_acaqual1."','".$this->personal_qual1."','".$this->date_ppersonalqual1."',
        '".$this->pempname."','".$this->pempaddress_id."','".$this->pempnum."','".$this->corsalary."','".$this->reqsalary."',
        '".$this->othernursery."','".$this->povnursery."')";
        $DBObject->connect();
         echo $DBObject->execute($sql);
         $last_id = $DBObject->getID();
        $DBObject->disconnect();
        return $last_id;
    }
    public function select(){ 
      $DBObject = new DB();
      $sql = ""
      $DBObject->connect();
      echo $DBObject->execute($sql);
      while($row = mysqli_fetch_array($result)){
        echo $row['id'];
        echo $row['fname'];
        echo $row['lname'];
      } 
      $DBObject->disconnect();
    
     }
    public function update(){ 
        
      }
	
}
?>