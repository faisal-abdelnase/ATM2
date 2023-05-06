<?php

class Account {
    private $accountId;
    private $userSsn;
    private $accountType;


    public function setAccountId($accId){
        $this->accountId = $accId;
    }

    public function getAccountId(){
        return $this->accountId;
    }

    public function setUserSsn($userssn){
        $this->userSsn = $userssn;
    }

    public function getUserSsn(){
        return $this->userSsn;
    }

    public function setAccountType($accType){
        $this->accountType = $accType;
    }

    public function getAccountType(){
        return $this->accountType;
    }
}

?>