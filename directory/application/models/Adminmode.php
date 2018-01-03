<?php
class Adminmode extends CI_Model
{
    function __construct()
	{
	   $this->load->database();
	}
	function show_enquiry()
	{
	     $query=$this->db->get('admin');
		 return $query->result_array();
	}
	function delete_enquiry($id)
	{
	   $query=$this->db->delete('admin',array("id"=>$id));
	    redirect('addadmin');
	}
	function find_enquiry($id)
	{
	     $query=$this->db->get_where('admin',array("id"=>$id));
		 return $query->result_array();
	}
	function update_reg($id,$name,$email)
	{
	
	 $this->db->where("id",$id);
     $query=$this->db->update('admin',
	           array("name"=>$name,"email"=>$email));
	   if($query)
	   {
	  // echo "update suucess:";
	    redirect('addadmin');
	   }
	}
	public function update_image($id,$file_name)
	{
		$this->db->where('id',$id);
		$this->db->update('admin',array('image'=>$file_name));
		//$this->db->_error_message();*/
	}
	
	
	function show_profile()
	{
	    $email =  $this->session->userdata('email');
	   
	   $query = $this->db->query("SELECT * FROM admin WHERE  email ='$email' ");
	   return $query->result_array();
	 
	} 
    
	
	
	
	function insert_data($table,$data)
	{
		$this->db->insert($table,$data);
		//return $this->db->insert_id();
		redirect('addadmin');
	}
	
	function find_password()
	{
	   $email =  $this->session->userdata('email');
	   $query = $this->db->query("SELECT * FROM admin WHERE  email ='$email' ");
	   return $query->result_array();
	}
	
	
	
}



?>