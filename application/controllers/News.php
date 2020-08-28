<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Visitor_model', 'visitor_model');
        $this->load->model('Home_model', 'home_model');
        $this->load->model('Site_model', 'site_model');
        $this->load->model('Detail_model', 'detail_model');
        $this->load->model('News_model', 'news_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
        $this->load->library('pagination');
    }
    public function index()
    {
        if ($_POST) {
            $l = $this->input->post('limit', true);
            $this->session->set_userdata('limit', $l);
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
        $data['popular'] = $this->detail_model->get_popular();
        $start = $this->input->get('per_page', true);
        if ($start == "") {
            $start = 1;
        }
        $config['base_url'] = base_url() . '/news';
        $config['total_rows'] = $this->news_model->get_post_news_count();
        $config['per_page'] = $this->session->userdata('limit');
        if ($config['per_page'] == "") {
            $config['per_page'] = 6;
        }
        $config['page_query_string'] = true;

        //
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<div><nav class="Page navigation example"><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav></div>';
        $config['num_tag_open'] = '<li class="page-item pr-10"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active pr-10"> <span class="page-link">';
        $config['cur_tag_close'] = ' </span></li>';
        $config['next_tag_open'] = '<li class="page-item pr-10"><span class="page-link">';
        $config['next_tagl_close'] = '</span></li>';
        $config['prev_tag_open'] = '<li class="page-item pr-10"><span class="page-link">';
        $config['prev_tagl_close'] = '</span>Next</li>';
        $config['first_tag_open'] = '<li class="page-item pr-10"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item pr-10"> <span class="page-link">';
        $config['last_tagl_close'] = '</span></li>';

        $config['attributes'] = array('limit' => 1);
        $this->pagination->initialize($config);
        $data['lasted_news'] = $this->news_model->get_post_news(0, 1);
        $data['news'] = $this->news_model->get_post_news($start, $config['per_page']);
        $data['limit'] = $config['per_page'];

        $this->load->view('news_view', $data);
    }

    public function detail($slug)
    {
        $data = $this->home_model->get_post_by_slug($slug);
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
            $data['post_header'] = $this->home_model->get_post_header();
            $data['post_header_2'] = $this->home_model->get_post_header_2();
            $data['post_header_3'] = $this->home_model->get_post_header_3();
            $data['latest_post'] = $this->home_model->get_latest_post();
            $data['popular_post'] = $this->home_model->get_popular_post();
            $data['detail'] = $this->news_model->get_news_detail($kode);
            $data['more_to_exploler'] = $this->detail_model->get_more_exploler($q['post_id'], $q['post_type_id'], $q['post_tags']);
            $data['user'] = $this->detail_model->get_user();
            $data['popular'] = $this->detail_model->get_popular();
            $this->home_model->count_views($kode);
            $home = $this->db->get('tbl_home', 1)->row();
            $data['caption_1'] = $home->home_caption_1;
            $data['caption_2'] = $home->home_caption_2;
            $data['bg_header'] = $home->home_bg_heading;
            $data['bg_testimoni'] = $home->home_bg_testimonial;
            $data['testimonial'] = $this->db->get('tbl_testimonial');
            $site_info = $this->db->get('tbl_site', 1)->row();
            $v['logo'] = $site_info->site_logo_header;
            $data['icon'] = $site_info->site_favicon;
            $data['header'] = $this->load->view('header', $v, true);
            $data['footer'] = $this->load->view('footer', '', true);
            $this->load->view('news_detail_view', $data);
        } else {
            redirect('home');
        }
    }

}