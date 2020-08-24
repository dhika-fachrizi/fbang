<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catlist extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Visitor_model', 'visitor_model');
        $this->load->model('Home_model', 'home_model');
        $this->load->model('Site_model', 'site_model');
        $this->load->model('Catlist_model', 'catlist_model');
        $this->load->model('Detail_model', 'detail_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
    }

    public function index()
    {
        //$this->output->enable_profiler(TRUE);
        $site = $this->site_model->get_site_data()->row_array();
        $data['site_name'] = $site['site_name'];
        $data['site_title'] = $site['site_title'];
        $data['site_desc'] = $site['site_description'];
        $data['site_twitter'] = $site['site_twitter'];
        $data['site_image'] = $site['site_logo_big'];
        $site_info = $this->db->get('tbl_site', 1)->row();
        $v['logo'] = $site_info->site_logo_header;
        $data['icon'] = $site_info->site_favicon;
        $data['header'] = $this->load->view('header', $v, true);
        $data['footer'] = $this->load->view('footer', '', true);
        $page = $this->input->get('search_query', true);
        if (!$page) {
            $page = 0;
        }
        $data['catlist'] = $this->catlist_model->get_post_catlist($page, 12);
        //print_r($data['catlist']);
        $this->load->view('catlist_views', $data);
    }

    public function restaurant()
    {
        //$this->output->enable_profiler(TRUE);
        $site = $this->site_model->get_site_data()->row_array();
        $data['site_name'] = $site['site_name'];
        $data['site_title'] = $site['site_title'];
        $data['site_desc'] = $site['site_description'];
        $data['site_twitter'] = $site['site_twitter'];
        $data['site_image'] = $site['site_logo_big'];
        $site_info = $this->db->get('tbl_site', 1)->row();
        $v['logo'] = $site_info->site_logo_header;
        $data['icon'] = $site_info->site_favicon;
        $data['header'] = $this->load->view('header', $v, true);
        $data['footer'] = $this->load->view('footer', '', true);
        $page = $this->input->get('search_query', true);
        if (!$page) {
            $page = 0;
        }
        $data['catlist'] = $this->catlist_model->get_post_catlist($page, 12);
        //print_r($data['catlist']);
        $this->load->view('catlist_view', $data);
    }

    public function detail($slug)
    {
        $data = $this->catlist_model->get_post_by_slug($slug);
        $search_result = count($data);
        if ($search_result > 0) {
            $q = $data;
            $kode = $q['post_id'];
            $data['title'] = $q['post_title'];
            if (empty($q['post_description'])) {
                $data['description'] = strip_tags(word_limiter($q['post_contents'], 25));
            } else {
                $data['description'] = $q['post_description'];
            }
            //$this->output->enable_profiler(TRUE);
            $site = $this->site_model->get_site_data()->row_array();
            $data['site_name'] = $site['site_name'];
            $data['site_title'] = $site['site_title'];
            $data['site_desc'] = $site['site_description'];
            $data['site_twitter'] = $site['site_twitter'];
            $data['site_image'] = $site['site_logo_big'];
            $site_info = $this->db->get('tbl_site', 1)->row();
            $v['logo'] = $site_info->site_logo_header;
            $data['icon'] = $site_info->site_favicon;
            $data['header'] = $this->load->view('header', $v, true);
            $data['footer'] = $this->load->view('footer', '', true);
            $data['detail'] = $q;
            $data['user'] = $this->detail_model->get_user();
            $data['popular'] = $this->detail_model->get_popular();

            $this->load->view('catlist_detail_view', $data);
        } else {
            redirect('home');
        }
    }

}