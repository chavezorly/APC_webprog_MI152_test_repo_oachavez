<?php 
   class Users_controller extends CI_Controller {
	
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
  
      public function index() { 
         $query = $this->db->get("users"); 
         $data['records'] = $query->result(); 
			
         $this->load->helper('url'); 
         $this->load->view('Users_view',$data); 
      }
  
      public function add_student_view() { 
         $this->load->helper('form'); 
         $this->load->view('Users_add'); 
      } 
  
      public function add_student() { 
         $this->load->model('Users_Model');
			
         $data = array( 
            'user_id' => $this->input->post('user_id'), 
            'lastname' => $this->input->post('lastname'), 
            'firstname' => $this->input->post('firstname'), 
            'midname' => $this->input->post('midname'), 
            'email' => $this->input->post('email'), 
            'gender' => $this->input->post('gender'), 
			'nickname' => $this->input->post('nickname'), 
			'homeadd' => $this->input->post('homeadd'), 
			'cellno' => $this->input->post('cellno') 
         ); 
			
         $this->Users_Model->insert($data); 
   
         $query = $this->db->get("users"); 
         $data['records'] = $query->result(); 
         $this->load->view('Users_view',$data); 
      } 
  
      public function update_student_view() { 
         $this->load->helper('form'); 
         $user_id = $this->uri->segment('3'); 
         $query = $this->db->get_where("users",array("user_id"=>$user_id));
         $data['records'] = $query->result(); 
         $data['old_user_id'] = $user_id; 
         $this->load->view('Users_edit',$data); 
      } 
  
      public function update_student(){ 
         $this->load->model('Users_Model');
			
         $data = array( 
            'user_id' => $this->input->post('user_id'), 
            'lastname' => $this->input->post('lastname'), 
            'firstname' => $this->input->post('firstname'), 
            'midname' => $this->input->post('midname'), 
            'email' => $this->input->post('email'), 
            'gender' => $this->input->post('gender'), 
			'nickname' => $this->input->post('nickname'), 
			'homeadd' => $this->input->post('homeadd'), 
			'cellno' => $this->input->post('cellno')
			
         ); 
			
         $old_user_id = $this->input->post('old_user_id'); 
         $this->Users_Model->update($data,$old_user_id); 
			
         $query = $this->db->get("users"); 
         $data['records'] = $query->result(); 
         $this->load->view('Users_view',$data); 
      } 
  
      public function delete_student() { 
         $this->load->model('Users_Model'); 
         $user_id = $this->uri->segment('3'); 
         $this->Users_Model->delete($user_id); 
   
         $query = $this->db->get("users"); 
         $data['records'] = $query->result(); 
         $this->load->view('Users_view',$data); 
      }
      
      
   } 
?>