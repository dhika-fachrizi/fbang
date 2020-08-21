<?php
class Future_article extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('backend/Future_article_model','future_article_model');
		$this->load->helper('text');
	}

	function index(){
		$x['data'] = $this->future_article_model->get_all_future_article();
		$x['post'] = $this->future_article_model->get_all_post();
		$x['post_future_article'] = $this->future_article_model->get_5_future_article();
		$this->load->view('backend/v_future_article',$x);
	}

	function edit(){
		$id		  = $this->input->post('id',TRUE);
		$post_id = $this->input->post('post',TRUE);
		$this->future_article_model->edit_row($id,$post_id);
		$this->session->set_flashdata('msg','info');
		redirect('backend/future_article');
	}

}