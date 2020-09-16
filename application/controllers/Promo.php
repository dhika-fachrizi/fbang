<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Promo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Visitor_model', 'visitor_model');
        $this->load->model('Home_model', 'home_model');
        $this->load->model('Site_model', 'site_model');
        $this->load->model('Catlist_model', 'catlist_model');
        $this->load->model('Promo_model', 'promo_model');
        $this->load->model('backend/Meta_model', 'meta_model');
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
        $data['site_org'] = $this->site_model->get_org($site);
        $data['site_canonical'] = base_url('promo');
        $data['meta'] = $this->meta_model->get_meta_by_id(3);
        $site_info = $this->db->get('tbl_site', 1)->row();
        $v['logo'] = $site_info->site_logo_header;
        $data['icon'] = $site_info->site_favicon;
        $data['header'] = $this->load->view('header', $v, true);
        $f['site'] = $site;
        $data['footer'] = $this->load->view('footer', $f, true);
        $data['filter_city'] = $this->promo_model->get_filter_city();
        $data['get_city'] = $this->input->get('city', true);
        $data['get_short'] = $this->input->get('short', true);
        $data['get_search'] = $this->input->get('search', true);
        $data['get_perpage'] = $this->input->get('perpage', true);
        $data['perpage'] = 9;
        if ($data['get_perpage'] == "") {
            $data['get_perpage'] = $data['perpage'];
        }

        $page = $this->input->get('search_query', true);
        if (!$page) {
            $page = 0;
        }

        $data['promo'] = $this->promo_model->get_post_promo($data['get_search'], $data['get_city'], $data['get_short'], $page, $data['get_perpage']);
        //print_r($data['promo']);
        $this->load->view('promo_view', $data);
    }

}