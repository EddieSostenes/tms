<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supervisor_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Fetch the allocated supervisor details using the student_id
    public function get_allocated_supervisor($student_id) {
        // Fetch supervisor details using student ID
        $this->db->select('
            ssa.supervisor_name, 
            ssa.student_name, 
            ssa.allocation_date, 
            ssa.status, 
            st.email, 
            st.mobile, 
            st.address, 
            st.city, 
            st.state, 
            st.country, 
            st.pic AS profile_picture, 
            d.department_name AS department
        ');
        $this->db->from('student_supervisor_allocation ssa');
        $this->db->join('staff_tbl st', 'ssa.staff_id = st.id', 'left');
        $this->db->join('department_tbl d', 'st.department_id = d.id', 'left'); // Fetch department from staff_tbl
        $this->db->where('ssa.student_id', $student_id);
        
        $query = $this->db->get();

        // Return a single result row
        return $query->row_array();
    }

    public function get_supervisor_name($staff_id) {
        $this->db->select('staff_name');  // Assuming 'staff_name' is the column in the staff table
        $this->db->from('staff_tbl');     // Assuming 'staff_tbl' is the staff table
        $this->db->where('id', $staff_id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row()->staff_name;
        } else {
            return 'Supervisor';  // Default text if no name found
        }
    }



}
