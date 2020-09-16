<?php
class Meta_model extends CI_Model
{

    public function get_all()
    {
        $this->db->from('tbl_meta');
        $result = $this->db->get();
        return $result;
    }

    public function get_meta_by_name($name)
    {
        $this->db->from('tbl_meta');
        $this->db->like('meta_name',$name);
        $this->db->limit(1);
        $result = $this->db->get();
        return $result;
    }

    public function get_meta_by_id($id)
    {
        $this->db->from('tbl_meta');
        $this->db->where('meta_id',$id);
        $result = $this->db->get();
        return $result->row();
    }

    public function edit_row($id,$title,$desc)
    {
        $detail = array(
            'meta_title' => $title,
            'meta_desc' => $desc,           
        );
        $this->db->where('meta_id', $id);
        $result = $this->db->update('tbl_meta', $detail);
        return $result;
    }


}