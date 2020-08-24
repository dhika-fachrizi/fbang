<?php
class Subcategory extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != true) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('backend/Subcategory_model', 'subcategory_model');
        $this->load->model('backend/Category_model', 'category_model');
        $this->load->model('backend/Type_model', 'type_model');
        $this->load->helper('text');
    }

    public function index()
    {
        $x['type'] = $this->type_model->get_all_type();
        $x['category'] = $this->category_model->get_all_category();
        $x['data'] = $this->subcategory_model->get_all_subcategory();
        $this->load->view('backend/v_subcategory', $x);
    }

    public function save()
    {
        $subcategory = $this->input->post('subcategory', true);
        $category = $this->input->post('category', true);
        $this->subcategory_model->add_new_row($subcategory, $category);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/subcategory');
    }

    public function edit()
    {
        $id = $this->input->post('kode', true);
        $subcategory = $this->input->post('subcategory2', true);
        $category = $this->input->post('category2', true);
        $this->subcategory_model->edit_row($id, $subcategory, $category);
        $this->session->set_flashdata('msg', 'info');
        redirect('backend/subcategory');
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $this->subcategory_model->delete_row($id);
        $this->session->set_flashdata('msg', 'success-delete');
        redirect('backend/subcategory');
    }
}