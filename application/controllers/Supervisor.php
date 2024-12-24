<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supervisor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Staff_model');  // Assuming you have a Staff model
        $this->load->library('session');
        
        // Check if the user is logged in and is a supervisor
        if ($this->session->userdata('usertype') != 2 || !$this->session->userdata('logged_in')) {
            redirect('login');
        }
    }

    public function dashboard() {
        $staff_id = $this->session->userdata('staff_id');
        $data['supervisor_name'] = $this->Staff_model->get_supervisor_name($staff_id);  // Fetch the supervisor's name from the database
        
        // Load the dashboard view and pass the supervisor's name
        $this->load->view('supervisor/dashboard', $data);
    }

    


}
