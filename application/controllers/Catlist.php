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
        $this->load->model('Category_model', 'category_model');
        $this->load->model('backend/Detail_category_model', 'detail_category_model');
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
        $category = $this->category_model->get_category_by_id(11);
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
        $data['thumbnail'] = $this->detail_category_model->get_post_by_id($category['category_id'])->row();
        $data['filter_city'] = $this->catlist_model->get_filter_city($category['category_id']);
        $data['filter_category'] = $this->catlist_model->get_filter_category($category['category_id']);
        $data['filter_location'] = $this->catlist_model->get_filter_location($category['category_id']);
        $data['filter_additional'] = $this->catlist_model->get_filter_additional($category['category_id']);
        $data['get_city'] = $this->input->get('city', true);
        $data['get_category'] = $this->input->get('subcategory', true);
        $data['get_location'] = $this->input->get('location', true);
        $data['get_halal'] = $this->input->get('halal', true);
        $data['get_additional'] = $this->input->get('additional', true);
        $data['get_short'] = $this->input->get('short', true);
        $data['get_search'] = $this->input->get('search', true);
        $data['get_perpage'] = $this->input->get('perpage', true);
        $data['perpage'] = 3;
        if ($data['get_perpage'] == "") {
            $data['get_perpage'] = $data['perpage'];
        }

        $page = $this->input->get('search_query', true);
        if (!$page) {
            $page = 0;
        }
        $data['catlist'] = $this->catlist_model->get_post_catlist($category['category_id'], $data['get_city'], $data['get_category'], $data['get_location'], $data['get_halal'], $data['get_additional'], $data['get_short'], $data['get_search'], $page, $data['get_perpage']);
        $data['catlist_count'] = $this->catlist_model->get_post_catlist_count($category['category_id'], $data['get_city'], $data['get_category'], $data['get_location'], $data['get_halal'], $data['get_additional'], $data['get_short'], $data['get_search']);
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

            $data['more_to_exploler'] = $this->detail_model->get_more_exploler($q['post_id'], $q['post_type_id'], $q['post_tags']);
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