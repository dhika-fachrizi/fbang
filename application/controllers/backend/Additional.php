<?php
class Additional extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != true) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('backend/Additional_model', 'additional_model');
        $this->load->model('backend/Category_model', 'category_model');
        $this->load->model('backend/Type_model', 'type_model');
        $this->load->helper('text');
    }

    public function index()
    {
        $x['type'] = $this->type_model->get_all_type();
        $x['category'] = $this->category_model->get_all_category();
        $x['data'] = $this->additional_model->get_all_additional();
        $this->load->view('backend/v_additional', $x);
    }

    public function save()
    {
        $additional = strip_tags(htmlspecialchars($this->input->post('additional', true), ENT_QUOTES));
        $category = $this->input->post('category', true);
        $this->additional_model->add_new_row($additional, $category);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/additional');
    }

    public function edit()
    {
        $id = $this->input->post('kode', true);
        $additional = strip_tags(htmlspecialchars($this->input->post('additional2', true), ENT_QUOTES));
        $category = $this->input->post('category2', true);
        $this->additional_model->edit_row($id, $additional, $category);
        $this->session->set_flashdata('msg', 'info');
        redirect('backend/additional');
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $this->additional_model->delete_row($id);
        $this->session->set_flashdata('msg', 'success-delete');
        redirect('backend/additional');
    }
}