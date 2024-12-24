<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();



        // Load the necessary models here
        $this->load->model('Student_model');  // Load the Student model
        $this->load->model('Staff_model');    // Load the Staff model (if needed)
        $this->load->model('Department_model'); // Any other models you might need
        
        // Load the session library
        $this->load->library('session');




    }

    // Dashboard or redirection based on user type
    public function index() {
        if (!$this->session->userdata('logged_in')) { 
            // If the user is not logged in, redirect to login page
            redirect(base_url('auth/login'));
        } else {
            $usertype = $this->session->userdata('usertype'); // Get user type from session
            
            // Check user type and load respective dashboard
            if ($usertype == 1) {
                // Admin Dashboard
                $data['department'] = $this->Department_model->select_departments();
                $data['staff'] = $this->Staff_model->select_staff();
                $data['leave'] = $this->Leave_model->select_leave_forApprove();
                $data['salary'] = $this->Salary_model->sum_salary();
                
                $this->load->view('admin/header');
                $this->load->view('admin/dashboard', $data);
                $this->load->view('admin/footer');
            } elseif ($usertype == 2) {
                // Staff/Supervisor Dashboard
                $staff = $this->session->userdata('userid');
                $data['leave'] = $this->Leave_model->select_leave_byStaffID($staff);
                
                $this->load->view('staff/header');
                $this->load->view('staff/dashboard', $data);
                $this->load->view('staff/footer');
            } elseif ($usertype == 3) {
                // Student Dashboard
                $student_id = $this->session->userdata('userid'); // 'userid' now refers to student_id
                $data['student_info'] = $this->Student_model->get_student_info($student_id);
                $data['student_progress'] = $this->Student_model->get_student_progress($student_id);
    
                $this->load->view('student/header');
                $this->load->view('student/dashboard', $data);
                $this->load->view('student/footer');
            } else {
                // Invalid user type
                $this->session->set_flashdata('login_error', 'Invalid user type. Please contact support.');
                redirect(base_url('auth/login'));
            }
        }
    }

    // Login form page
    public function login_page() {
        $this->load->view('auth/login');
    }

    // Error page for handling custom errors
    public function error_page() {
        $this->load->view('admin/header');
        $this->load->view('admin/error_page');
        $this->load->view('admin/footer');
    }

    // Login functionality
    function login()
    {
        $un = $this->input->post('txtusername');
        $pw = $this->input->post('txtpassword');
        $this->load->model('Home_model');
        $check_login = $this->Home_model->logindata($un, $pw);
        
        if ($check_login <> '') {
            if ($check_login[0]['status'] == 1) {
                // Check for usertype (Admin, Staff, or Student)
                if ($check_login[0]['usertype'] == 1) {
                    // Admin
                    $data = array(
                        'logged_in' => TRUE,
                        'username' => $check_login[0]['username'],
                        'usertype' => $check_login[0]['usertype'],
                        'userid' => $check_login[0]['id']
                    );
                    $this->session->set_userdata($data);
                    redirect('/');
                }
                elseif ($check_login[0]['usertype'] == 2) {
                    // Staff
                    // Load the Staff model to fetch staff details
                    $this->load->model('Staff_model');
                    
                    // Fetch staff data using the username (assuming login_tbl.username matches staff.email)
                    $staff_data = $this->Staff_model->get_staff_by_username($check_login[0]['username']);
                    
                    if (!empty($staff_data)) {  // Check if staff data was fetched
                        $data = array(
                            'logged_in' => TRUE,
                            'username' => $check_login[0]['username'],  // Username from login_tbl
                            'usertype' => $check_login[0]['usertype'],  // User type (2 for staff)
                            'userid' => $check_login[0]['id'],           // User id from login_tbl
                            'staff_name' => $staff_data['staff_name'],   // Staff name from staff_tbl
                        );
                        $this->session->set_userdata($data);
                        redirect('/');
                    } else {
                        // Handle case where no matching staff is found
                        $this->session->set_flashdata('login_error', 'Staff not found in the system.');
                        redirect(base_url() . 'auth/login');
                    }
                }
                elseif ($check_login[0]['usertype'] == 3) {  // If the user is a student
                    // Load the Student model to fetch the student details
                    $this->load->model('Student_model');
                    
                    // Fetch student_id using the username (assuming login_tbl.username matches student.username)
                    $student_data = $this->Student_model->get_student_by_username($check_login[0]['username']);
                    
                    if (!empty($student_data)) {
                        // Now we have the student_id, let's store it in the session
                        $data = array(
                            'logged_in' => TRUE,
                            'username' => $check_login[0]['username'],  // The username from login_tbl
                            'usertype' => $check_login[0]['usertype'],  // The user type (3 for student)
                            'userid' => $student_data['student_id'],
                            'full_name' => $student_data['full_name'],     // Store the student_id from student table
                        );
                        $this->session->set_userdata($data);
                
                        // Redirect to student dashboard
                        redirect('/student_dashboard');
                    } else {
                        // Handle case where no matching student is found
                        $this->session->set_flashdata('login_error', 'Student not found in the system.');
                        redirect(base_url() . 'auth/login');
                    }
                } else {
                $this->session->set_flashdata('login_error', 'Sorry, you cannot log in right now.', 300);
                redirect(base_url() . 'auth/login');
            }
        } else {
            $this->session->set_flashdata('login_error', 'Sorry, your account is blocked.', 300);
            redirect(base_url() . 'auth/login');
        }
    } else {
        $this->session->set_flashdata('login_error', 'Please check your username or password and try again.', 300);
        redirect(base_url() . 'auth/login');
    }
    }


   public function some_method() {
        $student_id = $this->session->userdata('student_id');
        
        // Fetch student info
        $data['student_info'] = $this->Student_model->get_student_info($student_id);
        
        // Use the student info in your view or logic
        $this->load->view('some_view', $data);
    }
    


    // Logout function
    public function logout() {
        // Destroy session and redirect to login page
        $this->session->sess_destroy();
        redirect(base_url() . 'auth/login');
    }
}