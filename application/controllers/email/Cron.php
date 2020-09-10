<?php
class Cron extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Visitor_model', 'visitor_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
        error_reporting(0);
        $this->load->library('email');
    }

    public function index()
    {
        $data = $this->db->get_where('tbl_post', ['email_news_update' => 1])->result();
        $total_sent = count($data);
        var_dump($total_sent);
        if ($total_sent > 0) {
            $email = $this->db->get('tbl_subscribe')->result_array();
            foreach ($email as $mail) {
                $message = $this->load->view('email/newsupdate', '', true);
                $config['mailtype'] = 'html';
                $config['protocol'] = 'smtp';
                $config['smtp_host'] = 'smtp.mailtrap.io';
                $config['smtp_user'] = '3b599c5fbb1bb2';
                $config['smtp_pass'] = 'f0cdd5ebfefb36';
                $config['smtp_port'] = 2525;
                $config['newline'] = "\r\n";
                $this->load->library('email', $config);
                $this->email->from('no-reply@foodbang.com');
                $this->email->to($mail['subscribe_email']);
                $this->email->subject('News Update');
                $this->email->message($message);
                if ($this->email->send()) {
                    var_dump("success");
                } else {
                    var_dump($this->email->print_debugger());
                }
            }
        } else {
            echo "no data to sent";
        }
    }

    public function test()
    {

        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://mail.foodbang.co.id',
            'smtp_port' => '587',
            'smtp_user' => 'muslimin@foodbang.co.id',
            'smtp_pass' => 'Superm@n123',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
        );
        $this->email->initialize($config);

        $this->email->from('muslimin@foodbang.co.id', 'Dhika');
        $this->email->to('dhikadeputra1@gmail.com');
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        if (!$this->email->send()) {
            echo "<pre>" . $this->email->print_debugger() . "</pre>";
        } else {
            return true;
        }

    }

}