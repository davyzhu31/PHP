<?php
   if (isset($_POST['submit'])) {
        $name = $_POST['name'];
		$subject = $_POST['subject'];
		$file = $_FILES['file'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];
            
	
        $mailTo = "davyzhu@aol.com";
        $headers = "From: ".$mailFrom;
        $txt = "E-mail From: ".$name.".\n\n Message: ".".\n\n".$message;
			
        mail($mailTo, $subject, $txt, $headers);
        header("Location: indexsuccess.html");
    }else {
		header("Location: indexfail.html");
   }
?>