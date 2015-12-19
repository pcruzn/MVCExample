<?php

include("../models/TicketService.php");

// Page Controller pattern

// here we are asuming the TicketController file being "the class"
// other implementations may include one or more classes in the controller file with specific methods,
// but for simplicity, in this example the controller file is also "the controller class"
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