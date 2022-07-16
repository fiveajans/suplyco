<?php

namespace App\Controllers\Api;

use Core\Controller;
use Symfony\Component\HttpFoundation\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Messages extends Controller
{
	public function send(Request $request)
	{
		if ($request->getMethod() == 'POST')
		{
			$this->validator->rule('required', [
				'name',
				'email',
				'message'
			]);

			if ($this->validator->validate())
			{
				$data = $this->validator->data();

				$name = $data['name'];
				$email = $data['email'];
				$message = $data['message'];

				$sql = "INSERT INTO messages SET
				name = ?,
				email = ?,
				message = ?";

				$query = $this->db->prepare($sql);

				$insert = $query->execute([
					$name,
					$email,
					$message
				]);

				if ($insert)
				{
					$mail = new PHPMailer(true);

					try
					{
						$mail->SMTPDebug = SMTP::DEBUG_SERVER;
						$mail->isSMTP();
						$mail->Host = 'smtp.yandex.com.tr';
						$mail->SMTPAuth = true;
						$mail->Username = 'eminarifpirinc@fiveajans.com';
						$mail->Password = 'hshbEA2005!';
						$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
						$mail->Port = 465;

						$mail->setFrom('eminarifpirinc@fiveajans.com', 'Suplyco');
						$mail->addAddress('eminarifpirinc@fiveajans.com');

						$mail->isHTML(true);
						$mail->Subject = 'Suplyco - Contact Form';
						$mail->Body = '<b>From:</b> ' . $email . '<br>' . '<b>Name:</b> ' . $name . '<br>' . '<b>Message:</b> ' . $message;
						$mail->AltBody = 'Provider to Suplyco';

						$mail->send();
						return 'success';
					}
					catch (Exception $e)
					{
						return 'mail';
					}
				}
				else
				{
					return 'error';
				}				
			}
			else
			{
				return 'validator';
			}
		}
	}
}
