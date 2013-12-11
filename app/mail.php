<?php

CONST EMAIL_TO = 'rodrigo@crab.uy';

if (isset($_POST['email'], $_POST['name'], $_POST['lastname'], $_POST['subject'], $_POST['message']))
{
	$email = $_POST['email'];
	$name  = $_POST['name'];
	$phone = (isset($_POST['phone'])) ? $_POST['phone'] : '';
	$lastname = $_POST['lastname'];
	$message  = $_POST['message'];
	$subject  = $_POST['subject'];

	$message .= '\n\n';
	$message .= 'Nombre: '.$name;
	$message .= 'Apellido: '.$lastname;
	$message .= 'Número: '.$phone;
	$message .= 'Asunto: '.$subject;
	$message .= 'Email: '.$email;

	$headers = 'From: '.$email;
	mail(EMAIL_TO, $subject, $message, $headers);

	header('Location: index.html?success');
}
else
{
	header('Location: index.html?error');
}
