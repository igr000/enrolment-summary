<?php
/****************************************************************************************
-- Query controller class redirects user to query_enrolment_summary page when -----------
-- 'Enrolment Summary' is clicked from queries page. ------------------------------------
-----------------------------------------------------------------------------------------
-- Author:Irene Gayle Roque -------------------------------------------------------------
****************************************************************************************/
class Query extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$data['title'] = 'Queries';
		//loads Queries page and lets this page use $title
		$this->load->view('Queries', $data);
	}
	public function Enrolment_Summary(){
		$data['title'] = 'Enrolment Summary';
        //loads report model
		$this->load->model('report_model');
        //set query_EnrolledStudents method as $enrolled
		$data['enrolled'] = $this->report_model->query_EnrolledStudents();
        //set query_NotEnrolledStudents method as $not_enrolled
		$data['not_enrolled'] = $this->report_model->query_NotEnrolledStudents();
        //set query_TotalStudents method as $total_students
		$data['total_students'] = $this->report_model->query_TotalStudents();
        //set query_Students_BSCS method as $students_BSCS
		$data['students_BSCS'] = $this->report_model->query_Students_BSCS();
        //set query_Students_BSIS method as $students_BSIS
		$data['students_BSIS'] = $this->report_model->query_Students_BSIS();
		//set query_Students_CT method as $students_CT
		$data['students_CT'] = $this->report_model->query_Students_CT();
        
        //loads query_enrolment_summary along with all values passed to $data
		$this->load->view('query_enrolment_summary', $data);

		
	}
}
?>
