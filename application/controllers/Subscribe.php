<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Subscribe extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Visitor_model', 'visitor_model');
		$this->load->model('Subscribe_model', 'subscribe_model');
		$this->visitor_model->count_visitor();
		$this->load->helper('text');
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
			$email = $this->input->post('email', TRUE);
			$checking_email = $this->subscribe_model->checking_email($email);
			if ($checking_email->num_rows() > 0) {
				$this->session->set_flashdata('message', '<div class="alert alert-info">Anda telah berlangganan.</div>');
				redirect($url);
			} else {
				$message = $this->load->view('email/newsupdate','', true);
				// $config['mailtype'] = 'html';
				// $config['protocol'] = 'smtp';
				// $config['smtp_host'] = 'smtp.mailtrap.io';
				// $config['smtp_user'] = '3b599c5fbb1bb2';
				// $config['smtp_pass'] = 'f0cdd5ebfefb36';
				// $config['smtp_port'] = 2525;
				// $config['newline'] = "\r\n";
				$config['mailtype'] = 'html';
				$config['protocol'] = 'smtp';
				$config['smtp_host'] = 'smtp.yandex.com';
				$config['smtp_user'] = 'limin.mus@yandex.com';
				$config['smtp_pass'] = 'Superm@n123';
				$config['smtp_port'] = 465;
				$config['charset'] = "utf-8";
				$config['SMTPSecure '] = "ssl";
				$config['SMTPAuth'] = true;
				

				$this->load->library('email', $config);

				$this->email->from('no-reply@foodbang.com');
				$this->email->to($email);
				$this->email->subject('Welcome to Foodbang');
				$this->email->message($message);
				if ($this->email->send()) {
					$this->subscribe_model->save_subcribe($email);
					$this->session->set_flashdata('message', '<div class="alert alert-info">Terima kasih telah berlangganan.</div>');
					redirect($url);
				} else {
					var_dump($this->email->print_debugger());
				}
			}
		}
	}
}
