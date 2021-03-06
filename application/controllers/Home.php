<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Visitor_model', 'visitor_model');
        $this->load->model('Home_model', 'home_model');
        $this->load->model('Promo_model', 'promo_model');
        $this->load->model('Site_model', 'site_model');
        $this->load->model('backend/Slider_model', 'slider_model');
        $this->load->model('backend/Meta_model', 'meta_model');
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
        $data['site_canonical'] = base_url();
        $data['meta'] = $this->meta_model->get_meta_by_id(1);
        $data['post_header'] = $this->home_model->get_post_header();
        $data['post_header_2'] = $this->home_model->get_post_header_2();
        $data['post_header_3'] = $this->home_model->get_post_header_3();
        $data['latest_post'] = $this->home_model->get_latest_post();
        $data['popular_post'] = $this->home_model->get_popular_post();
        $data['promo_post'] = $this->promo_model->get_promo_post();

        $data['feature_article'] = $this->home_model->get_4_future_article();
        $data['slot1'] = $this->home_model->slot1();
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
        $f['site'] = $site;
        $data['footer'] = $this->load->view('footer', $f, true);
        $data['slider'] = $this->slider_model->get_all_post();
        $data['news_update'] = $this->home_model->get_news_update();
        $data['popular'] = $this->home_model->get_popular();
        $data['popular_image'] = $this->home_model->get_popular_image();
        $this->load->view('home_view', $data);
    }

    public function about()
    {
        //$this->output->enable_profiler(TRUE);
        $site = $this->site_model->get_site_data()->row_array();
        $data['site_name'] = $site['site_name'];
        $data['site_title'] = $site['site_title'];
        $data['site_desc'] = $site['site_description'];
        $data['site_twitter'] = $site['site_twitter'];
        $data['site_image'] = $site['site_logo_big'];
        $data['meta'] = $this->meta_model->get_meta_by_id(2);
        $data['post_header'] = $this->home_model->get_post_header();
        $data['post_header_2'] = $this->home_model->get_post_header_2();
        $data['post_header_3'] = $this->home_model->get_post_header_3();
        $data['latest_post'] = $this->home_model->get_latest_post();
        $data['popular_post'] = $this->home_model->get_popular_post();
        $data['slider'] = $this->slider_model->get_all_post();
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
        $f['site'] = $site;
        $data['footer'] = $this->load->view('footer', $f, true);
        $this->load->view('about_home_view', $data);
    }

    public function promo()
    {
        //$this->output->enable_profiler(TRUE);
        $site = $this->site_model->get_site_data()->row_array();
        $data['site_name'] = $site['site_name'];
        $data['site_title'] = $site['site_title'];
        $data['site_desc'] = $site['site_description'];
        $data['site_twitter'] = $site['site_twitter'];
        $data['site_image'] = $site['site_logo_big'];
        $data['meta'] = $this->meta_model->get_meta_by_id(2);
        $data['post_header'] = $this->home_model->get_post_header();
        $data['post_header_2'] = $this->home_model->get_post_header_2();
        $data['post_header_3'] = $this->home_model->get_post_header_3();
        $data['latest_post'] = $this->home_model->get_latest_post();
        $data['popular_post'] = $this->home_model->get_popular_post();
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
        $f['site'] = $site;
        $data['footer'] = $this->load->view('footer', $f, true);
        $this->load->view('promo_view', $data);
    }

    public function search()
    {
        //$this->output->enable_profiler(TRUE);
        $data['get_category'] = $this->input->get('category', true);
        $query = $this->input->get('search_query', true);
        $result = $this->home_model->search_blog($query, $data['get_category']);
        $search_result = count($result);
        if ($search_result > 0) {
            $data['data'] = $result;
            $data['keyword'] = $query;
            $data['judul'] = 'Hasil Pencarian :' . ' "' . $query . '"';
            $data['search_result'] = $search_result;
        } else {
            $data['data'] = $result;
            $data['keyword'] = $query;
            $data['judul'] = 'Hasil Pencarian : "Tidak Temukan"';
            $data['search_result'] = $search_result;
        }
        $site = $this->site_model->get_site_data()->row_array();
        $data['site_name'] = $site['site_name'];
        $data['site_title'] = $site['site_title'];
        $data['site_desc'] = $site['site_description'];
        $data['site_twitter'] = $site['site_twitter'];
        $data['site_image'] = $site['site_logo_big'];
        $data['meta'] = $this->meta_model->get_meta_by_id(4);
        $data['site_org'] = $this->site_model->get_org($site);
        $data['site_canonical'] = base_url('home/serach');
        $data['post_header'] = $this->home_model->get_post_header();
        $data['post_header_2'] = $this->home_model->get_post_header_2();
        $data['post_header_3'] = $this->home_model->get_post_header_3();
        $data['latest_post'] = $this->home_model->get_latest_post();
        $data['popular_post'] = $this->home_model->get_popular_post();
        $data['type_category'] = $this->home_model->get_type_category();
        $data['category'] = $this->home_model->get_category();
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
        $f['site'] = $site;
        $data['footer'] = $this->load->view('footer', $f, true);
        $this->load->view('search_home_view', $data);
    }

}
