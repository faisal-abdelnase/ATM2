<?php 

class Person {
   private $PIN ;
   private $password;
   private $id;
   private $ssn;
   private $address;
   private $role;

   public function getPIN(){
      return $this->PIN ;
   }
   public function getpassword(){
      return $this->password ;
   }

   public function setPIN ($PIN){
      $this->PIN=$PIN;
   }

   public function setpassword ($password){
      $this->password=$password;
   }

   public function setid($id){
      $this->id;
   }

   public function getid(){
      return $this->id;
   }

   public function setssn($ssn){
      $this->ssn;
   }

   public function getssn(){
      return $this->ssn;
   }

   public function setaddress($address){
      $this->address;
   }

   public function getaddress(){
      return $this->address;
   }

   public function setrole($role){
      $this->role;
   }

   public function getrole(){
      return $this->role;
   }


}



?>