<?php
		$nom = @$_POST['nom'];
		$mail = @$_POST['mail'];
		$tarif = @$_POST['tarif'];
		$chose = @$_POST['chose'];

		$subject = 'Contact RL consulting ';
		$message = "Bonjour, \r\n".$chose ."\r\n\n Cordialement,\n\n". $nom;

		$headers = "From: ". $mail. " \r\n Reply-To: ". $mail. "\r\n X-Mailer: PHP/" . phpversion();


		if(mail("ny.andriambomalala@gmail.com", $subject,$message,$headers)){
			echo 'Votre message a bien été envoyé ';
		}
		else{
			echo "Votre message n'a pas pu être envoyé";
		}
?>