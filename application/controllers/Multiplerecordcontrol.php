
<?php 



class Multiplerecordcontrol extends CI_Controller {




  public function importuser() {
   
   

    // Check form submit or not 
    if($this->input->post('upload') != NULL ){ 
        $data = array(); 
        if(!empty($_FILES['file']['name'])){ 
          // Set preference 
          $config['upload_path'] = 'assets/files/'; 
          $config['allowed_types'] = 'csv'; 
          $config['max_size'] = '1000'; // max_size in kb 
          $config['file_name'] = $_FILES['file']['name']; 

          // Load upload library 
          $this->load->library('upload',$config); 
   
          // File upload
          if($this->upload->do_upload('file')){ 
            // Get data about the file
            $uploadData = $this->upload->data(); 
            $filename = $uploadData['file_name']; 

            // Reading file
                    $file = fopen("assets/files/".$filename,"r");
                    $i = 0;

                    $importData_arr = array();
                       
                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                        $num = count($filedata);

                        for ($c=0; $c < $num; $c++) {
                            $importData_arr[$i][] = $filedata[$c];
                        }
                        $i++;
                    }
                    fclose($file);

                    $skip = 0;

                    // insert import data
                    foreach($importData_arr as $userdata){
                        if($skip != 0){
                          
                          
                            $this->Multiplerecord_model->insertUser($userdata);
                            
                        }
                        $skip ++;
                    }

            $data['response'] = 'successfully uploaded '.$filename;
      
            redirect('usercontrol/newlogin', $data); 

          } else{ 
  
            
       
            $this->session->set_flashdata('import_record_failed', 'Student Already Exist');
             redirect('admissioncontrol/admitdatatable', $data); 
         

          } 
        } else{ 
  
            
             $data['response'] = "failed";
             $this->session->set_flashdata('import_record_failed', 'Student Already Exist');
            $data['topbar'] = 'navbar-default';
           $data['main_view'] = 'admission/admitdatatable';
           $this->load->view('layouts/central_template',$data); 
           
        } 
      
      } else{
       
            
             $data['response'] = "failed";
             $this->session->set_flashdata('import_record_failed', 'Student Already Exist');
            $data['topbar'] = 'navbar-default';
           $data['main_view'] = 'admission/admitdatatable';
           $this->load->view('layouts/central_template',$data); 
           
      } 

  }





public function multiplerecordview(){
 

   $data['add_physician'] = $this->Multiplerecord_model->get_physician();
   $data['get_details'] = $this->Multiplerecord_model->get_details();
   $data['get_cr'] = $this->Multiplerecord_model->get_cr();
   $data['get_remarks'] = $this->Multiplerecord_model->get_remarks();
   $data['get_status'] = $this->Multiplerecord_model->get_status();
    $data['title'] = 'Student Health Examination'; 
     $data['topbar'] = 'multiplerecordinsert/multiplerecordnavbar';
    $data['opd_form'] = 'multiplerecordinsert/opdfindingsforminsertion';
    $data['main_view'] = 'multiplerecordinsert/multiplerecordview';
 
    $this->load->view('layouts/central_template', $data);


}
 



public function add_multiple_findings(){


$this->form_validation->set_rules('a_casenumber', 'Student LRN', 'trim|required|numeric|min_length[12]|max_length[12]');
$this->form_validation->set_rules('a_chief_complaint', 'Chief Complaint');
$this->form_validation->set_rules('a_historyillness', 'History of Present Illness', 'required');
$this->form_validation->set_rules('a_bp', 'Blood Pressure');
$this->form_validation->set_rules('a_rr', 'Respiratory Rate');
$this->form_validation->set_rules('a_pulse', 'Pulserate');
$this->form_validation->set_rules('a_cr', 'Capillary Refill');
$this->form_validation->set_rules('a_temp', 'Temperature');
$this->form_validation->set_rules('a_wt', 'Weight');
$this->form_validation->set_rules('a_pr', 'Pulse Rate');
$this->form_validation->set_rules('a_physicalexam', 'Physical Examination');
$this->form_validation->set_rules('a_diagnosis', 'Diagnosis', 'required');
$this->form_validation->set_rules('a_medical_treatment', 'Medication/Treatment', 'required');
$this->form_validation->set_rules('a_mouth', 'Mouth', 'required');
$this->form_validation->set_rules('a_lungs', 'Lungs', 'required');
$this->form_validation->set_rules('a_abdo', 'Abdomen', 'required');
$this->form_validation->set_rules('a_spine', 'Spine', 'required');
$this->form_validation->set_rules('a_remarks', 'Remarks', 'required');
$this->form_validation->set_rules('a_others', 'Others', 'required');
$this->form_validation->set_rules('a_allergy', 'Allergy', 'required');
$this->form_validation->set_rules('a_asthma', 'Asthma', 'required');
$this->form_validation->set_rules('a_anemia', 'Anemia', 'required');
$this->form_validation->set_rules('a_bleeding', 'Bleeding problem', 'required');
$this->form_validation->set_rules('a_hailment', 'Heart ailment', 'required');
$this->form_validation->set_rules('a_diabetes', 'Diabetes', 'required');
$this->form_validation->set_rules('a_epilepsy', 'Epilepsy', 'required');
$this->form_validation->set_rules('a_kidney', 'Kidney problem', 'required');
$this->form_validation->set_rules('a_convulsion', 'Convulsion', 'required');
$this->form_validation->set_rules('a_fainting', 'Fainting', 'required');
$this->form_validation->set_rules('a_physician', 'Attending Physician', 'trim|required',array('required'=>'Please select physician'));
$this->form_validation->set_rules('a_date', 'Date', 'required');




if($this->form_validation->run() == FALSE){
 
 $data['add_physician'] = $this->Multiplerecord_model->get_physician();
 $data['get_details'] = $this->Multiplerecord_model->get_details();
 $data['get_cr'] = $this->Multiplerecord_model->get_cr();
 $data['get_remarks'] = $this->Multiplerecord_model->get_remarks();
 $data['get_status'] = $this->Multiplerecord_model->get_status();
 $data['title'] = "Add Student Health Examination";
 $data['topbar'] = 'multiplerecordinsert/multiplerecordnavbar';
  $data['opd_form'] = 'multiplerecordinsert/opdfindingsforminsertion';
 $data['main_view'] = 'multiplerecordinsert/multiplerecordview';
  

 $this->load->view('layouts/central_template', $data);


} else {
   
   
  $date = date("Y-m-d");


   $data = array(
   'pr_findings_id' => $this->input->post('a_casenumber'),
   'f_chiefcomplaint' => $this->input->post('a_chief_complaint'),
   'f_historypresentillness' => $this->input->post('a_historyillness'),
   'f_bp' => $this->input->post('a_bp'),
   'f_rr' => $this->input->post('a_rr'),
   'f_pulse' => $this->input->post('a_pulse'),
   'f_cr' => $this->input->post('a_cr'),
   'f_temp' => $this->input->post('a_temp'),
   'f_wt' => $this->input->post('a_wt'),
   'f_pr' => $this->input->post('a_pr'),
   'f_physicalexam' => $this->input->post('a_physicalexam'),
   'f_diagnosis' => $this->input->post('a_diagnosis'),
   'f_medication' => $this->input->post('a_medical_treatment'),
   'f_mouth' => $this->input->post('a_mouth'),
   'f_lungs' => $this->input->post('a_lungs'),
   'f_abdo' => $this->input->post('a_abdo'),
   'f_spine' => $this->input->post('a_spine'),
   'f_remarks' => $this->input->post('a_remarks'),
   'f_others' => $this->input->post('a_others'),
   'f_allergy' => $this->input->post('a_allergy'),
   'f_asthma' => $this->input->post('a_asthma'),
   'f_anemia' => $this->input->post('a_anemia'),
   'f_bleeding' => $this->input->post('a_bleeding'),
   'f_hailment' => $this->input->post('a_hailment'),
   'f_diabetes' => $this->input->post('a_diabetes'),
   'f_epilepsy' => $this->input->post('a_epilepsy'),
   'f_kidney' => $this->input->post('a_kidney'),
   'f_convulsion' => $this->input->post('a_convulsion'),
   'f_fainting' => $this->input->post('a_fainting'),
   'f_nameofphysician' => $this->input->post('a_physician'),
   'f_date' => $this->input->post('a_date')
   );

   
    if($this->Multiplerecord_model->patientFinding($data)){
      
      $data['add_physician'] = $this->Multiplerecord_model->get_physician();
      $data['get_details'] = $this->Multiplerecord_model->get_details();
      $data['get_cr'] = $this->Multiplerecord_model->get_cr();
      $data['get_remarks'] = $this->Multiplerecord_model->get_remarks();
      $data['get_status'] = $this->Multiplerecord_model->get_status();
      $data['title'] = "Add Student Health Examination";
      $data['topbar'] = 'multiplerecordinsert/multiplerecordnavbar';
       $data['opd_form'] = 'multiplerecordinsert/opdfindingsforminsertion';
       $data['main_view'] = 'multiplerecordinsert/multiplerecordview';
  
      $this->session->set_flashdata('add_multiple_findings', 'Student Health Record Added');
      redirect('Multiplerecordcontrol/multiplerecordview/#Findings', $data);


    }

}




}



public function admissionviewform(){



    $data['title'] = 'Clinical Visit'; 
     $data['topbar'] = 'multiplerecordinsert/multiplerecordnavbar';
     $data['get_ward'] = $this->Multiplerecord_model->get_ward();
   $data['admission_form'] = 'multiplerecordinsert/admissionrecordforminsertion';
    $data['main_view'] = 'multiplerecordinsert/multiplerecordadmissionview';
 
    $this->load->view('layouts/central_template', $data);





}


public function add_multiple_admission(){

$this->form_validation->set_rules('a_caseno','Patient Case Number', 'required|numeric|min_length[12]|max_length[12]');
$this->form_validation->set_rules('a_date','Date', 'required');
$this->form_validation->set_rules('a_relationtopatient', 'Relation to Patient');
$this->form_validation->set_rules('a_wards', 'Wards');


if($this->form_validation->run() == FALSE){
 
 $data['get_ward'] = $this->Multiplerecord_model->get_ward();
 $data['title'] = "Clinical Visit";
 $data['topbar'] = 'multiplerecordinsert/multiplerecordnavbar';
   $data['admission_form'] = 'multiplerecordinsert/admissionrecordforminsertion';
    $data['main_view'] = 'multiplerecordinsert/multiplerecordadmissionview';

 $this->load->view('layouts/central_template', $data);


} else {
   

   $data = array(
   'pr_admission_id' => $this->input->post('a_caseno'),
   'ad_date' => $this->input->post('a_date'),
   'ad_relationtopatient' => $this->input->post('a_relationtopatient'),
   'ad_wardname' => $this->input->post('a_wards'),

   );

   
    if($this->Multiplerecord_model->patientAdmission($data)){


      $data['title'] = "Clinical Visit";
       $data['get_ward'] = $this->Multiplerecord_model->get_ward();
 $data['topbar'] = 'multiplerecordinsert/multiplerecordnavbar';
   $data['admission_form'] = 'multiplerecordinsert/admissionrecordforminsertion';
    $data['main_view'] = 'multiplerecordinsert/multiplerecordadmissionview';
  
      $this->session->set_flashdata('add_multiple_admission', 'Admission Added');
      redirect('Multiplerecordcontrol/admissionviewform/#Admission', $data);


    }

}





}
















































}





 ?>