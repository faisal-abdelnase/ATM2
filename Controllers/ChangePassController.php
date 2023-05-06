<?php 


require_once '../../Models/person.php';
require_once '../../Controllers/DBController.php';


class ChangePINController{

    protected $db;

    public function changePassword(Person $person){

    $this->db = new DBController;
        if($this->db->openConnection()){

            $query = "update users set password=" . $person->getpassword() . " where ssn=".  $_SESSION["userSsn"];

            if( $this->db->update($query)){
                return true;
            }

            else{
                return false;
            }

        }
        else{
            // echo "Error in Database Connection";
            return false;
            }
    }
}?>