<?php
require_once("db.php");
class emergency{
    public $id;
    public $nationality;
    public $address_id;
    public $main_id;
    //public $telnum;
    //public $mobile1;
    public $maritalstatus_id;

    public function insert(){
      $DBobject = new DB();
      $sql = "INSERT INTO emergency(main_id, ecname, ecnum, ecaddress_id, relation, extrainfo) 
      VALUES ('".$this->main_id."','".$this->ecname."','".$this->ecnum."','".$this->ecaddress_id."','".$this->relation."','".$this->extrainfo."')";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();
    }
    public function select(){  
      $DBobject = new DB();
      $sql = "SELECT * FROM emergency WHERE id = '".$this->id."' ";
      $DBobject->connect();
      $result = $DBobject->execute($sql);
      while ($row = mysqli_fetch_array($result)){
          echo $row['id'];
          echo $row['nationality'];
          echo $row['address_id'];
          echo $row['main_id'];
          //echo $row['telnum'];
          //echo $row['mobile1'];
          echo $row['maritalstatus_id'];
      }
      $DBobject->disconnect();
     }
    public function update(){ 
      $DBobject = new DB();
      $sql = "UPDATE emergency SET main_id='".$this->main_id."',ecname='".$this->ecname."',ecnum='".$this->ecnum."'
      ,ecaddress_id='".$this->ecaddress_id."',relation='".$this->relation."',extrainfo='".$this->extrainfo."' 
      WHERE id = '".$this->id."'";
      $DBobject->connect();
      $DBobject->execute($sql);
      $DBobject->disconnect();
        
      }
	
}
?>