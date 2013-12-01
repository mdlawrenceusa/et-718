<!-- FOR PHP SCRIPT -->
	
<!-- END OF PHP SCRIPT -->


<!-- HEADER FILE -->
<?php include('inc/header.php'); ?>

		<!-- Search Wrapper -->
			<?php include('inc/search-wrapper.php') ?>
				
		<!-- Main -->
			<div id="main-wrapper">
				<div class="5grid-layout">
					<div class="row">
						<div class="8u mobileUI-main-content">
							
							<!-- Content -->
								<div id="content">
								
									<!-- Article -->
										<article class="featured">
											<header>
												<h2>Contact us</h2>
											</header>
											<img src="images/facility2.jpg" alt="facility" style="float:left; padding-right: 15px;">
											<p>Postal Address<br>PO Box 211<br>Hawleyville, CT 06440<br>
												<a href="http://www.mapquest.com/maps?address=64+Barnabas+Rd&city=Newtown&state=CT&zipcode=06470&redirect=true" target="_blank">Click here for driving directions</a></p>
											<br>	
											<hr>

											<p class="important">
												If you need immediate assistance, please call Archives Mountain at 866-996-9111 and notify operator that it is an EMERGENCY for customer service support.
											</p>
											<br>
											<p>Items in <span class="important">red</span> are required fields.</p>

											<div class="form-container">
												<div class="postResult">
													
													<?php 
														// The form Script
														if ($_SERVER['REQUEST_METHOD'] == "POST")  {
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
																		$to = "p.farrell@archivesmountain.com";
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
																			echo "<p class='success'>" . "We will be in touch with you soon" . "</p>";
																	}
																}
																else{
																	echo "<p class='error'>" . "One or more requred fields are blank" . "</p>";
																}
															}
															else{
																echo  "<p class='error'>" . "One or more requred fields are blank" . "</p>";
															}	
														}
													 ?>

												</div>
											<form  action="contact.php" method="post" id="POSTFORM"> 
												<table>
													<tr>
														<td><span class="important">First Name:</span><input type="text" name="fname"></td>
														<td><span class="important">Last Name:</span><input type="text" name="lname"></td>
													</tr>
													<tr>
														<td><span class="important">Email:</span><input type="text" name="email"></td>
														<td><span>Phone</span><input type="text" name="Phone"></td>
													</tr>
													<tr>
														<td><span>Comany Name:</span><input type="text" name="cname"></td>
													</tr>
													<tr>
														<td><span>Address 1:</span><input type="text" name="adress1"></td>
														<td><span>Address 2:</span><input type="text" name="address2"></td>
													</tr>
													<tr>
														<td><span>City:</span><input type="text" name="city"></td>
														<td><span>Sate/Province</span><input type="text" name="state"></td>
													</tr>
													<tr>
														<td><span>Zip/Postal Code:</span><input type="text" name="zip"></td>
													</tr>
													<tr>
														<td>
															<span>Reason For Contacting:</span>
															<select name="reason">
																<option>Please Select One</option>
																<option value="question/comment">Question/Comment</option>
																<option value="disaster recovery planning">Disaster Recovery Planning</option>
																<option value="Remote Data Backup">Remote Data Backup</option>
																<option value="Other">Other</option>
															</select>
														</td>
													</tr>
													<tr>
														<td>
															<span class="important" style="float: left">Question/Comment:</span>
															<textarea name="comments">
															</textarea>
														</td>
													</tr>
													<tr>
														<td>
															<span>Archives Mountain may contact me via e-mail:</span><br>
															<label>Yes</label><input type="radio" name="radio" value="yes">
															<label>No</label><input type="radio" name="radio" value="no">
														</td>
													</tr>
													<tr>
														<input type='hidden' name='submit' />
														<td>
															<input type="submit" value="Submit">
														</td>
													</tr>
												</table>
												
											</form>

											</div>
											
										</article>
							
								</div>

						</div>
						<div class="4u">
							<div class="right-sidebar">

								<!-- Sidebar -->
								<?php include('inc/right-side1.php'); ?>
							
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- FOOTER FILE -->
		<?php include('inc/footer.php'); ?>