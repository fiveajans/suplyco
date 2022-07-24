<?php

namespace App\Controllers\Client;

use Core\Controller;
use Symfony\Component\HttpFoundation\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Career extends Controller
{
	public function index()
	{
		return $this->view('client.pages.career');
	}

	public function joinUs(Request $request)
	{
		$message = [];
		$old = [];

		if ($request->getMethod() == 'POST')
		{
			$old = $this->validator->data();

			$rules = [
				'required' => [
					'name',
					'identity',
					'birthday',
					'email',
					'phone',
					'phone_2',
					'address',
					'gra_school',
					'gra_department',
					'gpa',
					'why_work'
				],
				'numeric' => [
					'identity',
					'phone',
					'phone_2'
				],
				'email' => 'email',
				'accepted' => 'law'
			];

			$this->validator->rules($rules);

			$file = permalink($old['name']) . '_' . hashid();

			$upload = upload('cv')->allowed(['application/pdf']);

			if ($message = $upload->error())
			{
                $message = [
					'class' => 'danger',
					'text' => 'The resume should be in <b>PDF</b> format.'
				];
            }
			else
			{
				if ($this->validator->validate())
				{
					$upload->rename($file)->to('uploads/files');

					$name = $old['name'];
					$identity = $old['identity'];
					$birthday = $old['birthday'];
					$email = $old['email'];
					$phone = $old['phone'];
					$phone_2 = $old['phone_2'];
					$address = $old['address'];
					$gra_school = $old['gra_school'];
					$gra_department = $old['gra_department'];
					$gpa = $old['gpa'];
					$certificates = $old['certificates'];
					$job_exp = $old['job_exp'];
					$about = $old['about'];
					$perspective = $old['perspective'];
					$why_work = $old['why_work'];
					$reference = $old['reference'];
					$linkedin = $old['linkedin'];
					$comment = $old['comment'];
					$cv = $file . '.pdf';

					$sql = "INSERT INTO applications SET
					name = ?,
					identity = ?,
					birthday = ?,
					email = ?,
					phone = ?,
					phone_2 = ?,
					address = ?,
					gra_school = ?,
					gra_department = ?,
					gpa = ?,
					certificates = ?,
					job_exp = ?,
					about = ?,
					perspective = ?,
					why_work = ?,
					reference = ?,
					linkedin = ?,
					comment = ?,
					cv = ?";

					$query = $this->db->prepare($sql);

					$insert = $query->execute([
						$name,
						$identity,
						$birthday,
						$email,
						$phone,
						$phone_2,
						$address,
						$gra_school,
						$gra_department,
						$gpa,
						$certificates,
						$job_exp,
						$about,
						$perspective,
						$why_work,
						$reference,
						$linkedin,
						$comment,
						$cv
					]);

					if ($insert)
					{
						$mail = new PHPMailer(true);

						try
						{
							$mail->SMTPDebug = SMTP::DEBUG_SERVER;
							$mail->isSMTP();
							$mail->Host = 'smtp.gmail.com';
							$mail->SMTPAuth = true;
							$mail->Username = 'noreply@suplyco.com';
							$mail->Password = '1q2q2w3w';
							$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
							$mail->Port = 465;

							$mail->setFrom('noreply@suplyco.com', 'Suplyco');
							$mail->addAddress('info@suplyco.com');

							$mail->addAttachment(upload_url('files/' . $file . '.pdf'));

							$mail->isHTML(true);
							$mail->Subject = 'Suplyco - Career';
							$mail->Body = '<b>From:</b> ' . $email . '<br>' .
							'<b>Name:</b> '. $name . '<br>' .
							'<b>Identity:</b>' . $identity . '<br>' .
							'<b>Birthday:</b>' . $birthday . '<br>' .
							'<b>Phone:</b>' . $phone . '<br>' .
							'<b>Phone 2:</b>' . $phone_2 . '<br>' .
							'<b>Address:</b>' . $address . '<br>' .
							'<b>GRA School:</b>' . $gra_school . '<br>' .
							'<b>GRA Department:</b>' . $gra_department . '<br>' .
							'<b>GPA:</b>' . $gpa . '<br>' .
							'<b>Certificates:</b>' . $certificates . '<br>' .
							'<b>Job Exp:</b>' . $job_exp . '<br>' .
							'<b>Message:</b> ' . $comment;
							$mail->AltBody = 'Provider to Suplyco';

							$mail->send();
							return 'success';
						}
						catch (Exception $e)
						{
							return 'mail';
						}

						$message = [
							'class' => 'success',
							'text' => 'Your application has reached us.'
						];
					}
					else
					{
						$message = [
							'class' => 'danger',
							'text' => 'An error occurred and the application could not be sent.'
						];
					}					
				}
				else
				{
					$message = [
						'class' => 'warning',
						'text' => 'Please fill in all fields. Invalid characters will not be accepted.'
					];
				}
			}
		}

		$data = [
			'message' => $message,
			'old' => $old
		];

		return $this->view('client.pages.join-us', $data);
	}
}
