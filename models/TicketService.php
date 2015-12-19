<?php

include("PaymentService.php");

// Transaction Script pattern
class TicketService {
	
	public static function buyTicket($date, $time, $visa) {
		// call payment service
		
		// confirm ticket availability and call make payment
		if (TicketService::checkAvailability($date, $time) && PaymentService::makePayment($visa)) 
			return true;
		else
			return false;
	}
	
	public static function checkAvailability($date, $time) {
		// check in some way if there is availability for the specified date and time
		// then return true or false according to availability
		
		// let's suppose for day 2/1/16 at time 16:00 there is no availability...
		if ($date == "02-01-2016" && $time == "16:00") 
			return false;
		else
			return true;
	}
	
}

?>