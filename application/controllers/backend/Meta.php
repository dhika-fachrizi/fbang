<?php
class Meta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != true) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('backend/Meta_model', 'meta_model');
        $this->load->model('backend/Type_model', 'type_model');
        $this->load->helper('text');
    }

    public function index()
    {
        $x['data'] = $this->meta_model->get_all();
        $this->load->view('backend/v_meta', $x);
    }

    public function edit()
    {
        $id = $this->input->post('kode', true);
        $title = $this->input->post('meta-title2', true);
        $desc = $this->input->post('meta-desc2', true);
        $this->meta_model->edit_row($id, $title, $desc);
        $this->session->set_flashdata('msg', 'info');
        redirect('backend/meta');
    }


}