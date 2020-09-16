<?php

class Settings extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != true) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('Site_model', 'site_model');
        $this->load->library('upload');
        $this->load->helper('text');
    }

    public function index()
    {
        $result = $this->site_model->get_site_data()->row_array();
        $data['site_id'] = $result['site_id'];
        $data['site_name'] = $result['site_name'];
        $data['site_title'] = $result['site_title'];
        $data['site_description'] = $result['site_description'];
        $data['site_logo_header'] = $result['site_logo_header'];
        $data['site_favicon'] = $result['site_favicon'];
        $data['site_logo_big'] = $result['site_logo_big'];
        $data['site_facebook'] = $result['site_facebook'];
        $data['site_twitter'] = $result['site_twitter'];
        $data['site_instagram'] = $result['site_instagram'];
        $data['site_pinterest'] = $result['site_pinterest'];
        $data['site_linkedin'] = $result['site_linkedin'];
        $myfile = fopen(FCPATH."robots.txt", "r") or die("Unable to open file!");
        $data['robot'] = fread($myfile, filesize(FCPATH."robots.txt"));
        fclose($myfile);
        $this->load->view('backend/v_settings', $data);
    }

    public function update()
    {
        $site_id = htmlspecialchars($this->input->post('site_id', true), ENT_QUOTES);
        $site_name = htmlspecialchars($this->input->post('name', true), ENT_QUOTES);
        $site_title = htmlspecialchars($this->input->post('title', true), ENT_QUOTES);
        $site_description = htmlspecialchars($this->input->post('description', true), ENT_QUOTES);
        $facebook = htmlspecialchars($this->input->post('facebook', true), ENT_QUOTES);
        $twitter = htmlspecialchars($this->input->post('twitter', true), ENT_QUOTES);
        $linkedin = htmlspecialchars($this->input->post('linkedin', true), ENT_QUOTES);
        $instagram = htmlspecialchars($this->input->post('instagram', true), ENT_QUOTES);
        $pinterest = htmlspecialchars($this->input->post('pinterest', true), ENT_QUOTES);

        $config['upload_path'] = './theme/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = false;

        $this->upload->initialize($config);
        if (!empty($_FILES['logo_header']['name']) && !empty($_FILES['logo_icon']['name']) && !empty($_FILES['logo_big']['name'])) {
            if ($this->upload->do_upload('logo_header')) {
                $img_header = $this->upload->data();
                $logo_header = $img_header['file_name'];
            }
            if ($this->upload->do_upload('logo_icon')) {
                $img_footer = $this->upload->data();
                $logo_footer = $img_footer['file_name'];
            }
            if ($this->upload->do_upload('logo_big')) {
                $img_big = $this->upload->data();
                $logo_big = $img_big['file_name'];
            }
            $this->site_model->update_information($site_id, $site_name, $site_title, $site_description, $logo_header, $logo_footer, $logo_big, $facebook, $twitter, $linkedin, $instagram, $pinterest);
            $this->session->set_flashdata('msg', 'success');
            redirect('backend/settings');

        } elseif (!empty($_FILES['logo_header']['name']) && !empty($_FILES['logo_icon']['name']) && empty($_FILES['logo_big']['name'])) {
            if ($this->upload->do_upload('logo_header')) {
                $img_header = $this->upload->data();
                $logo_header = $img_header['file_name'];
            }
            if ($this->upload->do_upload('logo_icon')) {
                $img_footer = $this->upload->data();
                $logo_footer = $img_footer['file_name'];
            }
            $this->site_model->update_information_header_icon($site_id, $site_name, $site_title, $site_description, $logo_header, $logo_footer, $facebook, $twitter, $linkedin, $instagram, $pinterest);
            $this->session->set_flashdata('msg', 'success');
            redirect('backend/settings');

        } elseif (empty($_FILES['logo_header']['name']) && !empty($_FILES['logo_icon']['name']) && !empty($_FILES['logo_big']['name'])) {
            if ($this->upload->do_upload('logo_big')) {
                $img_big = $this->upload->data();
                $logo_big = $img_big['file_name'];
            }
            if ($this->upload->do_upload('logo_icon')) {
                $img_footer = $this->upload->data();
                $logo_footer = $img_footer['file_name'];
            }
            $this->site_model->update_information_big_icon($site_id, $site_name, $site_title, $site_description, $logo_big, $logo_footer, $facebook, $twitter, $linkedin, $instagram, $pinterest);
            $this->session->set_flashdata('msg', 'success');
            redirect('backend/settings');

        } elseif (!empty($_FILES['logo_header']['name']) && empty($_FILES['logo_icon']['name']) && !empty($_FILES['logo_big']['name'])) {
            if ($this->upload->do_upload('logo_big')) {
                $img_big = $this->upload->data();
                $logo_big = $img_big['file_name'];
            }
            if ($this->upload->do_upload('logo_header')) {
                $img_header = $this->upload->data();
                $logo_header = $img_header['file_name'];
            }
            $this->site_model->update_information_big_header($site_id, $site_name, $site_title, $site_description, $logo_big, $logo_header, $facebook, $twitter, $linkedin, $instagram, $pinterest);
            $this->session->set_flashdata('msg', 'success');
            redirect('backend/settings');

        } elseif (!empty($_FILES['logo_header']['name']) && empty($_FILES['logo_icon']['name']) && empty($_FILES['logo_big']['name'])) {
            if ($this->upload->do_upload('logo_header')) {
                $img_header = $this->upload->data();
                $logo_header = $img_header['file_name'];
            }
            $this->site_model->update_information_header($site_id, $site_name, $site_title, $site_description, $logo_header, $facebook, $twitter, $linkedin, $instagram, $pinterest);
            $this->session->set_flashdata('msg', 'success');
            redirect('backend/settings');

        } elseif (empty($_FILES['logo_header']['name']) && !empty($_FILES['logo_icon']['name']) && empty($_FILES['logo_big']['name'])) {
            if ($this->upload->do_upload('logo_icon')) {
                $img_footer = $this->upload->data();
                $logo_footer = $img_footer['file_name'];
            }
            $this->site_model->update_information_footer($site_id, $site_name, $site_title, $site_description, $logo_footer, $facebook, $twitter, $linkedin, $instagram, $pinterest);
            $this->session->set_flashdata('msg', 'success');
            redirect('backend/settings');

        } elseif (empty($_FILES['logo_header']['name']) && empty($_FILES['logo_icon']['name']) && !empty($_FILES['logo_big']['name'])) {
            if ($this->upload->do_upload('logo_big')) {
                $img_big = $this->upload->data();
                $logo_big = $img_big['file_name'];
            }
            $this->site_model->update_information_big($site_id, $site_name, $site_title, $site_description, $logo_big, $facebook, $twitter, $linkedin, $instagram, $pinterest);
            $this->session->set_flashdata('msg', 'success');
            redirect('backend/settings');

        } else {
            $this->site_model->update_information_nologo($site_id, $site_name, $site_title, $site_description, $facebook, $twitter, $linkedin, $instagram, $pinterest);
            $this->session->set_flashdata('msg', 'success');
            redirect('backend/settings');
        }
	}
	
	public function robot()
    {
		if (isset($_POST['robot'])) {
			$myfile = fopen(FCPATH."robots.txt", "w") or die("Unable to open file!");
			$txt = $_POST['robot'];
			fwrite($myfile, $txt);
			fclose($myfile);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/settings');
		}
	}
}
