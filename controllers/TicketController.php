<?php

include("../models/TicketService.php");

// Page Controller pattern
if ($_GET['buyticket']==1) {
	$date = $_POST['date'];
	$time = $_POST['time'];
	
	// note how all business or domain logic is left to the model part of MVC
	// thus the responsibility of the controller is reduced to contact the appropriate model object
	// and to select the appropriate view to render data
	if (TicketService::buyTicket($date, $time, $visa)) {
		header("Location: ../views/ConfirmationView.php?date=$date&time=$time");
	} else {
		header('Location: ../views/ErrorView.php');
	}
}

?>