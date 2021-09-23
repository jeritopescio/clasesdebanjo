<?php

if (isset($_POST['enviar'])) {
	if (!empty($_POST['name']) && !empty($_POST['msg']) && !empty($_POST['email'])){

		$name = $_POST['name'];
		$msg = $_POST['msg']; 
		$email = $_POST['email'];

		$mailTo = "jerito.pescio@gmail.com";

		$header = "From: ".$email. "\r\n";
		$header = "Reply-To: jerito.pescio@gmail.com". "\r\n";
		$header = "X-Mailer: PHP/". phpversion();
		mail($email,$msg,$header);
		if ($email) {
			echo "<h4> ¡Mail enviado exitosamente! </h4>";
		}
	}
}