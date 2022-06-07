<?php
require_once 'DbConnection.php';
class College
{
 private $id;
 private $name;
 private $phone;
 private $email;
 //Setter & Getter
 public function setId($id)
 {
 $this->id = $id;
 }
 public function getId()
 {
 return $this->id;
 }
 public function setName($name)
 {
 $this->name = $name;
 }
public function getName()
 {
 return $this->name;
 }
 public function setPhone($phone)
 {
 $this->phone = $phone;
 }
 public function getPhone()
 {
 return $this->phone;
 }
 public function setEmail($email)
 $this->email=$email;
}
public function getEmail()
 {
 return $this->email;
 }
 //Methods
 public function register($college)
 {
 $sql = "Insert into registrar7.college(name, phone) values(:name, :phone, :email)";
 $dbConn = new DbConnection();
 $conn = $dbConn->connect();
 $query = $conn->prepare($sql);
 $query->bindValue(':name', $college->getName());
 $query->bindValue(':phone', $college->getPhone());
 $query->bindValue(':email', $college->getEmail());
 $query->execute();
 $is_success = $conn->lastInsertId();
 return $is_success;
 }
}
