<?php
class Welcome extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Visitor_model','visitor_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
        error_reporting(0);
	}

	function index(){
		$site_info = $this->db->get('tbl_site', 1)->row();
		$about = $this->db->get('tbl_about', 1)->row();
		$data['about_img'] = $about->about_image;
		$data['about_desc'] = $about->about_description;
		$v['logo'] =  $site_info->site_logo_header;
		$data['icon'] = $site_info->site_favicon;
		$data['header'] = $this->load->view('header',$v,TRUE);
		$data['footer'] = $this->load->view('footer','',TRUE);
		$this->load->view('email/welcome',$data);
	}
	function news_update(){
		$this->load->model('email/Email_model', 'email_model');
		$x['news_update'] = $this->email_model->get_news_update();
		$this->load->view('email/newsupdate',$x);
	}
}