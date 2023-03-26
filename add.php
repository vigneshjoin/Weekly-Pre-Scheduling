<?php
session_start();

include('config.php');
	
$plans = $file;

	if(isset($_POST['add'])){

		$status = true;
		foreach($plans->plan as $lists){
		    if($lists->emp_name == $_POST['emp_name']){
		        $dateLists = $lists->date_lists->addChild('date',$_POST['date']);
		        $dateLists->addAttribute('hours',$_POST['hours']);
		        $status = false;
		        $dateset = $plans->datelists->addChild('date',$_POST['date']);
		        break;
	        }
		        
		}

		if($status){

		    $plan = $plans->addChild('plan');

		    	if($plans->datelists){
		    		$plans->datelists->addChild('date', $_POST['date']);
		    	}else{
		    		$dateset = $plans->addChild('datelists');
	     			$dateset->addChild('date', $_POST['date']);
		    	}
	     			
		    $plan->addChild('emp_name',$_POST['emp_name']);
		    $plan->addChild('week_name',$_POST['week_name']);
		    // $plan->addChild('team_name',$_POST['team_name']);

		    $array = $plan->addChild('date_lists');
		    $a1 = $array->addChild('date',$_POST['date']);
		    $a1->addAttribute('hours',$_POST['hours']);
		}


		// Save to file
		$dom = new DomDocument();
		$dom->preserveWhiteSpace = false;
		$dom->formatOutput = true;
		$dom->loadXML($plans->asXML());
		$dom->save($filePath);

		$_SESSION['message'] = 'Added successfully';
		header('location: index.php');
	}
	else{
		$_SESSION['message'] = 'Not added';
		header('location: index.php');
	}

?>