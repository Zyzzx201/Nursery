<?php
require_once("db.php");
class Parent{
    public $id;
    public $child_id;
    public $mother_id;
    public $father_id;
    public $fnum;
    public $ffbook;
    public $foccupation;
    public $fofficenum;
    public $mnum;
    public $mfbook;
    public $moccupation;
    public $mofficenum;
    public $mstatus_id;
    public $address_id;
    public $homenum;
    public $usualpickup;
    
	public function insert(){
    $DBObject = new DB();
    $sql = "INSERT INTO parent (id, child_id, mother_id, father_id, fnum, ffbook, foccupation, fofficenum, mnum, mfbook, moccupation, mofficenum, mstatus, addres_id, homenum, usualpickup) 
    VALUES ('".$this->id."','".$this->child_id."','".$this->mother_id."','".$this->father_id."','".$this->fnum."','".$this->ffbook."','".$this->foccupation."',
    '".$this->fofficenum."','".$this->mnum."','".$this->mfbook."','".$this->moccupation."','".$this->officenum."',
    '".$this->mofficenum."','".$this->mstatus_id."','".$this->address_id."','".$this->homenum."','".$this->usualpickup."')";
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