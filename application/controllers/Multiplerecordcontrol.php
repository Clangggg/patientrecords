
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
$this->form_validation->set_rules('a_chief_complaint', 'Eye/Ear/Nose', 'required');
$this->form_validation->set_rules('a_historyillness', 'Examination Details', 'required');
$this->form_validation->set_rules('a_bp', 'Blood Pressure', 'required');
$this->form_validation->set_rules('a_rr', 'Respiratory Rate', 'required');
$this->form_validation->set_rules('a_pulse', 'Pulse Rate', 'required');
$this->form_validation->set_rules('a_cr', 'Nutritional Status', 'required');
$this->form_validation->set_rules('a_temp', 'Temperature', 'required');
$this->form_validation->set_rules('a_wt', 'Weight', 'required');
$this->form_validation->set_rules('a_pr', 'Height', 'required');
$this->form_validation->set_rules('a_physicalexam', 'Visual Acuity', 'required');
$this->form_validation->set_rules('a_diagnosis', 'Hearing', 'required');
$this->form_validation->set_rules('a_medical_treatment', 'Skin/Scalp', 'required');
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
$this->form_validation->set_rules('a_conditionfa', 'First Condition A');
$this->form_validation->set_rules('a_conditionfb', 'First Condition B');
$this->form_validation->set_rules('a_conditionfc', 'First Condition C');
$this->form_validation->set_rules('a_conditionfd', 'First Condition D');
$this->form_validation->set_rules('a_conditionfe', 'First Condition E');
$this->form_validation->set_rules('a_conditionff', 'First Condition F');
$this->form_validation->set_rules('a_conditionfg', 'First Condition G');
$this->form_validation->set_rules('a_conditionfh', 'First Condition H');
$this->form_validation->set_rules('a_conditionfi', 'First Condition I');
$this->form_validation->set_rules('a_conditionfj', 'First Condition J');
$this->form_validation->set_rules('a_conditionsa', 'Second Condition A');
$this->form_validation->set_rules('a_conditionsb', 'Second Condition B');
$this->form_validation->set_rules('a_conditionsc', 'Second Condition C');
$this->form_validation->set_rules('a_conditionsd', 'Second Condition D');
$this->form_validation->set_rules('a_conditionse', 'Second Condition E');
$this->form_validation->set_rules('a_conditionsf', 'Second Condition F');
$this->form_validation->set_rules('a_conditionsg', 'Second Condition G');
$this->form_validation->set_rules('a_conditionsh', 'Second Condition H');
$this->form_validation->set_rules('a_conditionsi', 'Second Condition I');
$this->form_validation->set_rules('a_conditionsj', 'Second Condition J');
$this->form_validation->set_rules('a_conditionsk', 'Second Condition K');
$this->form_validation->set_rules('a_conditionsl', 'Second Condition L');
$this->form_validation->set_rules('a_conditionsm', 'Second Condition M');
$this->form_validation->set_rules('a_conditionsn', 'Second Condition N');
$this->form_validation->set_rules('a_conditionso', 'Second Condition O');
$this->form_validation->set_rules('a_conditionsp', 'Second Condition P');
$this->form_validation->set_rules('a_conditionta', 'Third Condition A');
$this->form_validation->set_rules('a_conditiontb', 'Third Condition B');
$this->form_validation->set_rules('a_conditiontc', 'Third Condition C');
$this->form_validation->set_rules('a_conditiontd', 'Third Condition D');
$this->form_validation->set_rules('a_conditionte', 'Third Condition E');
$this->form_validation->set_rules('a_conditiontf', 'Third Condition F');
$this->form_validation->set_rules('a_conditiontg', 'Third Condition G');
$this->form_validation->set_rules('a_conditionth', 'Third Condition H');
$this->form_validation->set_rules('a_conditionti', 'Third Condition I');
$this->form_validation->set_rules('a_conditiontj', 'Third Condition J');
$this->form_validation->set_rules('a_conditiontk', 'Third Condition K');
$this->form_validation->set_rules('a_conditiontl', 'Third Condition L');
$this->form_validation->set_rules('a_conditiontm', 'Third Condition M');
$this->form_validation->set_rules('a_conditiontn', 'Third Condition N');
$this->form_validation->set_rules('a_conditionto', 'Third Condition O');
$this->form_validation->set_rules('a_conditiontp', 'Third Condition P');
$this->form_validation->set_rules('a_conditionla', 'Last Condition A');
$this->form_validation->set_rules('a_conditionlb', 'Last Condition B');
$this->form_validation->set_rules('a_conditionlc', 'Last Condition C');
$this->form_validation->set_rules('a_conditionld', 'Last Condition D');
$this->form_validation->set_rules('a_conditionle', 'Last Condition E');
$this->form_validation->set_rules('a_conditionlf', 'Last Condition F');
$this->form_validation->set_rules('a_conditionlg', 'Last Condition G');
$this->form_validation->set_rules('a_conditionlh', 'Last Condition H');
$this->form_validation->set_rules('a_conditionli', 'Last Condition I');
$this->form_validation->set_rules('a_conditionlj', 'Last Condition J');
$this->form_validation->set_rules('a_treatfa', 'First Treatment A');
$this->form_validation->set_rules('a_treatfb', 'First Treatment B');
$this->form_validation->set_rules('a_treatfc', 'First Treatment C');
$this->form_validation->set_rules('a_treatfd', 'First Treatment D');
$this->form_validation->set_rules('a_treatfe', 'First Treatment E');
$this->form_validation->set_rules('a_treatff', 'First Treatment F');
$this->form_validation->set_rules('a_treatfg', 'First Treatment G');
$this->form_validation->set_rules('a_treatfh', 'First Treatment H');
$this->form_validation->set_rules('a_treatfi', 'First Treatment I');
$this->form_validation->set_rules('a_treatfj', 'First Treatment J');
$this->form_validation->set_rules('a_treatfk', 'First Treatment K');
$this->form_validation->set_rules('a_treatfl', 'First Treatment L');
$this->form_validation->set_rules('a_treatfm', 'First Treatment M');
$this->form_validation->set_rules('a_treatfn', 'First Treatment N');
$this->form_validation->set_rules('a_treatfo', 'First Treatment O');
$this->form_validation->set_rules('a_treatfp', 'First Treatment P');
$this->form_validation->set_rules('a_treatsa', 'Second Treatment A');
$this->form_validation->set_rules('a_treatsb', 'Second Treatment B');
$this->form_validation->set_rules('a_treatsc', 'Second Treatment C');
$this->form_validation->set_rules('a_treatsd', 'Second Treatment D');
$this->form_validation->set_rules('a_treatse', 'Second Treatment E');
$this->form_validation->set_rules('a_treatsf', 'Second Treatment F');
$this->form_validation->set_rules('a_treatsg', 'Second Treatment G');
$this->form_validation->set_rules('a_treatsh', 'Second Treatment H');
$this->form_validation->set_rules('a_treatsi', 'Second Treatment I');
$this->form_validation->set_rules('a_treatsj', 'Second Treatment J');
$this->form_validation->set_rules('a_treatsk', 'Second Treatment K');
$this->form_validation->set_rules('a_treatsl', 'Second Treatment L');
$this->form_validation->set_rules('a_treatsm', 'Second Treatment M');
$this->form_validation->set_rules('a_treatsn', 'Second Treatment N');
$this->form_validation->set_rules('a_treatso', 'Second Treatment O');
$this->form_validation->set_rules('a_treatsp', 'Second Treatment P');
$this->form_validation->set_rules('a_oraldate', 'Oral Exam Date', 'required');
$this->form_validation->set_rules('a_mouthexam', 'Mouth Examination');
$this->form_validation->set_rules('a_seal', 'Sealant (G.I.)');
$this->form_validation->set_rules('a_gum', 'Gum Treatment');
$this->form_validation->set_rules('a_perm', 'Permanent Filling');
$this->form_validation->set_rules('a_art', 'ART');
$this->form_validation->set_rules('a_extra', 'Extraction');
$this->form_validation->set_rules('a_prohy', 'Oral prohylaxis');
$this->form_validation->set_rules('a_refer', 'Referral');
$this->form_validation->set_rules('a_otheroral', 'Other oral Treatment');
$this->form_validation->set_rules('a_oralphys', 'Dental Physician','required' );
$this->form_validation->set_rules('a_rmouthexam', 'Remarks');
$this->form_validation->set_rules('a_rseal', 'Remarks');
$this->form_validation->set_rules('a_rgum', 'Remarks');
$this->form_validation->set_rules('a_rperm', 'Remarks');
$this->form_validation->set_rules('a_rart', 'Remarks');
$this->form_validation->set_rules('a_rextra', 'Remarks');
$this->form_validation->set_rules('a_rprohy', 'Remarks');
$this->form_validation->set_rules('a_rrefer', 'Remarks');
$this->form_validation->set_rules('a_rotheroral', 'Remarks');
$this->form_validation->set_rules('a_ging', 'Gingivitis');
$this->form_validation->set_rules('a_period', 'Periodontal disease');
$this->form_validation->set_rules('a_malo', 'Malocclusion');
$this->form_validation->set_rules('a_super', 'Supernumerary teeth');
$this->form_validation->set_rules('a_ulcer', 'Decubital Ulcer');
$this->form_validation->set_rules('a_calcu', 'Calculus');
$this->form_validation->set_rules('a_cleft', 'Cleft lip/palate');
$this->form_validation->set_rules('a_root', 'Root fragment');
$this->form_validation->set_rules('a_flu', 'Fluorosis');
$this->form_validation->set_rules('a_specify', 'Others, specify');
$this->form_validation->set_rules('a_decay', 'Decayed');
$this->form_validation->set_rules('a_missing', 'Missing');
$this->form_validation->set_rules('a_filled', 'Filled');
$this->form_validation->set_rules('a_total', 'Total DMFT');
$this->form_validation->set_rules('a_sound', 'Total Sount teeth');





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
   'f_date' => $this->input->post('a_date'),
   'f_conditionfa' => $this->input->post('a_conditionfa'),
   'f_conditionfb' => $this->input->post('a_conditionfb'),
   'f_conditionfc' => $this->input->post('a_conditionfc'),
   'f_conditionfd' => $this->input->post('a_conditionfd'),
   'f_conditionfe' => $this->input->post('a_conditionfe'),
   'f_conditionff' => $this->input->post('a_conditionff'),
   'f_conditionfg' => $this->input->post('a_conditionfg'),
   'f_conditionfh' => $this->input->post('a_conditionfh'),
   'f_conditionfi' => $this->input->post('a_conditionfi'),
   'f_conditionfj' => $this->input->post('a_conditionfj'),
   'f_conditionsa' => $this->input->post('a_conditionsa'),
   'f_conditionsb' => $this->input->post('a_conditionsb'),
   'f_conditionsc' => $this->input->post('a_conditionsc'),
   'f_conditionsd' => $this->input->post('a_conditionsd'),
   'f_conditionse' => $this->input->post('a_conditionse'),
   'f_conditionsf' => $this->input->post('a_conditionsf'),
   'f_conditionsg' => $this->input->post('a_conditionsg'),
   'f_conditionsh' => $this->input->post('a_conditionsh'),
   'f_conditionsi' => $this->input->post('a_conditionsi'),
   'f_conditionsj' => $this->input->post('a_conditionsj'),
   'f_conditionsk' => $this->input->post('a_conditionsk'),
   'f_conditionsl' => $this->input->post('a_conditionsl'),
   'f_conditionsm' => $this->input->post('a_conditionsm'),
   'f_conditionsn' => $this->input->post('a_conditionsn'),
   'f_conditionso' => $this->input->post('a_conditionso'),
   'f_conditionsp' => $this->input->post('a_conditionsp'),
   'f_conditionta' => $this->input->post('a_conditionta'),
   'f_conditiontb' => $this->input->post('a_conditiontb'),
   'f_conditiontc' => $this->input->post('a_conditiontc'),
   'f_conditiontd' => $this->input->post('a_conditiontd'),
   'f_conditionte' => $this->input->post('a_conditionte'),
   'f_conditiontf' => $this->input->post('a_conditiontf'),
   'f_conditiontg' => $this->input->post('a_conditiontg'),
   'f_conditionth' => $this->input->post('a_conditionth'),
   'f_conditionti' => $this->input->post('a_conditionti'),
   'f_conditiontj' => $this->input->post('a_conditiontj'),
   'f_conditiontk' => $this->input->post('a_conditiontk'),
   'f_conditiontl' => $this->input->post('a_conditiontl'),
   'f_conditiontm' => $this->input->post('a_conditiontm'),
   'f_conditiontn' => $this->input->post('a_conditiontn'),
   'f_conditionto' => $this->input->post('a_conditionto'),
   'f_conditiontp' => $this->input->post('a_conditiontp'),
   'f_conditionla' => $this->input->post('a_conditionla'),
   'f_conditionlb' => $this->input->post('a_conditionlb'),
   'f_conditionlc' => $this->input->post('a_conditionlc'),
   'f_conditionld' => $this->input->post('a_conditionld'),
   'f_conditionle' => $this->input->post('a_conditionle'),
   'f_conditionlf' => $this->input->post('a_conditionlf'),
   'f_conditionlg' => $this->input->post('a_conditionlg'),
   'f_conditionlh' => $this->input->post('a_conditionlh'),
   'f_conditionli' => $this->input->post('a_conditionli'),
   'f_conditionlj' => $this->input->post('a_conditionlj'),
   'f_treatfa' => $this->input->post('a_treatfa'),
   'f_treatfb' => $this->input->post('a_treatfb'),
   'f_treatfc' => $this->input->post('a_treatfc'),
   'f_treatfd' => $this->input->post('a_treatfd'),
   'f_treatfe' => $this->input->post('a_treatfe'),
   'f_treatff' => $this->input->post('a_treatff'),
   'f_treatfg' => $this->input->post('a_treatfg'),
   'f_treatfh' => $this->input->post('a_treatfh'),
   'f_treatfi' => $this->input->post('a_treatfi'),
   'f_treatfj' => $this->input->post('a_treatfj'),
   'f_treatfk' => $this->input->post('a_treatfk'),
   'f_treatfl' => $this->input->post('a_treatfl'),
   'f_treatfm' => $this->input->post('a_treatfm'),
   'f_treatfn' => $this->input->post('a_treatfn'),
   'f_treatfo' => $this->input->post('a_treatfo'),
   'f_treatfp' => $this->input->post('a_treatfp'),
   'f_treatsa' => $this->input->post('a_treatsa'),
   'f_treatsb' => $this->input->post('a_treatsb'),
   'f_treatsc' => $this->input->post('a_treatsc'),
   'f_treatsd' => $this->input->post('a_treatsd'),
   'f_treatse' => $this->input->post('a_treatse'),
   'f_treatsf' => $this->input->post('a_treatsf'),
   'f_treatsg' => $this->input->post('a_treatsg'),
   'f_treatsh' => $this->input->post('a_treatsh'),
   'f_treatsi' => $this->input->post('a_treatsi'),
   'f_treatsj' => $this->input->post('a_treatsj'),
   'f_treatsk' => $this->input->post('a_treatsk'),
   'f_treatsl' => $this->input->post('a_treatsl'),
   'f_treatsm' => $this->input->post('a_treatsm'),
   'f_treatsn' => $this->input->post('a_treatsn'),
   'f_treatso' => $this->input->post('a_treatso'),
   'f_treatsp' => $this->input->post('a_treatsp'),
   'f_oraldate' => $this->input->post('a_oraldate'),
   'f_mouthexam' => $this->input->post('a_mouthexam'),
   'f_seal' => $this->input->post('a_seal'),
   'f_gum' => $this->input->post('a_gum'),
   'f_perm' => $this->input->post('a_perm'),
   'f_art' => $this->input->post('a_art'),
   'f_extra' => $this->input->post('a_extra'),
   'f_prohy' => $this->input->post('a_prohy'),
   'f_refer' => $this->input->post('a_refer'),
   'f_otheroral' => $this->input->post('a_otheroral'),
   'f_oralphys' => $this->input->post('a_oralphys'),
   'f_rmouthexam' => $this->input->post('a_rmouthexam'),
   'f_rseal' => $this->input->post('a_rseal'),
   'f_rgum' => $this->input->post('a_rgum'),
   'f_rperm' => $this->input->post('a_rperm'),
   'f_rart' => $this->input->post('a_rart'),
   'f_rextra' => $this->input->post('a_rextra'),
   'f_rprohy' => $this->input->post('a_rprohy'),
   'f_rrefer' => $this->input->post('a_rrefer'),
   'f_rotheroral' => $this->input->post('a_rotheroral'),
   'f_ging' => $this->input->post('a_ging'),
   'f_period' => $this->input->post('a_period'),
   'f_malo' => $this->input->post('a_malo'),
   'f_super' => $this->input->post('a_super'),
   'f_ulcer' => $this->input->post('a_ulcer'),
   'f_calcu' => $this->input->post('a_calcu'),
   'f_cleft' => $this->input->post('a_cleft'),
   'f_root' => $this->input->post('a_root'),
   'f_flu' => $this->input->post('a_flu'),
   'f_specify' => $this->input->post('a_specify'),
   'f_decay' => $this->input->post('a_decay'),
   'f_missing' => $this->input->post('a_missing'),
   'f_filled' => $this->input->post('a_filled'),
   'f_total' => $this->input->post('a_total'),
   'f_sound' => $this->input->post('a_sound')
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

$this->form_validation->set_rules('a_caseno','Student LRN No.', 'required|numeric|min_length[12]|max_length[12]');
$this->form_validation->set_rules('a_date','Date', 'required');
$this->form_validation->set_rules('a_relationtopatient', 'Intervention', 'required');
$this->form_validation->set_rules('a_wards', 'Condition', 'required');


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