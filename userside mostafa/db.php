<?php
class DB{
  private $hostname = 'localhost';
  private $userName = 'root';
  private $Password = '';
  private $DBName = 'swe1';
  private static $instance;

  private $con;
public function connect(){
    $this->con = new mysqli($this->hostname,$this->userName,$this->Password,$this->DBName);

}

public function execute($sql){
  $result = $this->con->query($sql);
  return $result;
 /* if ($this->con->query($sql) === TRUE) {
   // echo "New record created successfully. Last inserted ID is: ";
} else {
    echo $this->con->error;
}*/
}

public function disconnect(){
  $this->con->close();
}

public function getID(){
  $ID = $this->con->insert_id;
  return $ID;
}



/* public static function singleton(){
      if (!isset(self::$instance)){
        self::$instance = new __CLASS__;
      }
      return self::$instance;
}

public static function getInstance(){
  if (null === $instance) {
    $instance = new static();
  }
  return $instance;
}

public static function getInstance()
    {
        if (!isset(static::$instance)) {
            static::$instance = new static;
        }
        return static::$instance;
    }

 */   
}
/*
$user1 = DB::singleton();
$user2 = DB::singleton();
$user3 = DB::singleton(); */


?>
