<?php

class Report{

    private $reportNumber;
    private $adminId;
    private $numOfWithdraw;
    private $numOfTransfer;
    private $numOfDeposit;
    private $reportDate;
    public function getReportNumber() {
         return $this->reportNumber;
     }

     public function getAdminId() {
         return $this->adminId;
     }

     public function getNumOfWithdraw() {
         return $this->numOfWithdraw;
     }

     public function getNumOfTransfer() {
         return $this->numOfTransfer;
     }

     public function getNumOfDeposit() {
         return $this->numOfDeposit;
     }

     public function getReportDate() {
         return $this->reportDate;
     }

     public function setReportNumber($reportNumber): void {
         $this->reportNumber = $reportNumber;
     }

     public function setAdminId($adminId): void {
         $this->adminId = $adminId;
     }

     public function setNumOfWithdraw($numOfWithdraw): void {
         $this->numOfWithdraw = $numOfWithdraw;
     }

     public function setNumOfTransfer($numOfTransfer): void {
         $this->numOfTransfer = $numOfTransfer;
     }

     public function setNumOfDeposit($numOfDeposit): void {
         $this->numOfDeposit = $numOfDeposit;
     }

     public function setReportDate($reportDate): void {
         $this->reportDate = $reportDate;
     }
     




}
?>