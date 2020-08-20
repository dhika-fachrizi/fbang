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
        $this->load->model('backend/Type_model', 'type_model');
        $this->load->helper('text');
    }

    public function index()
    {
        $x['type'] = $this->type_model->get_all_type();
        $x['data'] = $this->additional_model->get_all_additional();
        $this->load->view('backend/v_additional', $x);
    }

    public function save()
    {
        $additional = strip_tags(htmlspecialchars($this->input->post('additional', true), ENT_QUOTES));
        $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $additional);
        $trim = trim($string);
        $slug = strtolower(str_replace(" ", "-", $trim));
        $type = $this->input->post('type', true);
        $this->additional_model->add_new_row($additional);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/additional');
    }

    public function edit()
    {
        $id = $this->input->post('kode', true);
        $additional = strip_tags(htmlspecialchars($this->input->post('additional2', true), ENT_QUOTES));
        $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $additional);
        $trim = trim($string);
        $slug = strtolower(str_replace(" ", "-", $trim));
        $type = $this->input->post('type2', true);
        $this->additional_model->edit_row($id, $additional);
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