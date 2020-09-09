<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Cron extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Visitor_model', 'visitor_model');
        $this->load->model('Email_model', 'email_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
        error_reporting(0);
        require APPPATH . 'libraries/phpmailer/src/Exception.php';
        require APPPATH . 'libraries/phpmailer/src/PHPMailer.php';
        require APPPATH . 'libraries/phpmailer/src/SMTP.php';
    }

    function index()
    {
        $data = $this->email_model->get_status_email();
        $total_sent = count($data);
        if ($total_sent > 0) {
            $emailto = $this->db->get('tbl_subscribe')->result_array();
            $temp_email = [];
            foreach ($emailto as $item) {
                array_push($temp_email, $item['subscribe_email']);
            }

            $message = $this->load->view('email/newsupdate', '', true);
            $mail = new PHPMailer();


            // SMTP configuration
            $mail->isSMTP();
            $mail->Host     = 'mail.foodbang.co.id'; //sesuaikan sesuai nama domain hosting/server yang digunakan
            $mail->SMTPAuth = true;
            $mail->Username = 'muslimin@foodbang.co.id'; // user email
            $mail->Password = 'Superm@n123'; // password email
            $mail->SMTPSecure = 'ssl';
            $mail->Port     = 465;

            $mail->setFrom('muslimin@foodbang.co.id', ''); // user email
            // $mail->addReplyTo('xxx@hostdomain.com', ''); //user email

            // Add a recipient
            foreach ($temp_email as $item) {
                $mail->addAddress($item); //email tujuan pengiriman email
            }
            // Email subject
            $mail->Subject = 'SMTP Codeigniter'; //subject email

            // Set email format to HTML
            $mail->isHTML(true);

            // Email body content
            $mailContent = $message; // isi email
            $mail->Body = $mailContent;
            if (!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
                $data = $this->email_model->update_status_email();
            }
        } else {
            echo "no data to sent";
        }
    }
}
