<?php
class Cron extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Visitor_model', 'visitor_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
        error_reporting(0);
    }

    function index()
    {
        $config['mailtype'] = 'html';
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.mailtrap.io';
        $config['smtp_user'] = '3b599c5fbb1bb2';
        $config['smtp_pass'] = 'f0cdd5ebfefb36';
        $config['smtp_port'] = 2525;
        $config['newline'] = "\r\n";

        $this->load->library('email', $config);

        $this->email->from('no-reply@bahasaweb.com', 'Sistem Bahasaweb.com');
        $this->email->to('test-cron@gmail.com');
        $this->email->subject('Contoh Kirim Email Dengan Codeigniter');
        $this->email->message('test');
        if ($this->email->send()) {
            var_dump("success");
        } else {
            var_dump($this->email->print_debugger());
        }
    }
}
