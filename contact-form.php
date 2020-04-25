<?php 
	if (isset($_POST[ 'submit' ])) {
		$name = $_POST["name"];
		$subject = $_POST["subject"];
		$mailFrom = $_POST["email"];
		$message = $_POST["message"];

		if(!preg_match("/^[A-Za-z .'-]+$/", $name)){
          $name_error = 'Invalid name';
        }
        if(!preg_match("/^[A-Za-z .'-]+$/", $subject)){
          $subject_error = 'Invalid subject';
        }
        if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $emailFrom)){
          $email_error = 'Invalid email';
        }
        if(strlen($message) === 0){
          $message_error = 'Your message should not be empty';
        }

		if (!isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)){	
			$mailTo = "muawiyahbackups@gmail.com";
			$header = "From: ".$mailFrom;
			$msg = "You have recieved a message from ".$name."\n\n".$message;

			if ( mail($mailTo, $subject, $msg, $header) ){
				header("Location: index.php?mailsend");
			} else {
				header("Location: index.php?error");
			}
		}
	}
?>
