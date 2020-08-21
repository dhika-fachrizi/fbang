<?php
class Future_article_model extends CI_Model
{

	function get_all_future_article()
	{
		$result = $this->db->query("SELECT c.id,c.name_slot,c.post_id,p.post_title FROM tbl_future_article c JOIN tbl_post p ON p.post_id = c.post_id ORDER BY c.id ASC");
		return $result;
	}

	function edit_row($id, $post_id)
	{
		$data = array(
			'post_id' => $post_id
		);
		$this->db->where('id', $id);
		$this->db->update('tbl_future_article', $data);
	}
	public function get_all_post()
	{
		$result = $this->db->query("SELECT post_id,post_title FROM tbl_post");
		return $result;
	}
	public function get_5_future_article()
	{
		$result = $this->db->query("SELECT * FROM tbl_post JOIN tbl_future_article ON tbl_post.post_id = tbl_future_article.post_id");
		return $result;
	}
}
