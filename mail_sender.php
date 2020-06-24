<?php
						if(isset($_POST['btnRequest']))
						{
						$strName=$_POST['name'];
						$strEmail=$_POST['Email'];
						$strMobile=$_POST['Phoneno.'];
						$strState=$_POST['State'];
						$strCity=$_POST['City']; 
						$strMessagge=$_POST['messagge']; 
					

						
						$to   	= "narender007bisht@gmail.com,".$strEmail;
						$subject = "Request to call back";
						$message = "<html><body>";
						$message.= "<hr>Customer Details ,<br/><br/>";
						$message.="Name:- ".$strName."<br/><br/>";
						$message.="Email:- ".$strEmail."<br/><br/>";
						$message.="Mobile No:- ".$strMobile."<br/><br/>";
						$message.="State:- ".$strState."<br/><br/>";
						$message.="City:- ".$strCity."<br/><br/>";
						$message.="Messagge:- ".$strMessagge."<br/><br/>";
						$message.="Warm regards,<br/>";
						$message.="<b>Evernet Broadband</b><br/>";
						$message.="<p>PLEASE DO NOT REPLY TO THIS MAIL.";
						$message.="THIS IS AN AUTO GENERATED MAIL ";
						$message.= "</body></html>";
						$Header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						$Header.= 'From:narender007bisht@gmail.com' . "\r\n";
						ini_set('SMTP', "relay-hosting.secureserver.net");
						ini_set('smtp_port', "25");
						if(mail($to, $subject, $message, $Header))
						{
							echo"<script>alert('Thank you, We will contact You Soon'); window.location=('index-2.html');</script>";	
						}
						}
?>