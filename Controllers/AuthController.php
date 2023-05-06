<?php

require_once '../../Models/person.php';
require_once '../../Controllers/DBController.php';


class AuthController{

    protected $db;

    public function enter(Person $person){

    $this->db = new DBController;
        if($this->db->openConnection()){

            $query = "select * from users where pin=". $person->getPIN();

            $result = $this->db->select($query);

            if($result === false){

                // echo "Error in query";
                return false;

            }

            else{

                if(count($result) == 0){

                    session_start();
                    $_SESSION["errMsg"] = "You have entered wrong PIN";
                    return false;
                }

                else{

                    session_start();
                    $_SESSION["userRole"] = $result[0]["role"];
                    $_SESSION["userpin"] = $result[0]["pin"];
                    $_SESSION["userpassword"] = $result[0]["password"];
                    $_SESSION["userSsn"] = $result[0]["ssn"];

                    return true;

                }
            }

        }

        else{
            // echo "Error in Database Connection";
            return false;
        }
    }
}
?>