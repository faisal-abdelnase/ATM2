
<?php

class Deposit extends Transaction{

    private $id;
    private $amount;
    public function getId() {
        return $this->id;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setAmount($amount): void {
        $this->amount = $amount;
    }
    

}



?>