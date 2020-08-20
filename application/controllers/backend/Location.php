<?php
class Location extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != true) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('backend/Location_model', 'location_model');
        $this->load->model('backend/Type_model', 'type_model');
        $this->load->helper('text');
    }

    public function index()
    {
        $x['type'] = $this->type_model->get_all_type();
        $x['data'] = $this->location_model->get_all_location();
        $this->load->view('backend/v_location', $x);
    }

    public function save()
    {
        $location = strip_tags(htmlspecialchars($this->input->post('location', true), ENT_QUOTES));
        $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $location);
        $trim = trim($string);
        $slug = strtolower(str_replace(" ", "-", $trim));
        $type = $this->input->post('type', true);
        $this->location_model->add_new_row($location);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/location');
    }

    public function edit()
    {
        $id = $this->input->post('kode', true);
        $location = strip_tags(htmlspecialchars($this->input->post('location2', true), ENT_QUOTES));
        $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $location);
        $trim = trim($string);
        $slug = strtolower(str_replace(" ", "-", $trim));
        $type = $this->input->post('type2', true);
        $this->location_model->edit_row($id, $location);
        $this->session->set_flashdata('msg', 'info');
        redirect('backend/location');
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $this->location_model->delete_row($id);
        $this->session->set_flashdata('msg', 'success-delete');
        redirect('backend/location');
    }
}