<?php
require_once("db.php");
class main{
public $id;
public $utype;
public $fname;
public $lname;
public $dob;
public $ssn;


public function insert(){

    $DBObject = new DB();
    $sql = "INSERT INTO main (utype,fname,lname,dob,ssn) 
    VALUES ('".$this->utype."','".$this->fname."','".$this->lname."','".$this->dob."','".$this->ssn."')";
    $DBObject->connect();
     echo $DBObject->execute($sql);
     $last_id = $DBObject->getID();

    $DBObject->disconnect();
    return $last_id;
}
public function select(){  
  $DBObject = new DB();
  $sql = "SELECT * FROM main WHERE fname LIKE '%".$this->fname."%'  AND lname LIKE '%".$this->lname."%' ";
  $DBObject->connect();
 $result =$DBObject->execute($sql);

while ($row = mysqli_fetch_array($result)){
     echo $row['id'];
 }
 $DBObject->disconnect();
 }

public function delete(){ 
  $DBObject = new DB();
  $sql = "Delete FROM main WHERE main.id = '".$id."'";
  $DBObject->connect();
  $DBObject->exceute ($sql);
  $DBObject->disconnect();
  }
public function update(){ 

  }

}
?>