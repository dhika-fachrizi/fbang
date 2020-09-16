<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Subscribe extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Visitor_model', 'visitor_model');
		$this->load->model('Subscribe_model', 'subscribe_model');
		$this->visitor_model->count_visitor();
		$this->load->helper('text');
		require APPPATH . 'libraries/phpmailer/src/Exception.php';
		require APPPATH . 'libraries/phpmailer/src/PHPMailer.php';
		require APPPATH . 'libraries/phpmailer/src/SMTP.php';
	}

	function index()
	{
		$this->load->library('form_validation');
		$url = $this->input->post('url', TRUE);
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Mohon masukkan input yang Valid!</div>');
			redirect($url);
		} else {
			$emailto = $this->input->post('email', TRUE);
			$checking_email = $this->subscribe_model->checking_email($emailto);
			if ($checking_email->num_rows() > 0) {
				$this->session->set_flashdata('message', '<div class="alert alert-info">Anda telah berlangganan.</div>');
				redirect($url);
			} else {
				$message = $this->load->view('email/welcome', '', true);
				$mail = new PHPMailer();


				// SMTP configuration
				$mail->isSMTP();
				$mail->Host     = 'mail.foodbang.co.id'; //sesuaikan sesuai nama domain hosting/server yang digunakan
				$mail->SMTPAuth = true;
				$mail->Username = 'muslimin@foodbang.co.id'; // user email
				$mail->Password = 'Superm@n123'; // password email
				$mail->SMTPSecure = 'ssl';
				$mail->Port     = 465;
				$mail->CONTENT_TYPE_TEXT_HTML = 'text/html';
				$mail->setFrom('muslimin@foodbang.co.id', ''); // user email
				// $mail->addReplyTo('xxx@hostdomain.com', ''); //user email

				// Add a recipient
				$mail->addAddress($emailto); //email tujuan pengiriman email

				// Email subject
				$mail->Subject = 'Welcome to Foodbang'; //subject email

				// Set email format to HTML
				$mail->isHTML(true);

				// Email body content
				$mailContent = $message; // isi email
				$mail->Body = $mailContent;
				if(!$mail->send()){
					echo 'Message could not be sent.';
					echo 'Mailer Error: ' . $mail->ErrorInfo;
				}else {
					$this->subscribe_model->save_subcribe($emailto);
					$this->session->set_flashdata('message', '<div class="alert alert-info">Terima kasih telah berlangganan.</div>');
					redirect($url);
				}
			}
		}
	}
}
