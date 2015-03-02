<?php
class person_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_person($person_id=0)
    {
        if($person_id==0)
        {
            $query=$this->db->get('person');
            return $query->result_array();
        }
        
        $query = $this->db->get_where('person',array('person_id'=>$person_id));
        return $query->row_array();
    }
    
    public function set_person()
    {
        $this->load->helper('url');
        
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name')
        );
    
        return $this->db->insert('person', $data);
    }
    
}