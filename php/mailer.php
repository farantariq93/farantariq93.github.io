<?php
/*-----------------------------------------------
	# Variables
	---------------------------------------------*/

	// var_dump($_POST);
	// exit();

$name       = $_POST['name'];
$email      = $_POST['email'];
$phone    = isset($_POST['phone']) && !empty($_POST['phone']) ? $_POST['phone'] : '';
$company    = $_POST['company'];
$employees    = $_POST['employees'];
$subject = 'A message is received from Wage Parity Site';
$toMail     = 'Faran Tariq <farantariq93@gmail.com>'; // Your name & mail address here example 'Your Name <contact@domain.com>'.

/*-----------------------------------------------
	# Error Reporting need first
	---------------------------------------------*/
$error      = false;
$msg        = '';
$body       = '';

// Check Name
if (empty($name)) {
	$error = true;
	$msg   .= '<strong>Required:</strong> Please enter your name.';
	$msg   .= '<br>';
} else {
	$body  .= '<strong>Name:</strong> ' . $name;
	$body  .= '<br><br>';
}

// Check Email
if (empty($email)) {
	$error = true;
	$msg   .= '<strong>Required:</strong> Please enter your valid email address.';
	$msg   .= '<br>';
} else {
	$body  .= '<strong>Email:</strong> ' . $email;
	$body  .= '<br><br>';
}

// Check Phone
if (empty($phone)) {
	$error = true;
	$msg   .= '<strong>Required:</strong> Please enter valid phone number.';
	$msg   .= '<br>';
} else {
	$body  .= '<strong>Phone:</strong> ' . $phone;
	$body  .= '<br><br>';
}

// Check Company
if (!empty($company)) {
	// Body company
	$body  .= '<strong>Company Name:</strong> ' . $company;
	$body  .= '<br><br>';
}

// Check Employees
if (!empty($employees)) {
	// Body employees
	$body  .= '<strong>No of Employees:</strong> ' . $employees;
	$body  .= '<br><br>';
}

/*-----------------------------------------------
	# Prepare send mail
	---------------------------------------------*/
if ($error == true) {
	$msg    .= '<strong>Error:</strong> Please fill form with above info requirement.';
} else {
	$body   .= $_SERVER['HTTP_REFERER'] ? '<br><br><br>This form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';
	$error   = false;
	$msg    .= '<strong>Success:</strong> Your message has been send.';

	// Mail Headers
	$headers   = array();
	$headers[] = "MIME-Version: 1.0";
	$headers[] = "Content-type: text/html; charset=iso-8859-1";
	$headers[] = "From: {$name} <{$email}>";
	$headers[] = "Reply-To: {$name} <{$email}>";
	$headers[] = "Subject: A message is received from Wage Parity Site";
	$headers[] = "X-Mailer: PHP/".phpversion();

	mail($toMail, $subject, $body, implode("\r\n", $headers));
}
// Make as json obj
$dataReturn = array(
	'error'   => $error,
	'message'   => $msg,
	'data'  => array(
		'name' => $name,
		'email' => $email,
		'phone' => $phone,
		'company' => $company,
		'employees' => $employees,
	)
);
header('Content-type: application/json');
echo json_encode($dataReturn);