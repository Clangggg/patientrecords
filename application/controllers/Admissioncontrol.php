<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php 
 class Admissioncontrol extends CI_Controller {

public function opd_form(){



$data['title'] = 'Add Student Form';

$data['get_civilstat'] = $this->Record_model->get_civilstat();
$data['get_divi'] = $this->Record_model->get_divi();
$data['get_vaccinestat'] = $this->Record_model->get_vaccinestat();
$data['get_gender'] = $this->Record_model->get_gender();

$data['topbar'] = 'navbar-default';
$data['main_view'] = 'admission/opdform';

$this->load->view('layouts/central_template', $data);


}

public function opd_process(){


$this->form_validation->set_rules('lrn', 'LRN', 'trim|required|numeric|min_length[12]|max_length[12]');
$this->form_validation->set_rules('lname', 'Lastname', 'trim|required');
$this->form_validation->set_rules('fname', 'Firstname', 'trim|required');
$this->form_validation->set_rules('middlen', 'Middlename', 'trim|required');
$this->form_validation->set_rules('suffix', 'Suffix', 'trim|required');
$this->form_validation->set_rules('address', 'Address', 'required');
$this->form_validation->set_rules('occup', 'Occupation', 'required');
$this->form_validation->set_rules('age', 'Age', 'trim|required|numeric|min_length[2]|max_length[2]');
$this->form_validation->set_rules('gen', 'Gender', 'trim|required',array('required'=>'Please select gender'));
$this->form_validation->set_rules('birthplace', 'Birthplace', 'required');
$this->form_validation->set_rules('datebirth', 'Date of Birth', 'trim|required');
$this->form_validation->set_rules('civilstat', 'Civil Status', 'required');
$this->form_validation->set_rules('divi', 'Division', 'trim|required');
$this->form_validation->set_rules('vaccinestat', 'Vaccination Status', 'required');
$this->form_validation->set_rules('religion', 'Religion', 'trim|required');
$this->form_validation->set_rules('number', 'Mobile/Tel No.', 'trim|required');


if($this->form_validation->run() == FALSE) {


$data['title'] = 'Add Student Form';
$data['topbar'] = 'navbar-default';
$data['main_view'] = 'admission/opdform'; 
$data['pr_id'] = $this->Record_model->get_patient_data($pr_id);
$data['get_civilstat'] = $this->Record_model->get_civilstat();
$data['get_divi'] = $this->Record_model->get_divi();
$data['get_vaccinestat'] = $this->Record_model->get_vaccinestat();
$data['get_gender'] = $this->Record_model->get_gender();
$this->load->view('layouts/central_template', $data);


} else {

$date = date("Y-m-d"); 
$month = date("M", strtotime("+8 HOURS"));
$year = date("Y", strtotime("+8 HOURS"));


 $data = array(
   'pr_user_id' => $this->session->userdata('u_id'),
   'pr_date' =>  $date,
   'pr_id' => $this->input->post('lrn'),
   'pr_lname' => $this->input->post('lname'),
   'pr_fname' => $this->input->post('fname'),
   'pr_mname' => $this->input->post('middlen'),
   'pr_suffix' => $this->input->post('suffix'),
   'pr_addrs' => $this->input->post('address'),
   'pr_age' => $this->input->post('age'),
   'pr_gen' => $this->input->post('gen'),
   'pr_bdate' => $this->input->post('datebirth'),
   'pr_bplace' => $this->input->post('birthplace'),
   'pr_civilstat' => $this->input->post('civilstat'),
   'pr_divi' => $this->input->post('divi'),
   'pr_vaccinestat' => $this->input->post('vaccinestat'),
   'pr_number' => $this->input->post('number'),
   'pr_religion' => $this->input->post('religion'),
   'pr_occup' => $this->input->post('occup'),
   'month' => $month,
   'year' => $year
 
 );

    if($this->Record_model->patient_record($data)){
  
		$data['title'] = 'Added Student Data';
$data['topbar'] = 'navbar-default';
		$data['main_view'] = 'admission/opdform';
        
    $this->session->set_flashdata('patientrecord_success', 'Student Data Added');
		$this->load->view('layouts/central_template', $data);

    } 

   } 
	
 }



public function edit_form($pr_id){


$data['pr_id'] = $this->Record_model->get_patient_data($pr_id);
$data['title'] = 'Edit Student Form';
$data['topbar'] = 'navbar-default';
$data['get_civilstat'] = $this->Record_model->get_civilstat();
$data['get_divi'] = $this->Record_model->get_divi();
$data['get_vaccinestat'] = $this->Record_model->get_vaccinestat();
$data['get_gender'] = $this->Record_model->get_gender();

$data['main_view'] = 'admission/edit_opd_view';




$this->load->view('layouts/central_template', $data);


}




public function edit_opd_form($pr_id) {

$this->form_validation->set_rules('date', 'Date', 'required');
$this->form_validation->set_rules('lrn', 'LRN', 'required|numeric|min_length[12]|max_length[12]');
$this->form_validation->set_rules('lname', 'Lastname', 'required');
$this->form_validation->set_rules('fname', 'Firstname', 'required');
$this->form_validation->set_rules('middlen', 'Middlename', 'required');
$this->form_validation->set_rules('suffix', 'Suffix', 'required');
$this->form_validation->set_rules('address', 'Address', 'required');
$this->form_validation->set_rules('birthplace', 'Birthplace', 'required');
$this->form_validation->set_rules('occup', 'Occupation', 'required');
$this->form_validation->set_rules('age', 'Age', 'required|numeric|min_length[2]|max_length[2]');
$this->form_validation->set_rules('gen', 'Gender', 'required',array('required'=>'Please select gender'));
$this->form_validation->set_rules('datebirth', 'Date of Birth', 'required');
$this->form_validation->set_rules('civilstat', 'Civil Status', 'required');
$this->form_validation->set_rules('divi', 'Division', 'required');
$this->form_validation->set_rules('vaccinestat', 'Vaccination Status', 'required');
$this->form_validation->set_rules('religion', 'Religion', 'required');
$this->form_validation->set_rules('number', 'Mobile/Tel No.', 'required');


if($this->form_validation->run() == FALSE) {


$data['title'] = 'Edit Student Form';
$data['topbar'] = 'navbar-default';
$data['main_view'] = 'admission/edit_opd_view'; 
$data['pr_id'] = $this->Record_model->get_patient_data($pr_id);
$data['get_civilstat'] = $this->Record_model->get_civilstat();
$data['get_divi'] = $this->Record_model->get_divi();
$data['get_vaccinestat'] = $this->Record_model->get_vaccinestat();
$data['get_gender'] = $this->Record_model->get_gender();
$this->load->view('layouts/central_template', $data);


} else {

 $data = array(
   'pr_user_id' => $this->session->userdata('u_id'),
   'pr_date' => $this->input->post('date'),
   'pr_id' => $this->input->post('lrn'),
   'pr_lname' => $this->input->post('lname'),
   'pr_fname' => $this->input->post('fname'),
   'pr_mname' => $this->input->post('middlen'),
   'pr_suffix' => $this->input->post('suffix'),
   'pr_addrs' => $this->input->post('address'),
   'pr_age' => $this->input->post('age'),
   'pr_gen' => $this->input->post('gen'),
   'pr_bdate' => $this->input->post('datebirth'),
   'pr_bplace' => $this->input->post('birthplace'),
   'pr_civilstat' => $this->input->post('civilstat'),
   'pr_divi' => $this->input->post('divi'),
   'pr_vaccinestat' => $this->input->post('vaccinestat'),
   'pr_number' => $this->input->post('number'),
   'pr_religion' => $this->input->post('religion'),
   'pr_occup' => $this->input->post('occup')

 );

 if($this->Record_model->update_patient_info($pr_id, $data)){

    $data['title'] = 'Edit Student Data';
    $data['topbar'] = 'navbar-default';
    $data['main_view'] = 'admission/edit_opd_view';
    $data['pr_id'] = $this->Record_model->get_patient_data($pr_id);
    $this->session->set_flashdata('patientrecord_updated', 'Student Data Updated');
    redirect('admissioncontrol/admitdatatable', $data);

  }

 } 

}


public function patient_edit_option($pr_id) {


   $data['get_data'] = $this->Record_model->get_patient_data($pr_id);
   $data['title'] = "Edit Student Details";
   $data['topbar'] = 'navbar-default';
   $data['get_civilstat'] = $this->Record_model->get_civilstat();
   $data['get_divi'] = $this->Record_model->get_divi();
   $data['get_vaccinestat'] = $this->Record_model->get_vaccinestat();
   $data['get_gender'] = $this->Record_model->get_gender();
   $data['edit_option_view'] = 'admission/patient_edit_option';
   $data['main_view'] = 'admission/patient_editoption_view';
   $data['get_findings_data'] = $this->Record_model->get_patient_findings_id($pr_id); 
   $data['get_admission_data'] = $this->Record_model->get_patient_admission_id($pr_id);



   $this->load->view('layouts/central_template', $data);



}



public function edit_option_process($pr_id) {


$this->form_validation->set_rules('e_address', 'Address', 'required');
$this->form_validation->set_rules('e_occup', 'Occupation', 'required');
$this->form_validation->set_rules('e_age', 'Age', 'trim|required|numeric|min_length[2]|max_length[2]');
$this->form_validation->set_rules('e_gen', 'Gender', 'trim|required',array('required'=>'Please select gender'));
$this->form_validation->set_rules('e_bplace', 'Birthplace', 'required');
$this->form_validation->set_rules('e_bdate', 'Date of Birth', 'trim|required');
$this->form_validation->set_rules('e_civilstat', 'Civil Status', 'required');
$this->form_validation->set_rules('e_divi', 'Division', 'trim|required');
$this->form_validation->set_rules('e_vaccinestat', 'Vaccination Status', 'required');
$this->form_validation->set_rules('e_religion', 'Religion', 'trim|required');
$this->form_validation->set_rules('e_number', 'Mobile/Tel No.', 'trim|required|min_length[11]|max_length[11]');
$this->form_validation->set_rules('e_date', 'Date Added', 'trim|required');


if($this->form_validation->run() == FALSE) {
   $data['get_civilstat'] = $this->Record_model->get_civilstat();
   $data['get_divi'] = $this->Record_model->get_divi();
   $data['get_vaccinestat'] = $this->Record_model->get_vaccinestat();
   $data['get_gender'] = $this->Record_model->get_gender();
   $data['title'] = "Edit Student Details";
   $data['get_data'] = $this->Record_model->get_patient_data($pr_id);
   $data['get_findings_data'] = $this->Record_model->get_patient_findings_id($pr_id); 
   $data['topbar'] = 'navbar-default';
   $data['edit_option_view'] = 'admission/patient_edit_option';
   $data['main_view'] = 'admission/patient_editoption_view';
   $data['get_admission_data'] = $this->Record_model->get_patient_admission_id($pr_id);


   $this->load->view('layouts/central_template', $data);

} else {

 $data = array(

   'pr_user_id' => $this->session->userdata('u_id'),
   'pr_addrs' => $this->input->post('e_address'),
   'pr_age' => $this->input->post('e_age'),
   'pr_gen' => $this->input->post('e_gen'),
   'pr_bdate' => $this->input->post('e_bdate'),
   'pr_bplace' => $this->input->post('e_bplace'),
   'pr_civilstat' => $this->input->post('e_civilstat'),
   'pr_divi' => $this->input->post('e_divi'),
   'pr_vaccinestat' => $this->input->post('e_vaccinestat'),
   'pr_number' => $this->input->post('e_number'),
   'pr_religion' => $this->input->post('e_religion'),
   'pr_occup' => $this->input->post('e_occup'),
   'pr_date' => $this->input->post('e_date')

 );

 if($this->Record_model->update_patient_info($pr_id, $data)){


   $data['get_data'] = $this->Record_model->get_patient_data($pr_id);
   $data['title'] = "Student Details";
   $data['get_civilstat'] = $this->Record_model->get_civilstat();
   $data['get_divi'] = $this->Record_model->get_divi();
   $data['get_vaccinestat'] = $this->Record_model->get_vaccinestat();
   $data['get_findings_data'] = $this->Record_model->get_patient_findings_id($pr_id); 
   $data['get_admission_data'] = $this->Record_model->get_patient_admission_id($pr_id);

   $data['topbar'] = 'navbar-default';
   $data['main_view'] = 'admission/patientdataview';

    $this->session->set_flashdata('patientrecordoption_updated', 'Student Details Updated');
   $this->load->view('layouts/central_template', $data);

  }

 } 

}

    
 public function admitdatatable() { // user id who insert data on datatable
  
 if($this->session->userdata('logged_in')) {
  
   $u_id = $this->session->userdata('u_id');
    
    
    $data['get_data'] = $this->Record_model->get_patient_records($u_id);

    $data['title'] = 'Records Table'; 
    $data['topbar'] = 'navbar-default';
    $data['main_view'] = 'admission/admitdatatable';
 
    $this->load->view('layouts/central_template', $data);


 } 
  
}


public function patientdataview($pr_id){

$data['get_data'] = $this->Record_model->get_patient_data($pr_id);

$data['get_findings_data'] = $this->Record_model->get_patient_findings_id($pr_id); 

$data['get_admission_data'] = $this->Record_model->get_patient_admission_id($pr_id);


$data['title'] = "Student Records";
$data['topbar'] = 'navbar-default';
$data['main_view'] = 'admission/patientdataview';
$this->load->view('layouts/central_template', $data);


}









public function add_findings($pr_id){

 
$this->form_validation->set_rules('a_history', 'History of Present Illness', 'required');
$this->form_validation->set_rules('a_bp', 'Blood Pressure', 'required');
$this->form_validation->set_rules('a_rr', 'Respiratory Rate', 'required');
$this->form_validation->set_rules('a_pulse', 'Pulserate', 'required');
$this->form_validation->set_rules('a_cr', 'Capillary Refill', 'required');
$this->form_validation->set_rules('a_temp', 'Temperature', 'required');
$this->form_validation->set_rules('a_wt', 'Weight', 'required');
$this->form_validation->set_rules('a_pr', 'Pulse Rate', 'required');
$this->form_validation->set_rules('a_physician', 'Attending Physician', 'required');
$this->form_validation->set_rules('a_oralphys', 'Oral Physician', 'required');



if($this->form_validation->run() == FALSE){
 
 $patient_id = $this->Record_model->get_patient_data($pr_id);
 $data['get_data'] = $this->Record_model->get_patient_data($pr_id);
 $data['get_details'] = $this->Record_model->get_details($pr_id);
 $data['fieldsphysician'] = $this->Record_model->fetch_medical_field();
 $data['add_physician'] = $this->Record_model->get_physician();
 $data['get_remarks'] = $this->Record_model->get_remarks();
 $data['get_cr'] = $this->Record_model->get_cr();
 $data['title'] = "Add Health Examination";
 $data['topbar'] = 'navbar-default';
$data['get_admission_data'] = $this->Record_model->get_patient_admission_id($pr_id);
$data['get_findings_data'] = $this->Record_model->get_patient_findings_id($pr_id);


 $data['add_findings'] = "admission/addfindingsform";
 $data['main_view'] = 'admission/addfindings_view';

 $this->load->view('layouts/central_template', $data);


} else {
   
   
  $date = date("Y-m-d");

   $data = array(
   'pr_findings_id' => $pr_id,
   'f_historypresentillness' => $this->input->post('a_history'),
   'f_bp' => $this->input->post('a_bp'),
   'f_rr' => $this->input->post('a_rr'),
   'f_pulse' => $this->input->post('a_pulse'),
   'f_cr' => $this->input->post('a_cr'),
   'f_temp' => $this->input->post('a_temp'),
   'f_wt' => $this->input->post('a_wt'),
   'f_pr' => $this->input->post('a_pr'),
   'f_nameofphysician' => $this->input->post('a_physician'),
   'f_date' => $date
   );

   
    if($this->Record_model->add_findings_data($pr_id, $data)){
      
      $patient_id = $this->Record_model->get_patient_data($pr_id);
      $data['get_data'] = $this->Record_model->get_patient_data($pr_id);
      $data['add_physician'] = $this->Record_model->get_physician();
      $data['get_remarks'] = $this->Record_model->get_remarks();
      $data['get_cr'] = $this->Record_model->get_cr();
      $data['get_details'] = $this->Record_model->get_details();
      $data['title'] = "Add Health Examination";
      $data['topbar'] = 'navbar-default';
      $data['get_admission_data'] = $this->Record_model->get_patient_admission_id($pr_id);
      $data['get_findings_data'] = $this->Record_model->get_patient_findings_id($pr_id);


      $data['add_findings'] = "admission/addfindingsform";
      $data['main_view'] = 'admission/addfindings_view';
  
      $this->session->set_flashdata('add_finding_success', 'Findings Added');
      redirect('admissioncontrol/patientdataview/'.$pr_id.'#findings', $data);


    }

}



}






public function edit_findings($findings_id){


$this->form_validation->set_rules('e_chief_complaint', 'Chief Complaint', 'required');
$this->form_validation->set_rules('e_historyillness', 'History of Present Illness', 'required');
$this->form_validation->set_rules('e_bp', 'Blood Pressure', 'required');
$this->form_validation->set_rules('e_rr', 'Respiratory Rate', 'required');
$this->form_validation->set_rules('e_pulse', 'Pulserate', 'required');
$this->form_validation->set_rules('e_cr', 'Capillary Refill', 'required');
$this->form_validation->set_rules('e_temp', 'Temperature', 'required');
$this->form_validation->set_rules('e_wt', 'Weight', 'required');
$this->form_validation->set_rules('e_pr', 'Pulse Rate', 'required');
$this->form_validation->set_rules('e_physicalexam', 'Physical Examination', 'required');
$this->form_validation->set_rules('e_diagnosis', 'Diagnosis', 'required');
$this->form_validation->set_rules('e_medical_treatment', 'Medication/Treatment', 'required');
$this->form_validation->set_rules('e_physician', 'Attending Physician', 'required');
$this->form_validation->set_rules('e_allergy', 'Allergy', 'required');
$this->form_validation->set_rules('e_anemia', 'Anemia', 'required');
$this->form_validation->set_rules('e_asthma', 'Asthma', 'required');
$this->form_validation->set_rules('e_hailment', 'Heart Ailment', 'required');
$this->form_validation->set_rules('e_diabetes', 'Diabetes', 'required');
$this->form_validation->set_rules('e_bleeding', 'Bleeding Problem', 'required');
$this->form_validation->set_rules('e_epilepsy', 'Epilepsy', 'required');
$this->form_validation->set_rules('e_kidney', 'Kidney disease', 'required');
$this->form_validation->set_rules('e_convulsion', 'Convulsion', 'required');
$this->form_validation->set_rules('e_fainting', 'Fainting', 'required');


if($this->form_validation->run() == FALSE){
 

 $data['get_findings_view'] = $this->Record_model->get_data_findings($findings_id);

 
 $data['title'] = "Edit Health Examination";
 $data['topbar'] = 'navbar-default';
 $data['add_physician'] = $this->Record_model->get_physician();
 $data['get_remarks'] = $this->Record_model->get_remarks();
 $data['get_status'] = $this->Record_model->get_status();
 $data['get_cr'] = $this->Record_model->get_cr();
 $data['get_details'] = $this->Record_model->get_details();
 $data['edit_findings'] = "admission/editfindingsform";
 $data['main_view'] = 'admission/editfindings_view';

 $this->load->view('layouts/central_template', $data);


} else {


    $finding_update_id = $this->Record_model->get_findings_id_update($findings_id);

   $data = array(
   'pr_findings_id' => $finding_update_id,
   'f_chiefcomplaint' => $this->input->post('e_chief_complaint'),
   'f_historypresentillness' => $this->input->post('e_historyillness'),
   'f_bp' => $this->input->post('e_bp'),
   'f_rr' => $this->input->post('e_rr'),
   'f_pulse' => $this->input->post('e_pulse'),
   'f_cr' => $this->input->post('e_cr'),
   'f_temp' => $this->input->post('e_temp'),
   'f_wt' => $this->input->post('e_wt'),
   'f_pr' => $this->input->post('e_pr'),
   'f_physicalexam' => $this->input->post('e_physicalexam'),
   'f_diagnosis' => $this->input->post('e_diagnosis'),
   'f_medication' => $this->input->post('e_medical_treatment'),
   'f_lungs' => $this->input->post('e_lungs'),
   'f_mouth' => $this->input->post('e_mouth'),
   'f_abdo' => $this->input->post('e_abdo'),
   'f_spine' => $this->input->post('e_spine'),
   'f_remarks' => $this->input->post('e_remarks'),
   'f_others' => $this->input->post('e_others'),
   'f_allergy' => $this->input->post('e_allergy'),
   'f_anemia' => $this->input->post('e_anemia'),
   'f_asthma' => $this->input->post('e_asthma'),
   'f_bleeding' => $this->input->post('e_bleeding'),
   'f_hailment' => $this->input->post('e_hailment'),
   'f_diabetes' => $this->input->post('e_diabetes'),
   'f_epilepsy' => $this->input->post('e_epilepsy'),
   'f_kidney' => $this->input->post('e_kidney'),
   'f_convulsion' => $this->input->post('e_convulsion'),
   'f_fainting' => $this->input->post('e_fainting'),
   'f_nameofphysician' => $this->input->post('e_physician'),
   'f_conditionfa' => $this->input->post('e_conditionfa'),
   'f_conditionfb' => $this->input->post('e_conditionfb'),
   'f_conditionfc' => $this->input->post('e_conditionfc'),
   'f_conditionfd' => $this->input->post('e_conditionfd'),
   'f_conditionfe' => $this->input->post('e_conditionfe'),
   'f_conditionff' => $this->input->post('e_conditionff'),
   'f_conditionfg' => $this->input->post('e_conditionfg'),
   'f_conditionfh' => $this->input->post('e_conditionfh'),
   'f_conditionfi' => $this->input->post('e_conditionfi'),
   'f_conditionfj' => $this->input->post('e_conditionfj'),
   'f_conditionsa' => $this->input->post('e_conditionsa'),
   'f_conditionsb' => $this->input->post('e_conditionsb'),
   'f_conditionsc' => $this->input->post('e_conditionsc'),
   'f_conditionsd' => $this->input->post('e_conditionsd'),
   'f_conditionse' => $this->input->post('e_conditionse'),
   'f_conditionsf' => $this->input->post('e_conditionsf'),
   'f_conditionsg' => $this->input->post('e_conditionsg'),
   'f_conditionsh' => $this->input->post('e_conditionsh'),
   'f_conditionsi' => $this->input->post('e_conditionsi'),
   'f_conditionsj' => $this->input->post('e_conditionsj'),
   'f_conditionsk' => $this->input->post('e_conditionsk'),
   'f_conditionsl' => $this->input->post('e_conditionsl'),
   'f_conditionsm' => $this->input->post('e_conditionsm'),
   'f_conditionsn' => $this->input->post('e_conditionsn'),
   'f_conditionso' => $this->input->post('e_conditionso'),
   'f_conditionsp' => $this->input->post('e_conditionsp'),
   'f_conditionta' => $this->input->post('e_conditionta'),
   'f_conditiontb' => $this->input->post('e_conditiontb'),
   'f_conditiontc' => $this->input->post('e_conditiontc'),
   'f_conditiontd' => $this->input->post('e_conditiontd'),
   'f_conditionte' => $this->input->post('e_conditionte'),
   'f_conditiontf' => $this->input->post('e_conditiontf'),
   'f_conditiontg' => $this->input->post('e_conditiontg'),
   'f_conditionth' => $this->input->post('e_conditionth'),
   'f_conditionti' => $this->input->post('e_conditionti'),
   'f_conditiontj' => $this->input->post('e_conditiontj'),
   'f_conditiontk' => $this->input->post('e_conditiontk'),
   'f_conditiontl' => $this->input->post('e_conditiontl'),
   'f_conditiontm' => $this->input->post('e_conditiontm'),
   'f_conditiontn' => $this->input->post('e_conditiontn'),
   'f_conditionto' => $this->input->post('e_conditionto'),
   'f_conditiontp' => $this->input->post('e_conditiontp'),
   'f_conditionla' => $this->input->post('e_conditionla'),
   'f_conditionlb' => $this->input->post('e_conditionlb'),
   'f_conditionlc' => $this->input->post('e_conditionlc'),
   'f_conditionld' => $this->input->post('e_conditionld'),
   'f_conditionle' => $this->input->post('e_conditionle'),
   'f_conditionlf' => $this->input->post('e_conditionlf'),
   'f_conditionlg' => $this->input->post('e_conditionlg'),
   'f_conditionlh' => $this->input->post('e_conditionlh'),
   'f_conditionli' => $this->input->post('e_conditionli'),
   'f_conditionlj' => $this->input->post('e_conditionlj'),
   'f_treatfa' => $this->input->post('e_treatfa'),
   'f_treatfb' => $this->input->post('e_treatfb'),
   'f_treatfc' => $this->input->post('e_treatfc'),
   'f_treatfd' => $this->input->post('e_treatfd'),
   'f_treatfe' => $this->input->post('e_treatfe'),
   'f_treatff' => $this->input->post('e_treatff'),
   'f_treatfg' => $this->input->post('e_treatfg'),
   'f_treatfh' => $this->input->post('e_treatfh'),
   'f_treatfi' => $this->input->post('e_treatfi'),
   'f_treatfj' => $this->input->post('e_treatfj'),
   'f_treatfk' => $this->input->post('e_treatfk'),
   'f_treatfl' => $this->input->post('e_treatfl'),
   'f_treatfm' => $this->input->post('e_treatfm'),
   'f_treatfn' => $this->input->post('e_treatfn'),
   'f_treatfo' => $this->input->post('e_treatfo'),
   'f_treatfp' => $this->input->post('e_treatfp'),
   'f_treatsa' => $this->input->post('e_treatsa'),
   'f_treatsb' => $this->input->post('e_treatsb'),
   'f_treatsc' => $this->input->post('e_treatsc'),
   'f_treatsd' => $this->input->post('e_treatsd'),
   'f_treatse' => $this->input->post('e_treatse'),
   'f_treatsf' => $this->input->post('e_treatsf'),
   'f_treatsg' => $this->input->post('e_treatsg'),
   'f_treatsh' => $this->input->post('e_treatsh'),
   'f_treatsi' => $this->input->post('e_treatsi'),
   'f_treatsj' => $this->input->post('e_treatsj'),
   'f_treatsk' => $this->input->post('e_treatsk'),
   'f_treatsl' => $this->input->post('e_treatsl'),
   'f_treatsm' => $this->input->post('e_treatsm'),
   'f_treatsn' => $this->input->post('e_treatsn'),
   'f_treatso' => $this->input->post('e_treatso'),
   'f_treatsp' => $this->input->post('e_treatsp'),
   'f_mouthexam' => $this->input->post('e_mouthexam'),
   'f_seal' => $this->input->post('e_seal'),
   'f_gum' => $this->input->post('e_gum'),
   'f_refer' => $this->input->post('e_refer'),
   'f_perm' => $this->input->post('e_perm'),
   'f_extra' => $this->input->post('e_extra'),
   'f_prohy' => $this->input->post('e_prohy'),
   'f_otheroral' => $this->input->post('e_otheroral'),
   'f_oralphys' => $this->input->post('e_oralphys'),
   'f_art' => $this->input->post('e_art'),
   'f_rmouthexam' => $this->input->post('e_rmouthexam'),
   'f_rseal' => $this->input->post('e_rseal'),
   'f_rgum' => $this->input->post('e_rgum'),
   'f_rrefer' => $this->input->post('e_rrefer'),
   'f_rperm' => $this->input->post('e_rperm'),
   'f_rextra' => $this->input->post('e_rextra'),
   'f_rprohy' => $this->input->post('e_rprohy'),
   'f_rotheroral' => $this->input->post('e_rotheroral'),
   'f_oralphys' => $this->input->post('e_oralphys'),
   'f_rart' => $this->input->post('e_rart'),
   'f_ging' => $this->input->post('e_ging'),
   'f_period' => $this->input->post('e_period'),
   'f_malo' => $this->input->post('e_malo'),
   'f_super' => $this->input->post('e_super'),
   'f_ulcer' => $this->input->post('e_ulcer'),
   'f_calcu' => $this->input->post('e_calcu'),
   'f_cleft' => $this->input->post('e_cleft'),
   'f_root' => $this->input->post('e_root'),
   'f_flu' => $this->input->post('e_flu'),
   'f_specify' => $this->input->post('e_specify'),
   'f_decay' => $this->input->post('e_decay'),
   'f_missing' => $this->input->post('e_missing'),
   'f_filled' => $this->input->post('e_filled'),
   'f_total' => $this->input->post('e_total'),
   'f_sound' => $this->input->post('e_sound'),
   'f_oraldate' => $this->input->post('e_oraldate'),
   );

   
    if($this->Record_model->edit_findings_data($findings_id, $data)){
      
    
      $data['get_findings_view'] = $this->Record_model->get_data_findings($findings_id);

      $data['title'] = "Health Examination";
      $data['topbar'] = 'navbar-default';
      $data['add_physician'] = $this->Record_model->get_physician();
      $data['get_remarks'] = $this->Record_model->get_remarks();
      $data['get_cr'] = $this->Record_model->get_cr();
      $data['get_details'] = $this->Record_model->get_details();
      $data['get_status'] = $this->Record_model->get_status();
      $data['edit_findings'] = "admission/editfindingsform";
      $data['main_view'] = 'admission/editfindings_view';
  
      $this->session->set_flashdata('edit_finding_success', 'Findings Updated ');
      redirect('admissioncontrol/findingsview/'.$findings_id.'#findings', $data);


    }

}



  
}


public function findingsview($findings_id){


    
      $data['get_findings_view'] = $this->Record_model->get_data_findings($findings_id);


      $data['title'] = "Health Examination";
      $data['topbar'] = 'navbar-default';
      $data['main_view'] = 'admission/findingsdataview';
  
     $this->load->view('layouts/central_template', $data);
  


}








public function admit_form($pr_id){

 
$this->form_validation->set_rules('a_wards', 'Wards', 'trim|required',array('required'=>'Please select ward'));
$this->form_validation->set_rules('a_chargeaccount', 'Charge Account to');
$this->form_validation->set_rules('a_relationtopatient', 'Relation to Patient');



if($this->form_validation->run() == FALSE){
 
 $patient_id = $this->Record_model->get_patient_data($pr_id);
  $data['get_findings_data'] = $this->Record_model->get_patient_findings_id($pr_id);
 $data['get_data'] = $this->Record_model->get_patient_data($pr_id);
 $data['get_remarks'] = $this->Record_model->get_remarks();
 $data['get_ward'] = $this->Record_model->get_ward();
 $data['title'] = "Add Clinical Visit";
 $data['topbar'] = 'navbar-default';
 $data['admitting_view'] = "admission/admitting_form";
 $data['main_view'] = 'admission/admitting_view';

 $this->load->view('layouts/central_template', $data);


} else {
   
   
  $admissiondate = date("Y-m-d");



   $data = array(
   'pr_admission_id' => $pr_id,
   'ad_wardname' => $this->input->post('a_wards'),

   'ad_date' => $admissiondate,
   'ad_relationtopatient' => $this->input->post('a_relationtopatient'),
   );

   
    if($this->Record_model->add_admission_data($pr_id, $data)){
      
      $patient_id = $this->Record_model->get_patient_data($pr_id);
       $data['get_findings_data'] = $this->Record_model->get_patient_findings_id($pr_id);
      $data['get_data'] = $this->Record_model->get_patient_data($pr_id);
      $data['title'] = "Admit Patient";
      $data['topbar'] = 'navbar-default';
      $data['admitting_view'] = "admission/admitting_form";
      $data['main_view'] = 'admission/admitting_view';
  
      $this->session->set_flashdata('add_admit_success', 'Record Added');
      redirect('admissioncontrol/patientdataview/'.$pr_id.'#admission', $data);


    }

}

}







public function edit_admission($admission_id){

$this->form_validation->set_rules('e_wardname', 'Wards');

$this->form_validation->set_rules('e_chargeofaccount', 'Charge Account to');
$this->form_validation->set_rules('e_relationtopatient', 'Relation to Patient');



if($this->form_validation->run() == FALSE){
 
$data['get_data_admission'] = $this->Record_model->get_data_admission($admission_id);

 $data['get_physician'] = $this->Record_model->get_physician();
 $data['get_ward'] = $this->Record_model->get_ward();
 $data['title'] = "Edit Admission";
 $data['topbar'] = 'navbar-default';
 $data['edit_admitting_view'] = "admission/edit_admission_form";
 $data['main_view'] = 'admission/edit_admission_view';

 $this->load->view('layouts/central_template', $data);


} else {
   
   
  $admission_update_id = $this->Record_model->get_admission_id_update($admission_id);


   $data = array(
   'pr_admission_id' => $admission_update_id,   

   'ad_wardname' => $this->input->post('e_wardname'),
   'ad_relationtopatient' => $this->input->post('e_relationtopatient'),

   
   );

   
    if($this->Record_model->update_admission_data($admission_id, $data)){

      $data['get_data_admission'] = $this->Record_model->get_data_admission($admission_id);
      
       $data['get_physician'] = $this->Record_model->get_physician();
      $data['title'] = "Edit Admission";
      $data['topbar'] = 'navbar-default';
      $data['admitting_view'] = "admission/edit_admission_form";
      $data['main_view'] = 'admission/edit_admission_view';
  
      $this->session->set_flashdata('edit_admit_success', 'Admission Updated');
      redirect('admissioncontrol/admissionview/'.$admission_id.'#admission', $data);


    }

}



}


// public function admissionview($admission_id){


    
//       $data['get_admission_view'] = $this->Record_model->get_data_admission($admission_id);

//       $data['get_remarks'] = $this->Record_model->get_remarks();
//       $data['get_ward'] = $this->Record_model->get_ward();
//       $data['title'] = "Admission Records";
//       $data['topbar'] = 'navbar-default';
//       $data['main_view'] = 'admission/admissiondataview';
  
//      $this->load->view('layouts/central_template', $data);
  


// }



public function addfindingsdataview($findings_id){

$doctor = 'Doctor';

$data['get_user'] = $this->Record_model->get_users_account($doctor);
$data['get_findings_view'] = $this->Record_model->get_data_findings($findings_id);
$data['get_cr'] = $this->Record_model->get_cr();
$data['get_details'] = $this->Record_model->get_details();
$data['get_status'] = $this->Record_model->get_status();
$data['title'] = 'Add to Teacher';
$data['topbar'] = 'navbar-default';
$data['form'] = 'admission/addfindingsdataform';
$data['main_view'] = "admission/addfindingsdata";

$this->load->view('layouts/central_template', $data);


}



public function addadmissiondataview($admission_id){
$doctor = 'Doctor';

$data['get_user'] = $this->Record_model->get_users_account($doctor);
$data['get_admission_view'] = $this->Record_model->get_data_admission($admission_id);
$data['get_cr'] = $this->Record_model->get_cr();
$data['get_details'] = $this->Record_model->get_details();
$data['get_status'] = $this->Record_model->get_status();
$data['title'] = 'Add to Teacher';
$data['topbar'] = 'navbar-default';
$data['form'] = 'admission/addadmissiondataform';
$data['main_view'] = "admission/addadmissiondata";

$this->load->view('layouts/central_template', $data);

}
 }
 ?>