<?php
class Users_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_users($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('users');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('users', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_users_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('users');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_users($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('lastname'), 'dash', TRUE);
 
        $data = array(
            'lastname' => $this->input->post('lastname'),
            'firstname' => $this->input->post('firstname'),
            'midname' => $this->input->post('midname'),
			'email' => $this->input->post('email'),
			'gender' => $this->input->post('gender'),
			'nickname' => $this->input->post('nickname'),
			'homeadd' => $this->input->post('homeadd'),
			'cellno' => $this->input->post('cellno'),
			 'slug' => $slug,
            'comment' => $this->input->post('comment')
           
        );
        
        if ($id == 0) {
            return $this->db->insert('users', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('users', $data);
        }
    }
    
    public function delete_users($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }
}