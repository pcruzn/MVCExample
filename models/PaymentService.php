<?php

// Transaction Script pattern
class PaymentService {
	
	public static function makePayment($visa) {
		// contact payment system and try to make payment with visa number $visa
		// for this example, we do not care about the security code
		
		// let's supose payment was accepted (do not care here in this example if visa number is valid or not)...
		return true;
	}
	
}

?>