<?php
class Tag extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tag_model', 'tag_model');
        $this->load->model('Blog_model', 'blog_model');
        $this->load->model('Visitor_model', 'visitor_model');
        $this->load->model('Site_model', 'site_model');
        $this->load->model('Home_model', 'home_model');
        $this->load->model('Category_model', 'category_model');
        $this->load->model('backend/Meta_model', 'meta_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
        error_reporting(0);
    }

    public function index()
    {
        redirect('blog');
    }

    public function detail($tag)
    {

        $x['get_category'] = $this->input->get('category', true);
        // var_dump($data['get_category']);
        $tag = urldecode($tag);

        $x['data'] = $this->tag_model->get_blog_by_tags($tag, $x['get_category']);
        $x['search_result'] = count($x['data']->result());
        $x['populer_post'] = $this->blog_model->get_popular_post();
        $site_info = $this->db->get('tbl_site', 1)->row();
        $v['logo'] = $site_info->site_logo_header;
        $x['icon'] = $site_info->site_favicon;
        $x['site_image'] = $site_info->site_logo_big;
        $x['site_title'] = $site_info->site_title;
        $x['meta'] = $this->meta_model->get_meta_by_id(4);
        $x['header'] = $this->load->view('header', $v, true);
        $f['site'] = $site;
        $x['footer'] = $this->load->view('footer', $f, true);
        $site = $this->site_model->get_site_data()->row_array();
        $x['site_name'] = $site['site_name'];
        $x['site_twitter'] = $site['site_twitter'];
        $x['site_org'] = $this->site_model->get_org($site);
        $x['site_canonical'] = base_url('home/tag');
        $x['type_category'] = $this->home_model->get_type_category();
        $x['tag'] = $tag;
        $this->load->view('blog_tag_view', $x);
    }
}
