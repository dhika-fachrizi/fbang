<?php
class City_model extends CI_Model
{

    public function get_all_city()
    {
        $this->db->order_by('city_name', 'ASC');
        $result = $this->db->get('tbl_city');
        return $result;
    }

    public function get_all_city_group()
    {
        $this->db->order_by('city_name', 'ASC');
        $result = $this->db->get('tbl_city')->result_array();
        $lastChar = '';
        $temp = [];
        foreach ($result as $item) {
            $char = $item['city_name'][0];
            $t = [];

            if ($lastChar == '') {
                $lastChar = $char;
                foreach ($result as $item2) {

                    if ($item2['city_name'][0] == $lastChar) {
                        array_push($t, $item2);
                    }
                }
            } else if ($lastChar != '') {
                if ($lastChar != $char) {
                    $lastChar = $char;
                    foreach ($result as $item2) {

                        if ($item2['city_name'][0] == $lastChar) {
                            array_push($t, $item2);
                        }
                    }
                }
            }
            if (count($t) > 0) {
                $t2 = [$lastChar => $t];
                array_push($temp, $t2);
            }

        }
        return $temp;
    }

    public function add_new_row($city)
    {
        $data = array(
            'city_name' => $city,
        );
        $this->db->insert('tbl_city', $data);
    }

    public function edit_row($id, $city)
    {
        $data = array(
            'city_name' => $city,
        );
        $this->db->where('city_id', $id);
        $this->db->update('tbl_city', $data);
    }

    public function delete_row($id)
    {
        $this->db->where('city_id', $id);
        $this->db->delete('tbl_city');
    }

}