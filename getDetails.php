<?php
session_start();
include('config.php');
 $plans = $file; 

$masterDateList = [];
if($plans->datelists){
    foreach($plans->datelists->date as $key => $masterDateArr){
        $masterDateList[] = $masterDateArr;
    }
}
$masterDateList = json_decode(json_encode(($masterDateList), true), JSON_PRETTY_PRINT);

foreach ($masterDateList as $mdls) {
    $MDL[] = $mdls[0];
}
$MDL = array_unique($MDL);
if(count($_POST) > 0){ 
     $selectedDate = date('Y-m-d', strtotime($_POST['tdate'] . ' +1 day'));
    foreach ($MDL as $key => $date) {
        if($date <= $_POST['fdate'] || $selectedDate  > $date){}else{
            unset($MDL[$key]);
        }
    }
}

?>