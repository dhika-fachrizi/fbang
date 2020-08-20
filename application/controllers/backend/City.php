<?php
class City extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != true) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('backend/City_model', 'city_model');
        $this->load->model('backend/Type_model', 'type_model');
        $this->load->helper('text');
    }

    public function index()
    {
        $x['type'] = $this->type_model->get_all_type();
        $x['data'] = $this->city_model->get_all_city();
        $this->load->view('backend/v_city', $x);
    }

    public function save()
    {
        $city = strip_tags(htmlspecialchars($this->input->post('city', true), ENT_QUOTES));
        $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $city);
        $trim = trim($string);
        $slug = strtolower(str_replace(" ", "-", $trim));
        $type = $this->input->post('type', true);
        $this->city_model->add_new_row($city);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/city');
    }

    public function edit()
    {
        $id = $this->input->post('kode', true);
        $city = strip_tags(htmlspecialchars($this->input->post('city2', true), ENT_QUOTES));
        $string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $city);
        $trim = trim($string);
        $slug = strtolower(str_replace(" ", "-", $trim));
        $type = $this->input->post('type2', true);
        $this->city_model->edit_row($id, $city);
        $this->session->set_flashdata('msg', 'info');
        redirect('backend/city');
    }

    public function delete()
    {
        $id = $this->input->post('id', true);
        $this->city_model->delete_row($id);
        $this->session->set_flashdata('msg', 'success-delete');
        redirect('backend/city');
    }
}