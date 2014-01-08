	<?php 
	
	if(isset($_POST["recaptcha_challenge_field"]) && isset( $_POST["recaptcha_response_field"]))
	{	
		require_once(MODPATH.'recaptcha/classes/recaptcha.php');
	  	$privatekey = "6Leam-wSAAAAAESI2kuaEdEz0eHCujfXkFkTFPlv";
	 	$resp = recaptcha_check_answer ($privatekey,
	                                $_SERVER["REMOTE_ADDR"],
	                                $_POST["recaptcha_challenge_field"],
	                                $_POST["recaptcha_response_field"]);
	
	  	if (!$resp->is_valid) {
	    	// What happens when the CAPTCHA was entered incorrectly
	    	die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
	         "(reCAPTCHA said: " . $resp->error . ")");
	  	} else {
	 		// Your code here to handle a successful verification
    		$gameModel = new Model_Game();
			$gameModel->setCaptcha();
			header("Location: ". Session::instance()->get('redir', 'home'));
			die;
 	 	}	
	
	}

//	echo "Invalid code entered, please try again."
	
	?>


	<form method="post" action="#">
        <?php
		require_once(MODPATH.'recaptcha/classes/recaptcha.php');
		$publickey = "6Leam-wSAAAAANPmREhGJHlE8XJlE7U6e9edytkC"; // you got this from the signup page
		echo recaptcha_get_html($publickey);
        ?>
        <input type="submit" />
      </form>

<?php 
		
		
		