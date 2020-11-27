<?php
/*
Author : Andrean Yogatama
Description : This show you for example how to change format date

*/
use Carbon\Carbon;

class Example {
    public $startDate = "";
    //This function below show you howto convert 2020/11/17 to 2020-11-17
    private function getTanggal(){
        if($this->startDate == null){
            $tanggal = Carbon::now()
            ->format("Y-m-d");
        } else {
            $tanggal = date_format(
                date_create(
                    $this->startDate),"Y-m-d");
        }
        return $this->startDate = $tanggal;
    }
    //This function below show you howto convert 2020/11/17 to 2020-11-17
    /*
        $tglArray[0] = 2020
        $tglArray[1] = 11
        $tglArray[2] = 17
    */
    private function formatTanggal($originalDate)
    {

        $tglArray =  (explode("/",$originalDate));
        $tgl = $tglArray[0]."-".$tglArray[1]."-".$tglArray[2];
        return $tgl;
    }
    //This function below show you howto date format to 17/11/2020
    private function formatTanggalView($tgl)
    {
        return date('d/m/Y', strtotime($tgl));
    }
}
?>
