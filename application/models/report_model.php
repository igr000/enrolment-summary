<?php
/*******************************************************************************
-- Reports_model is a model class that contains methods that will compute the --
-- the number of students who are: enrolled, not enrolled, in total, enrolled --
-- in BSCS, enrolled in BSIS and enrolled in CT. -------------------------------
--------------------------------------------------------------------------------
-- Author: Irene Gayle Roque ---------------------------------------------------
*******************************************************************************/
class Report_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
    
    //query_EnrolledStudents() --> method that will count the number of students who are enrolled
	public function query_EnrolledStudents(){

		//calls lookup_report_model
		$this->load->model('lookup_report_model');
		//sets r_value parameters and pass it to $sem
		$sem = $this->lookup_report_model->r_value('enrolment_setup', 'enr_setup_id', 1, 'sem');
		//sets r_value parameters and pass it to $schYr
		$schYr = $this->lookup_report_model->r_value('enrolment_setup', 'enr_setup_id', 1, 'schYr');
         
        //SELECT * FROM 'enrolment_profile' WHERE 'isEnrolled' = 1
		$rs = $this->db->get_where('enrolment_profile', array('isEnrolled' => 1));

		//fetch/display multi-dimensional array
		return $rs->num_rows();
	}
    
    //query_NotEnrolledStudents() --> method that will count the number of students who are not enrolled
	public function query_NotEnrolledStudents(){

		//calls lookup_report_model
		$this->load->model('lookup_report_model');
		//sets r_value parameters and pass it to $sem
		$sem = $this->lookup_report_model->r_value('enrolment_setup', 'enr_setup_id', 1, 'sem');
		//sets r_value parameters and pass it to $schYr
		$schYr = $this->lookup_report_model->r_value('enrolment_setup', 'enr_setup_id', 1, 'schYr');
         
       //SELECT * FROM 'enrolment_profile' WHERE 'isEnrolled' = 0
		$rs = $this->db->get_where('enrolment_profile', array('isEnrolled' => 0));

		//fetch/display multi-dimensional array
		return $rs->num_rows();
	}
    
    //query_TotalStudents() --> method that will count the total number of students
	public function query_TotalStudents(){

		//calls lookup_report_model
		$this->load->model('lookup_report_model');
		//sets r_value parameters and pass it to $sem
		$sem = $this->lookup_report_model->r_value('enrolment_setup', 'enr_setup_id', 1, 'sem');
		//sets r_value parameters and pass it to $schYr
		$schYr = $this->lookup_report_model->r_value('enrolment_setup', 'enr_setup_id', 1, 'schYr');
         
        //SELECT * FROM 'enrolment_profile'
		$rs = $this->db->get('enrolment_profile');

		//fetch/display multi-dimensional array
		return $rs->num_rows();
	}
    
    //query_Students_BSCS() --> method that will count the number of students enrolled in BSCS
	public function query_Students_BSCS(){

		//calls lookup_report_model
		$this->load->model('lookup_report_model');
		//sets r_value parameters and pass it to $sem
		$sem = $this->lookup_report_model->r_value('enrolment_setup', 'enr_setup_id', 1, 'sem');
		//sets r_value parameters and pass it to $schYr
		$schYr = $this->lookup_report_model->r_value('enrolment_setup', 'enr_setup_id', 1, 'schYr');

      //SELECT * FROM 'students' WHERE 'course_code' = 'BSCS'
		$rs = $this->db->get_where('students', array('course_code' => 'BSCS'));

		//fetch/display multi-dimensional array
		return $rs->num_rows();

	}
    
    //query_Students_BSIS() --> method that will count the number of students enrolled in BSIS
	public function query_Students_BSIS(){

		//calls lookup_report_model
		$this->load->model('lookup_report_model');
		//sets r_value parameters and pass it to $sem
		$sem = $this->lookup_report_model->r_value('enrolment_setup', 'enr_setup_id', 1, 'sem');
		//sets r_value parameters and pass it to $schYr
		$schYr = $this->lookup_report_model->r_value('enrolment_setup', 'enr_setup_id', 1, 'schYr');

        //SELECT * FROM 'students' WHERE 'course_code' = 'BSIS'
		$rs = $this->db->get_where('students', array('course_code' => 'BSIS'));

		//fetch/display multi-dimensional array
		return $rs->num_rows();

	}
    
    //query_Students_CT() --> method that will count the number of students enrolled in CT
	public function query_Students_CT(){

		//calls lookup_report_model
		$this->load->model('lookup_report_model');
		//sets r_value parameters and pass it to $sem
		$sem = $this->lookup_report_model->r_value('enrolment_setup', 'enr_setup_id', 1, 'sem');
		//sets r_value parameters and pass it to $schYr
		$schYr = $this->lookup_report_model->r_value('enrolment_setup', 'enr_setup_id', 1, 'schYr');

        //SELECT * FROM 'students' WHERE 'course_code' = 'CT'
		$rs = $this->db->get_where('students', array('course_code' => 'CT'));

		//fetch/display multi-dimensional array
		return $rs->num_rows();

	}
    



}
?>