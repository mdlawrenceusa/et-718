	<?php 

		if ($_SERVER['REQUEST_METHOD'] == "post")  {
			if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['comments']) ) {
				// Set all working variables
				$fname = trim($_POST['fname']);
				$lname = trim($_POST['lname']);
				$email = trim($_POST['email']);
				$cname = trim($_POST['cname']);
				$address1 = trim($_POST['adress1']);
				$address2 = trim($_POST['adress2']);
				$city = trim($_POST['city']);
				$state = trim($_POST['state']);
				$zipcode = trim($_POST['zip']);
				$comments =trim($_POST['comments']);
				$reason = $_POST['reason'];
				$radio = $_POST['radio'];

				// Check string lenths
				if (strlen($fname) > 0 && strlen($lname) > 0 && strlen($email) > 0 && strlen($comments) > 0) {
					
					// Check email validation
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						
							echo "Please enter a valid email";
					}else{
						// Send the email
						// Prepare to send the email
						$to = "jefrycruz88@gmail.com";
						$subject = 'A vistor has contacted you';
						$headers = 'From: Archives Mountain <no-reply@archivesmountain.com>' . "\r\n" .
					    'Reply-To: '. $email . "\r\n" .
					    'X-Mailer: PHP/' . phpversion();
					    $headers .= "MIME-Version: 1.0\r\n";
						$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

						$message = "Avistor can contacted you: \n" . 
									$fname . " \n" .
									$lname . " \n" .
									$email . " \n" .
									$cname . " \n" .
									$address1 . " \n" .
									$address2 . " \n" .
									$city . " \n" .
									$state . " \n" .
									$zipcide . " \n" .
									$comments . " \n" .
									"Reason:" . $reason .
									"Contact me back:" . $radio ;

							// Send the email
							$sendmail = mail($to, $subject, $message, $headers);
							echo "We will be in touch with you soon";
					}
				}
				else{
					echo "One or more requred fields are blank";
				}
			}
			else{
				echo "One or more requred fields are blank";
			}	
		}

	 ?>