
<?php 

class Record_model extends CI_Model {

public function patient_record($data){
 
 $insert = $this->db->insert('patient_record', $data);

  return $insert;

}

public function get_patient_records(){


$query = $this->db->get('patient_record');

 return $query->result();

}


public function get_patient_data($pr_id){

$this->db->where('pr_id', $pr_id);
$query = $this->db->get('patient_record');

return $query->row();

}


public function get_findings_info($findings_id){

$this->db->where('f_id', $findings_id);
$query = $this->db->get('findings');

return $query->row();


}

public function update_patient_info($pr_id, $data){

$this->db->where('pr_id', $pr_id);
$query = $this->db->update('patient_record', $data);

return $query;

}

public function get_civilstat(){

$query = $this->db->get('civilstat');

if($query->num_rows() > 0){
 
 return $query->result();

  }
}

public function get_status(){

  $query = $this->db->get('status');
  
  if($query->num_rows() > 0){
   
   return $query->result();
  
    }
  }


public function get_cr(){

  $query = $this->db->get('cr');
  
  if($query->num_rows() > 0){
   
   return $query->result();
  
    }
  }
  
  public function get_remarks(){

    $query = $this->db->get('remarks');
    
    if($query->num_rows() > 0){
     
     return $query->result();
    
      }
    }

    public function get_details(){

      $query = $this->db->get('details');
      
      if($query->num_rows() > 0){
       
       return $query->result();
      
        }
      }

public function get_divi(){

  $query = $this->db->get('divi');
  
  if($query->num_rows() > 0){
   
   return $query->result();
  
    }
  }

public function get_vaccinestat(){

  $query = $this->db->get('vaccinestat');
  
  if($query->num_rows() > 0){
   
   return $query->result();
  
  }

}

public function get_gender(){

$query = $this->db->get('gender');

if($query->num_rows() > 0){
 
 return $query->result();

 }
}
public function get_ward() {

$query = $this->db->get('wards');

if($query->num_rows() > 0){
 
 return $query->result();

}



}

public function get_physician(){

$query = $this->db->get('physicians');

if($query->num_rows() > 0) {

 return $query->result();

 }

}

public function get_patient_findings($findings_id){

$this->db->where('f_id', $findings_id);
$query = $this->db->get('findings');

return $query->row();

}


public function get_findings_id_update($findings_id){

$this->db->where('f_id', $findings_id);
$query = $this->db->get('findings');

return $query->row()->pr_findings_id;

}

public function get_admission_id_update($admission_id){

$this->db->where('ad_id', $admission_id);

$query = $this->db->get('admission_record');

return $query->row()->pr_admission_id;

}

public function fetch_medical_field(){

$this->db->order_by('fp_name', 'ASC');
$query = $this->db->get('fieldsphysician');
return $query->result();

}

public function fetch_physician($fp_id){

$this->db->where('fp_id', $fp_id);
$this->db->order_by('ph_name', 'ASC');
$query = $this->db->get('physicians');
$output = '<option value="">Select Physician</option>';
foreach($query->result() as $physicians){

 $output .= '<option value="">'.$physicians->ph_name.'</option>';

}
 
  return $output;

}

public function add_findings_data($pr_id, $data){

$this->db->where('pr_id', $pr_id);

$query = $this->db->insert('findings', $data);

return $query;


}


public function edit_findings_data($findings_id, $data){

$this->db->where('f_id', $findings_id);
$query = $this->db->update('findings', $data);
 
return $query;


}


public function add_admission_data($pr_id, $data){

$this->db->where('pr_id', $pr_id);

$query = $this->db->insert('admission_record', $data);

return $query;

}

public function update_admission_data($admission_id, $data){
  
$this->db->where('ad_id', $admission_id);
$query = $this->db->update('admission_record', $data);
 
 return $query;

}

public function get_patient_findings_id($pr_id) { // Join tables
 
 $this->db->select('
     findings.f_chiefcomplaint,
     findings.f_historypresentillness,
     findings.f_bp,
     findings.f_rr,
     findings.f_pulse,
     findings.f_cr,
     findings.f_temp,
     findings.f_wt,
     findings.f_pr,
     findings.f_physicalexam,
     findings.f_diagnosis,
     findings.f_medication,
     findings.f_mouth,
     findings.f_lungs,
     findings.f_abdo,
     findings.f_spine,
     findings.f_remarks,
     findings.f_others,
     findings.f_allergy,
     findings.f_asthma,
     findings.f_anemia,
     findings.f_bleeding,
     findings.f_hailment,
     findings.f_diabetes,
     findings.f_epilepsy,
     findings.f_kidney,
     findings.f_convulsion,
     findings.f_fainting,
     findings.f_conditionfa, 
     findings.f_conditionfb, 
     findings.f_conditionfc, 
     findings.f_conditionfd, 
     findings.f_conditionfe, 
     findings.f_conditionff, 
     findings.f_conditionfg, 
     findings.f_conditionfh, 
     findings.f_conditionfi, 
     findings.f_conditionfj, 
     findings.f_conditionsa, 
     findings.f_conditionsb, 
     findings.f_conditionsc, 
     findings.f_conditionsd, 
     findings.f_conditionse, 
     findings.f_conditionsf, 
     findings.f_conditionsg, 
     findings.f_conditionsh, 
     findings.f_conditionsi, 
     findings.f_conditionsj, 
     findings.f_conditionsk, 
     findings.f_conditionsl, 
     findings.f_conditionsm, 
     findings.f_conditionsn, 
     findings.f_conditionso, 
     findings.f_conditionsp,
     findings.f_conditionta, 
     findings.f_conditiontb, 
     findings.f_conditiontc, 
     findings.f_conditiontd, 
     findings.f_conditionte, 
     findings.f_conditiontf, 
     findings.f_conditiontg, 
     findings.f_conditionth, 
     findings.f_conditionti, 
     findings.f_conditiontj, 
     findings.f_conditiontk, 
     findings.f_conditiontl, 
     findings.f_conditiontm, 
     findings.f_conditiontn, 
     findings.f_conditionto, 
     findings.f_conditiontp,  
     findings.f_conditionla,  
     findings.f_conditionlb,  
     findings.f_conditionlc,  
     findings.f_conditionld,  
     findings.f_conditionle,  
     findings.f_conditionlf,  
     findings.f_conditionlg,  
     findings.f_conditionlh,  
     findings.f_conditionli,  
     findings.f_conditionlj,  
     findings.f_treatfa,   
     findings.f_treatfb,   
     findings.f_treatfc,   
     findings.f_treatfd,   
     findings.f_treatfe,   
     findings.f_treatff,   
     findings.f_treatfg,   
     findings.f_treatfh,   
     findings.f_treatfi,   
     findings.f_treatfj,   
     findings.f_treatfk,   
     findings.f_treatfl,   
     findings.f_treatfm,   
     findings.f_treatfn,   
     findings.f_treatfo,   
     findings.f_treatfp,   
     findings.f_treatsa,  
     findings.f_treatsb,  
     findings.f_treatsc,  
     findings.f_treatsd,  
     findings.f_treatse,  
     findings.f_treatsf,  
     findings.f_treatsg,  
     findings.f_treatsh,  
     findings.f_treatsi,  
     findings.f_treatsj,  
     findings.f_treatsk,  
     findings.f_treatsl,  
     findings.f_treatsm,  
     findings.f_treatsn,  
     findings.f_treatso,  
     findings.f_treatsp, 
     findings.f_nameofphysician,
     findings.f_date,
     findings.f_id as findings_id,
     patient_record.pr_date,
     patient_record.pr_lname,
     patient_record.pr_fname,
     patient_record.pr_mname,
     patient_record.pr_addrs,
     patient_record.pr_age,
     patient_record.pr_bdate,
     patient_record.pr_bplace,
     patient_record.pr_civilstat,
     patient_record.pr_divi,
     patient_record.pr_vaccinestat,
     patient_record.pr_gen,
     patient_record.pr_number,
     patient_record.pr_religion,
     patient_record.pr_occup
 	');

    $this->db->from('findings');
    $this->db->join('patient_record', 'patient_record.pr_id = findings.pr_findings_id');
    $this->db->where('findings.pr_findings_id', $pr_id);

 $query = $this->db->get();

 return $query->result();
  
}

public function get_data_findings($findings_id) { // Join tables
 
 $this->db->select('
     findings.f_chiefcomplaint,
     findings.f_historypresentillness,
     findings.f_bp,
     findings.f_rr,
     findings.f_cr,
     findings.f_pulse,
     findings.f_temp,
     findings.f_wt,
     findings.f_pr,
     findings.f_physicalexam,
     findings.f_diagnosis,
     findings.f_medication,
     findings.f_mouth,
     findings.f_lungs,
     findings.f_abdo,
     findings.f_spine,
     findings.f_remarks,
     findings.f_others,
     findings.f_nameofphysician,
     findings.f_date,
     findings.f_allergy,
     findings.f_asthma,
     findings.f_anemia,
     findings.f_bleeding,
     findings.f_hailment,
     findings.f_diabetes,
     findings.f_epilepsy,
     findings.f_kidney,
     findings.f_convulsion,
     findings.f_fainting, 
     findings.f_conditionfa, 
     findings.f_conditionfb, 
     findings.f_conditionfc, 
     findings.f_conditionfd, 
     findings.f_conditionfe, 
     findings.f_conditionff, 
     findings.f_conditionfg, 
     findings.f_conditionfh, 
     findings.f_conditionfi, 
     findings.f_conditionfj, 
     findings.f_conditionsa, 
     findings.f_conditionsb, 
     findings.f_conditionsc, 
     findings.f_conditionsd, 
     findings.f_conditionse, 
     findings.f_conditionsf, 
     findings.f_conditionsg, 
     findings.f_conditionsh, 
     findings.f_conditionsi, 
     findings.f_conditionsj, 
     findings.f_conditionsk, 
     findings.f_conditionsl, 
     findings.f_conditionsm, 
     findings.f_conditionsn, 
     findings.f_conditionso, 
     findings.f_conditionsp,
     findings.f_conditionta, 
     findings.f_conditiontb, 
     findings.f_conditiontc, 
     findings.f_conditiontd, 
     findings.f_conditionte, 
     findings.f_conditiontf, 
     findings.f_conditiontg, 
     findings.f_conditionth, 
     findings.f_conditionti, 
     findings.f_conditiontj, 
     findings.f_conditiontk, 
     findings.f_conditiontl, 
     findings.f_conditiontm, 
     findings.f_conditiontn, 
     findings.f_conditionto, 
     findings.f_conditiontp,  
     findings.f_conditionla,  
     findings.f_conditionlb,  
     findings.f_conditionlc,  
     findings.f_conditionld,  
     findings.f_conditionle,  
     findings.f_conditionlf,  
     findings.f_conditionlg,  
     findings.f_conditionlh,  
     findings.f_conditionli,  
     findings.f_conditionlj,  
     findings.f_treatfa,   
     findings.f_treatfb,   
     findings.f_treatfc,   
     findings.f_treatfd,   
     findings.f_treatfe,   
     findings.f_treatff,   
     findings.f_treatfg,   
     findings.f_treatfh,   
     findings.f_treatfi,   
     findings.f_treatfj,   
     findings.f_treatfk,   
     findings.f_treatfl,   
     findings.f_treatfm,   
     findings.f_treatfn,   
     findings.f_treatfo,   
     findings.f_treatfp,   
     findings.f_treatsa,  
     findings.f_treatsb,  
     findings.f_treatsc,  
     findings.f_treatsd,  
     findings.f_treatse,  
     findings.f_treatsf,  
     findings.f_treatsg,  
     findings.f_treatsh,  
     findings.f_treatsi,  
     findings.f_treatsj,  
     findings.f_treatsk,  
     findings.f_treatsl,  
     findings.f_treatsm,  
     findings.f_treatsn,  
     findings.f_treatso,  
     findings.f_treatsp, 
     findings.f_mouthexam, 
     findings.f_seal,
     findings.f_gum, 
     findings.f_perm, 
     findings.f_art, 
     findings.f_extra, 
     findings.f_refer, 
     findings.f_otheroral, 
     findings.f_prohy, 
     findings.f_oralphys,
     findings.f_rmouthexam, 
     findings.f_rseal,
     findings.f_rgum, 
     findings.f_rperm, 
     findings.f_rart, 
     findings.f_rextra, 
     findings.f_rrefer, 
     findings.f_rotheroral, 
     findings.f_rprohy,   
     findings.f_ging,
     findings.f_period,
     findings.f_malo,
     findings.f_super,
     findings.f_ulcer,
     findings.f_calcu,
     findings.f_cleft,
     findings.f_root,
     findings.f_flu,
     findings.f_specify,
     findings.f_decay,
     findings.f_missing,
     findings.f_filled,
     findings.f_total,
     findings.f_sound,
     findings.f_oraldate,
     findings.f_id as findings_id,
     patient_record.pr_id,
     patient_record.pr_date,
     patient_record.pr_lname,
     patient_record.pr_fname,
     patient_record.pr_mname,
     patient_record.pr_addrs,
     patient_record.pr_age,
     patient_record.pr_bdate,
     patient_record.pr_bplace,
     patient_record.pr_civilstat,
     patient_record.pr_divi,
     patient_record.pr_vaccinestat,
     patient_record.pr_gen,
     patient_record.pr_number,
     patient_record.pr_religion,
     patient_record.pr_occup,
 	');

    $this->db->from('findings');
    $this->db->join('patient_record', 'patient_record.pr_id = findings.pr_findings_id');
    $this->db->where('findings.f_id', $findings_id);

 $query = $this->db->get();

  return $query->row();

}

public function get_findings_id_info() { // Join tables


 $query = $this->db->get('findings');

 
 if($query->num_rows() > 0){

  return $query->result();


 }

}

public function get_patient_admission_id($pr_id) { // Join tables
 
 $this->db->select('
     admission_record.ad_wardname,
     admission_record.ad_id as admission_id,
     admission_record.ad_date,
     admission_record.ad_relationtopatient,
     patient_record.pr_date,
     patient_record.pr_lname,
     patient_record.pr_fname,
     patient_record.pr_mname,
     patient_record.pr_addrs,
     patient_record.pr_age,
     patient_record.pr_bdate,
     patient_record.pr_bplace,
     patient_record.pr_civilstat,
     patient_record.pr_divi,
     patient_record.pr_vaccinestat,
     patient_record.pr_gen,
     patient_record.pr_number,
     patient_record.pr_religion,
     patient_record.pr_occup,
    ');

    $this->db->from('admission_record');
    $this->db->join('patient_record', 'patient_record.pr_id = admission_record.pr_admission_id');
    $this->db->where('admission_record.pr_admission_id', $pr_id);


 $query = $this->db->get();

 return $query->result();
  
}

public function get_data_admission($admission_id) {


 $this->db->select('
     admission_record.ad_wardname,
     admission_record.ad_id as admission_id,
     admission_record.ad_date,
     admission_record.pr_admission_id,
     admission_record.ad_admittedby,
     admission_record.ad_physician,
     admission_record.ad_father,
     admission_record.ad_mother,
     admission_record.ad_chargetoaccount,
     admission_record.ad_relationtopatient,
     admission_record.ad_address,
     admission_record.ad_number,
     admission_record.ad_totalpayment,
     admission_record.ad_dischargedate,
     admission_record.ad_complaint,
     admission_record.ad_completediagnosis,
     admission_record.ad_medication,
     admission_record.ad_conditiontodischarge,
     admission_record.ad_remarks,
     patient_record.pr_id,
     patient_record.pr_date,
     patient_record.pr_lname,
     patient_record.pr_fname,
     patient_record.pr_mname,
     patient_record.pr_addrs,
     patient_record.pr_age,
     patient_record.pr_bdate,
     patient_record.pr_bplace,
     patient_record.pr_civilstat,
     patient_record.pr_divi,
     patient_record.pr_vaccinestat,
     patient_record.pr_gen,
     patient_record.pr_number,
     patient_record.pr_religion,
     patient_record.pr_occup,
    ');

    $this->db->from('admission_record');
    $this->db->join('patient_record', 'patient_record.pr_id = admission_record.pr_admission_id');
    $this->db->where('admission_record.ad_id', $admission_id);

 $query = $this->db->get();

 return $query->row();



}

public function get_users_account($doctor){

$this->db->where('su_position', $doctor);
$query = $this->db->get('standardusers');

return $query->result();

}
}
 ?>