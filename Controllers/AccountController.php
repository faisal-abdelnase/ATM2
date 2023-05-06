<?php


require_once '../../Models/person.php';
require_once '../../Controllers/DBController.php';


class AccountController{
    protected $db;


    public function selectAllAccounts(){

        $this->db = new DBController;
        if($this->db->openConnection()){

            if(!isset($_SESSION["userpin"])){

                session_start();
            }

            $query = "select * from accounts where userSsn=" . $_SESSION["userSsn"];

            $result = $this->db->select($query);

            if($result === false){
                return false;

            }
            else{

                if(count($result) == 0){
                    return false;
                }

                else{

                    if(!isset($_SESSION["userpin"])){

                        session_start();
                    }

                    for($i = 0; $i < count($result) ; $i++){

                        $_SESSION["accId" . $i] = $result[$i]["accountId"];
                        $_SESSION["accType" . $i] = $result[$i]["accountType"];

                    }


                    return $result;

                }
            }

            
        }

        else{
            return false;
        }

    }
}

?>