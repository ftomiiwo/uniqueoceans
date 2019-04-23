
<?php 

	if(isset($_POST)) {
	    $visitor_name = "";
	    $visitor_email = "";
	    $email_title = ""; 
	    $visitor_message = "";
	    if(isset($_POST['visitor_name'])) {
	        $visitor_name = $_POST['visitor_name'];
	    }
	     
	    if(isset($_POST['visitor_email'])) {
	        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
	        $visitor_email = $visitor_email;
	    }
	     
	    if(isset($_POST['email_title'])) {
	        $email_title = $_POST['email_title'];
	    } 
	     
	    if(isset($_POST['visitor_message'])) {
	        $visitor_message = htmlspecialchars($_POST['visitor_message']);
	    } 
        $recipient = "info@uniqueoceans.com"; 
	    $headers  = 'MIME-Version: 1.0' . "\r\n"
	    .'Content-type: text/html; charset=utf-8' . "\r\n"
	    .'From: ' . $visitor_email . "\r\n";

	    if(mail($recipient, $email_title, $visitor_message, $headers)) {
	        $message = "<p>Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.</p>";
	    } else {
	        $message =  '<p>We are sorry but the email did not go through.</p>';
	    }

	    $review_url = 'h' . $_SERVER['HTTP_HOST'] . '/contacts.php?status=' . $message;
		header('Location: ' . $review_url);
     
	} else {
	    echo '<p>Something went wrong</p>';
	}
 
?>