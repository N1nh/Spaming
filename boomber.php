<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';




/////////////CONFIG1/////////////
$count = 10;   //Set number mails
$target = 'putadark1@yahoo.com'; //Set target
$time=5; 	//Set sleep time
/////////////CONFIG1/////////////

$i=1;
$x=0;

echo 'Total Spam: '.$count.' emails.'."\r\n";
echo 'Sleep: '.$time."\r\n";
while($x <= $count) {
	
	$number = rand(1,100000);
	$sendername = 'HyperX'.$number;
	
	
	
try {
	$mail = new PHPMailer(true);
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    /////////////CONFIG2/////////////
												
	
	// SMTP1
	// $mail->Host       = 'smtp.mailgun.org';                     //Set the SMTP server to send through 
    // $namesender ='HyperX'.$number; 								//Set Sender name
	// $mail->Username   = 'postmaster@jotformm.me';                     //SMTP username 
    // $mail->Password   = '39aadf791ea5186b01e79bac821830ea-b0ed5083-e9b40396';   //SMTP password
    // $mail->Port       = 465; 
	//$emailsend ='order@jotformm.me';
	
	$mail->Host       = 'mail140.extendcp.co.uk';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@ecozi.co.zw';                     //SMTP username
    $mail->Password   = 'ecozi2022';                               //SMTP password
	$mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
	$emailsend ='info@ecozi.co.zw';
	
	
	// SMTP3
	$mail->Host       = 'mail49.vietnix.vn';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sales@apppolicyy.com';  //admin@appscreenlocker.org                   //SMTP username
    $mail->Password   = 'BZ-p7)P70nJ-';            //b3-dIq$2fkAD                   //SMTP password
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS
	$emailsend ='admin@appscreenlocker.org';
	/////////////CONFIG2/////////////
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
	// $mail->SMTPSecure = 'tls'; 
                                       //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

									   
									   
									   
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
    //Recipients
//==================================

			
		$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
		$file = file_get_contents('./spam.txt');
		$country=array_rand($countries,1);
		$out = str_replace(';;random country;;', $countries[$country], $file);
		//=============================
		$iprand = long2ip(rand(0, 4294967295));
		$out2 = str_replace(';;ip;;', $iprand, $out);
		//=============================
		$divice = array("iPhone 10", "iPhone 11", "iPhone 12", "iPhone 13", "Macbook Pro M1", "Macbook Air M1","iPhone 13 Mini", "iPad Pro 12.9in");
		$div=array_rand($divice,1);
		$out3 = str_replace(';;random devices;;', $divice[$div], $out2);
		
		$randomnumber = rand(0, 999999999999999);
		$out4 = str_replace(';;random-number;;', $randomnumber, $out3);
		
		//echo $out3;
				
		$subject = file_get_contents('./subject.txt');
		$randomnumber2 = rand(0, 999999999999999);
		$subject2 = str_replace(';;random-number;;', $randomnumber2, $subject);
		
		$country2=array_rand($countries,1);
		$lastsub = str_replace(';;random country;;', $countries[$country2], $subject2);
		
		
			$mail->setFrom($emailsend, $sendername	);
			$mail->addAddress($target);     //Add a recipient
			//$mail->addAddress('ellen@example.com');               //Name is optional
			$mail->addReplyTo($emailsend,$sendername);
			// $mail->SMTPDebug=0;
			//Content
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject =$lastsub;
			$mail->Body    = $out4;
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
			$mail->send();
			echo $x.'/'.$count.': '."\033[01;31mSpam done\033[0m \n";
			$i++;
			sleep($time);
			// echo "";
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
		
		$x++;
	
}

//==================================

