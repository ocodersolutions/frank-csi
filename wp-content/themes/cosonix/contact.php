<?php
/**
 * Making the file compatible with theme variables
 */

$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );

require( $parse_uri[0] . 'wp-load.php' );

/** Theme variables compatibility complete**/

$error_name  = false;
$error_email = false;
$error_msg   = false;

if(isset($_POST['contact-submit'])) {
	header("Content-type: application/json");
	$name = '';
	$email = '';
	$message_subject = '';
	$message = '';
	$reciever_email = '';
	$return = array();

	if(trim($_POST['contact-name']) === '') {
		$error_name = true;
	} else{
		$name = htmlspecialchars(trim($_POST['contact-name']));
	}

	if(trim($_POST['contact-email']) === '') {
		$error_email = true;
	} else{
		$email = htmlspecialchars(trim($_POST['contact-email']));
	}

	if(trim($_POST['contact-msg']) === '') {
		$error_msg = true;
	} else{
		$message = htmlspecialchars(trim($_POST['contact-msg']));
	}

	$message_subject = htmlspecialchars(trim($_POST['contact-subject']));

	// Check if we have errors

	if(!$error_name && !$error_email && !$error_msg) {
		// Get the received email
		$reciever_email = get_option( 'admin_email' );

		$subject = __('You have been contacted by ', 'cosonix') . $name;

		$body = __('You have been contacted by ', 'cosonix') . $name . PHP_EOL . PHP_EOL;
		$body .= __('Their subject is: ', 'cosonix') . $message_subject . PHP_EOL . PHP_EOL;
		$body .= __('Their message is: ', 'cosonix') . PHP_EOL . PHP_EOL;
		$body .= $message . PHP_EOL . PHP_EOL;
		$body .= __('You can contact ', 'cosonix') . $name;
		$body .= __(' via email at ', 'cosonix') . $email;
		$body .= PHP_EOL . PHP_EOL;

		$headers = "From $email ". PHP_EOL;
		$headers .= "Reply-To: $email". PHP_EOL;
		$headers .= "MIME-Version: 1.0". PHP_EOL;
		$headers .= "Content-type: text/plain; charset=utf-8". PHP_EOL;
		$headers .= "Content-Transfer-Encoding: quoted-printable". PHP_EOL;

		if(wp_mail($reciever_email, $subject, $body, $headers)) {
			$return['status'] = 'success';
			$return['msg'] = __('Thank you, your email has been sent.', 'cosonix');
		} else{
			$return['status'] = 'error';
			$return['msg'] = __('Error while sending a message!', 'cosonix');
		}

	}else{
		// Return errors
		$return['status'] = 'error';
		$return['msg'] = __('Please, fill in the required fields!', 'cosonix');
	}

	echo json_encode($return);
	die();
}
?>