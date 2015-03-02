<?php
class person extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('person_model');
    }
    
    public function index()
    {
        $data['person'] = $this->person_model->get_person();
        
        //$data['person_id'] = 'Person List';
        
        $this->load->view('templates/header',$data);
        $this->load->view('person/index',$data);
        $this->load->view('templates/footer',$data);
    }
    
    public function view($person_id)
    {
        $data['person_item']=$this->person_model->get_person($person_id);
        if (empty($data['person_item']))
        {
            show_404();
        }

	   $data['title'] = $data['person_item']['person_id'];

	   $this->load->view('templates/header', $data);
	   $this->load->view('person/view', $data);
	   $this->load->view('templates/footer');

    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
    
        $data['title'] = 'Create a Person';
    
        $this->form_validation->set_rules('first_name', 'first_name', 'required');
        $this->form_validation->set_rules('last_name', 'last_name', 'required');
    
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('person/create');
            $this->load->view('templates/footer');
    
        }
        else
        {
            $this->person_model->set_person();
            $this->load->view('person/success');
        }
    }
    
}