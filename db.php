<?php

class Database {
    private $server = "localhost";
    private $username = "PHPAJAXOOP";
    private $database = "PHPAJAXOOP"; 
    private $pass = "PHPAJAXOOP";
    public $conn;

    public function __construct() {
        try {
            $dsn = "mysql:host=" . $this->server . ";dbname=" . $this->database;
            $this->conn = new PDO($dsn, $this->username, $this->pass);
        } 
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    // Data Insert
    public function insert($fname,$lname,$email,$phone){
      $sql="INSERT INTO users (first_name, last_name,email,phone) VALUES(:fname,:lname,:email,:phone)";
      $stmt=$this->conn->prepare($sql);
      $stmt->execute(['fname'=>$fname,'lname'=>$lname,'email'=>$email,'phone'=>$phone]);
      return true;
    }

    // Display Data
    public function read(){
      $data=array();
      $sql="SELECT * FROM users";
      $stmt=$this->conn->prepare($sql);
      $stmt->execute();
      $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
      foreach($result as $row){
        $data[]=$row;
      }
      return $data;
    }

    // Get user by id.
    public function getUserById($id){
      $sql="SELECT * FROM users WHERE id=:id";
      $stmt=$this->conn->prepare($sql);
      $stmt->execute(['id'=>$id]);
      $result= $stmt->fetch(PDO::FETCH_ASSOC);
      return $result;
    }

    //Update data
    public function updateUser($id,$fname,$lname,$email,$phone){
      $sql="UPDATE `users` SET `first_name`=':fname',`last_name`=':lname',`email`=':email',`phone`=':phone' WHERE id=:id";
      $stmt=$this->conn->prepare($sql);
      $stmt->execute(['fname'=>$fname,'lname'=>$lname, 'email'=>$email, 'phone'=>$phone ]);
      return true;      
    }

    //Delete
    public function delete($id){
      $sql="DELETE FROM users WHERE id=:id";
      $stmt=$this->conn->prepare($sql);
      $stmt->execute(['id'=>$id]);
      return true;
    }

    // Total row count 
    public function rowCount(){
      $sql="SELECT * FROM users";
      $stmt=$this->conn->prepare($sql);
      $stmt->execute();
      $r_count = $stmt->rowCount();
      return $r_count;
    }
}

?>
