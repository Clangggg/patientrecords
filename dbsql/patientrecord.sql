-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 06:19 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patientrecord`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_patientadmission`
--

CREATE TABLE `add_patientadmission` (
  `a_wardname` varchar(255) NOT NULL,
  `a_id` varchar(128) NOT NULL,
  `a_date` date NOT NULL,
  `a_user_id` int(11) NOT NULL,
  `a_fname` varchar(255) NOT NULL,
  `a_mname` varchar(255) NOT NULL,
  `a_lname` varchar(255) NOT NULL,
  `a_gender` varchar(255) NOT NULL,
  `a_age` varchar(255) NOT NULL,
  `a_physician_id` varchar(255) NOT NULL,
  `a_chargetoaccount` varchar(255) NOT NULL,
  `a_relationtopatient` varchar(255) NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_patientadmission`
--

INSERT INTO `add_patientadmission` (`a_wardname`, `a_id`, `a_date`, `a_user_id`, `a_fname`, `a_mname`, `a_lname`, `a_gender`, `a_age`, `a_physician_id`, `a_chargetoaccount`, `a_relationtopatient`, `log_time`) VALUES
('', '', '2019-05-02', 1, 'James', 'Fernandez', 'Navarro', 'Male', '25', '53', '', '', '2019-05-02 15:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `add_patientfindings`
--

CREATE TABLE `add_patientfindings` (
  `a_id` int(11) NOT NULL,
  `a_user_id` int(11) NOT NULL,
  `a_fname` varchar(255) NOT NULL,
  `a_mname` varchar(255) NOT NULL,
  `a_lname` varchar(255) NOT NULL,
  `a_gender` varchar(255) NOT NULL,
  `a_age` int(11) NOT NULL,
  `a_complaint` text NOT NULL,
  `a_historypresentillness` text NOT NULL,
  `a_bp` varchar(255) NOT NULL,
  `a_rr` varchar(255) NOT NULL,
  `a_cr` varchar(255) NOT NULL,
  `a_temp` varchar(255) NOT NULL,
  `a_wt` varchar(255) NOT NULL,
  `a_pr` varchar(255) NOT NULL,
  `a_physicalexam` text NOT NULL,
  `a_mouth` varchar(128) NOT NULL,
  `a_lungs` varchar(128) NOT NULL,
  `a_spine` varchar(128) NOT NULL,
  `a_abdo` varchar(128) NOT NULL,
  `a_remarks` varchar(128) NOT NULL,
  `a_others` varchar(128) NOT NULL,
  `a_allergy` varchar(128) NOT NULL,
  `a_pulse` varchar(128) NOT NULL,
  `a_asthma` varchar(128) NOT NULL,
  `a_anemia` varchar(128) NOT NULL,
  `a_bleeding` varchar(128) NOT NULL,
  `a_hailment` varchar(128) NOT NULL,
  `a_diabetes` varchar(128) NOT NULL,
  `a_epilepsy` varchar(128) NOT NULL,
  `a_kidney` varchar(128) NOT NULL,
  `a_convulsion` varchar(128) NOT NULL,
  `a_fainting` varchar(128) NOT NULL,
  `a_diagnosis` text NOT NULL,
  `a_medication` text NOT NULL,
  `a_physician_id` int(11) NOT NULL,
  `a_date` date NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_patientfindings`
--

INSERT INTO `add_patientfindings` (`a_id`, `a_user_id`, `a_fname`, `a_mname`, `a_lname`, `a_gender`, `a_age`, `a_complaint`, `a_historypresentillness`, `a_bp`, `a_rr`, `a_cr`, `a_temp`, `a_wt`, `a_pr`, `a_physicalexam`, `a_mouth`, `a_lungs`, `a_spine`, `a_abdo`, `a_remarks`, `a_others`, `a_allergy`, `a_pulse`, `a_asthma`, `a_anemia`, `a_bleeding`, `a_hailment`, `a_diabetes`, `a_epilepsy`, `a_kidney`, `a_convulsion`, `a_fainting`, `a_diagnosis`, `a_medication`, `a_physician_id`, `a_date`, `log_time`, `status`) VALUES
(1, 1, 'Jenna', 'Castro', 'Hassan', 'Female', 26, 'asdasdd', '*Under Observation', '', '', '', '', '', '', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'a', 'a', 53, '2019-05-02', '2019-05-03 04:54:32', 0),
(2, 1, 'James', 'Fernandez', 'Navarro', 'Male', 25, '', '*Under Observation', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 54, '2019-05-02', '2019-05-02 15:36:34', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admission_record`
--

CREATE TABLE `admission_record` (
  `ad_id` varchar(128) NOT NULL,
  `ad_date` date NOT NULL,
  `pr_admission_id` varchar(128) NOT NULL,
  `ad_relationtopatient` varchar(255) NOT NULL,
  `ad_wardname` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_record`
--

INSERT INTO `admission_record` (`ad_id`, `ad_date`, `pr_admission_id`, `ad_relationtopatient`, `ad_wardname`) VALUES
('', '2022-11-08', '2147483647', 'Issued headache medicine', ''),
('', '2019-04-21', '3', '', ''),
('', '2019-04-21', '2', '', ''),
('', '2019-05-01', '4', '', ''),
('', '2019-05-02', '2', '', ''),
('', '2022-11-07', '2147483647', 'sister', ''),
('', '2022-11-08', '2147483647', 'sister', ''),
('', '2022-11-08', '2147483647', 'sister', ''),
('', '2022-11-08', '2147483647', 'sister', ''),
('', '2022-11-08', '2147483647', 'Issued headache medicine', ''),
('', '2022-11-08', '2147483647', 'sister', ''),
('', '2022-11-08', '2147483647', 'e2e21d', ''),
('', '2022-11-08', '2147483647', 'Issued headache medicine', ''),
('', '2022-11-08', '2147483647', 'Issued headache medicine', ''),
('', '2022-11-08', '2147483647', 'wewfe', ''),
('', '2022-11-08', '2147483647', 'sister', ''),
('', '2022-11-08', '192323233444', 'Issued headache medicine', ''),
('', '2022-11-08', '192321424000', 'sister', ''),
('', '2022-11-08', '192321424000', 'Issued headache medicine', 'ICU'),
('', '2022-11-08', '192321424000', 'wewfe', 'ICU'),
('', '2022-11-08', '192321424000', 'Issued headache medicine', 'Female'),
('', '2022-11-08', '192321424000', 'Issued headache medicine', 'Female'),
('', '2022-11-08', '192321429999', 'Issued headache medicine', 'Headache'),
('', '2022-11-08', '192321433332', 'Issued headache medicine', 'Headache'),
('', '2022-11-09', '190000000000', 'Issued allergy medicine', ''),
('', '2022-11-09', '190000000000', 'sister', ''),
('', '2022-11-09', '190000000000', 'Issued headache medicine', ''),
('', '2022-11-09', '192321429999', 'Neozep', 'Colds'),
('', '2022-11-10', '192323233444', 'Issued headache medicine', ''),
('', '2022-11-10', '192323233444', 'Issued headache medicine', 'Headache'),
('', '2022-11-29', '192323233444', 'Issued headache medicine', 'Allergies'),
('', '2022-12-13', '136825120367', 'Issued headache medicine', 'Headache'),
('', '2023-01-24', '13625110038', 'Issued headache medicine', 'Headache'),
('', '2023-01-24', '136251100382', 'Issued headache medicine', 'Headache'),
('', '2023-01-24', '109342101029', 'Issued cold medicine', 'Colds'),
('', '2023-01-27', '328371287319', 'Issued cold medicine', 'Rashes');

-- --------------------------------------------------------

--
-- Table structure for table `civilstat`
--

CREATE TABLE `civilstat` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `civilstat`
--

INSERT INTO `civilstat` (`c_id`, `c_name`) VALUES
(1, 'NCR – National Capital Region'),
(2, 'RegionI–Ilocos Region'),
(3, 'RegionII – Cagayan Valley'),
(4, 'RegionIII – Central Luzon'),
(5, 'RegionIV–CALABARZON'),
(6, 'RegionIV–MIMAROPA'),
(7, 'RegionV – Bicol'),
(8, 'RegionVI – Western Visayas'),
(9, 'RegionVII – Central Visayas'),
(10, 'RegionVIII – Eastern Visayas'),
(11, 'RegionIX – Zamboanga Peninsula'),
(12, 'RegionX – Northern Mindanao'),
(13, 'RegionXI – Davao Region'),
(14, 'RegionXII – SOCCSKSARGEN'),
(15, 'RegionXII – SOCCSKSARGEN'),
(16, 'CAR – Cordillera Administrative Region'),
(17, 'BARMM – Bangsamoro Autonomous Region in Muslim Mindanao');

-- --------------------------------------------------------

--
-- Table structure for table `cr`
--

CREATE TABLE `cr` (
  `cr_id` int(128) NOT NULL,
  `cr_name` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cr`
--

INSERT INTO `cr` (`cr_id`, `cr_name`) VALUES
(1, 'Normal'),
(2, 'Below-Normal'),
(3, 'Above-Normal');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `de_id` int(11) NOT NULL,
  `de_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`de_id`, `de_name`) VALUES
(1, 'Grade7-Findings'),
(2, 'Grade8-Findings'),
(3, 'Grade9-Findings'),
(4, 'Grade10-Findings'),
(5, 'Grade11-Findings'),
(6, 'Grade12-Findings');

-- --------------------------------------------------------

--
-- Table structure for table `divi`
--

CREATE TABLE `divi` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(128) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divi`
--

INSERT INTO `divi` (`d_id`, `d_name`) VALUES
(1, 'Caloocan-City'),
(2, 'Malabon-City'),
(3, 'Navotas-City'),
(4, 'Valenzuela-City'),
(5, 'Quezon-City'),
(6, 'Marikina-City'),
(7, 'Pasig-City'),
(8, 'Taguig-City'),
(9, 'Makati-City'),
(10, 'Manila-City'),
(11, 'Mandaluyong-City'),
(12, 'SanJuan-City'),
(13, 'Pasay-City'),
(14, 'Paranaque-City'),
(15, 'LasPinas-City'),
(16, 'Muntinlupa-City'),
(17, 'Pateros');

-- --------------------------------------------------------

--
-- Table structure for table `fieldsphysician`
--

CREATE TABLE `fieldsphysician` (
  `fp_id` int(11) NOT NULL,
  `fp_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fieldsphysician`
--

INSERT INTO `fieldsphysician` (`fp_id`, `fp_name`) VALUES
(1, 'Clinic_Admin'),
(2, 'Pediatrician'),
(3, 'Family_Medicine'),
(4, 'Cardiologist'),
(5, 'Dermatologist'),
(6, 'ENT(Ear,Nose,Throat)'),
(7, 'Gastroentorologist'),
(8, 'General Surgeon'),
(9, 'Nephrologist'),
(10, 'OB-GYNE'),
(11, 'Ophthalmologist'),
(12, 'Orthopedic'),
(13, 'Pulmonologist'),
(14, 'Rehabilitation Med'),
(15, 'Urologist'),
(16, 'Nurse'),
(17, 'Dentist');

-- --------------------------------------------------------

--
-- Table structure for table `findings`
--

CREATE TABLE `findings` (
  `f_id` int(11) NOT NULL,
  `pr_findings_id` varchar(255) NOT NULL,
  `f_chiefcomplaint` text NOT NULL,
  `f_historypresentillness` text NOT NULL,
  `f_status` varchar(255) NOT NULL,
  `f_bp` varchar(255) NOT NULL,
  `f_rr` varchar(255) NOT NULL,
  `f_cr` varchar(255) NOT NULL,
  `f_temp` varchar(255) NOT NULL,
  `f_wt` varchar(255) NOT NULL,
  `f_pr` varchar(255) NOT NULL,
  `f_physicalexam` text NOT NULL,
  `f_diagnosis` text NOT NULL,
  `f_medication` text NOT NULL,
  `f_nameofphysician` varchar(255) NOT NULL,
  `f_date` date NOT NULL,
  `f_pulse` varchar(128) NOT NULL,
  `f_mouth` varchar(128) NOT NULL,
  `f_lungs` varchar(128) NOT NULL,
  `f_spine` varchar(128) NOT NULL,
  `f_remarks` varchar(128) NOT NULL,
  `f_others` varchar(128) NOT NULL,
  `f_abdo` varchar(128) NOT NULL,
  `f_allergy` text NOT NULL,
  `f_asthma` text NOT NULL,
  `f_anemia` text NOT NULL,
  `f_bleeding` text NOT NULL,
  `f_hailment` text NOT NULL,
  `f_diabetes` text NOT NULL,
  `f_epilepsy` text NOT NULL,
  `f_kidney` text NOT NULL,
  `f_convulsion` text NOT NULL,
  `f_fainting` text NOT NULL,
  `f_conditionfa` text NOT NULL,
  `f_conditionfb` text NOT NULL,
  `f_conditionfc` text NOT NULL,
  `f_conditionfd` text NOT NULL,
  `f_conditionfe` text NOT NULL,
  `f_conditionff` text NOT NULL,
  `f_conditionfg` text NOT NULL,
  `f_conditionfh` text NOT NULL,
  `f_conditionfi` text NOT NULL,
  `f_conditionfj` text NOT NULL,
  `f_conditionsa` text NOT NULL,
  `f_conditionsb` text NOT NULL,
  `f_conditionsc` text NOT NULL,
  `f_conditionsd` text NOT NULL,
  `f_conditionse` text NOT NULL,
  `f_conditionsf` text NOT NULL,
  `f_conditionsg` text NOT NULL,
  `f_conditionsh` text NOT NULL,
  `f_conditionsi` text NOT NULL,
  `f_conditionsj` text NOT NULL,
  `f_conditionsk` text NOT NULL,
  `f_conditionsl` text NOT NULL,
  `f_conditionsm` text NOT NULL,
  `f_conditionsn` text NOT NULL,
  `f_conditionso` text NOT NULL,
  `f_conditionsp` text NOT NULL,
  `f_conditionta` text NOT NULL,
  `f_conditiontb` text NOT NULL,
  `f_conditiontc` text NOT NULL,
  `f_conditiontd` text NOT NULL,
  `f_conditionte` text NOT NULL,
  `f_conditiontf` text NOT NULL,
  `f_conditiontg` text NOT NULL,
  `f_conditionth` text NOT NULL,
  `f_conditionti` text NOT NULL,
  `f_conditiontj` text NOT NULL,
  `f_conditiontk` text NOT NULL,
  `f_conditiontl` text NOT NULL,
  `f_conditiontm` text NOT NULL,
  `f_conditiontn` text NOT NULL,
  `f_conditionto` text NOT NULL,
  `f_conditiontp` text NOT NULL,
  `f_conditionla` text NOT NULL,
  `f_conditionlb` text NOT NULL,
  `f_conditionlc` text NOT NULL,
  `f_conditionld` text NOT NULL,
  `f_conditionle` text NOT NULL,
  `f_conditionlf` text NOT NULL,
  `f_conditionlg` text NOT NULL,
  `f_conditionlh` text NOT NULL,
  `f_conditionli` text NOT NULL,
  `f_conditionlj` text NOT NULL,
  `f_treatfa` text NOT NULL,
  `f_treatfb` text NOT NULL,
  `f_treatfc` text NOT NULL,
  `f_treatfd` text NOT NULL,
  `f_treatfe` text NOT NULL,
  `f_treatff` text NOT NULL,
  `f_treatfg` text NOT NULL,
  `f_treatfh` text NOT NULL,
  `f_treatfi` text NOT NULL,
  `f_treatfj` text NOT NULL,
  `f_treatfk` text NOT NULL,
  `f_treatfl` text NOT NULL,
  `f_treatfm` text NOT NULL,
  `f_treatfn` text NOT NULL,
  `f_treatfo` text NOT NULL,
  `f_treatfp` text NOT NULL,
  `f_treatsa` text NOT NULL,
  `f_treatsb` text NOT NULL,
  `f_treatsc` text NOT NULL,
  `f_treatsd` text NOT NULL,
  `f_treatse` text NOT NULL,
  `f_treatsf` text NOT NULL,
  `f_treatsg` text NOT NULL,
  `f_treatsh` text NOT NULL,
  `f_treatsi` text NOT NULL,
  `f_treatsj` text NOT NULL,
  `f_treatsk` text NOT NULL,
  `f_treatsl` text NOT NULL,
  `f_treatsm` text NOT NULL,
  `f_treatsn` text NOT NULL,
  `f_treatso` text NOT NULL,
  `f_treatsp` text NOT NULL,
  `f_mouthexam` text NOT NULL,
  `f_seal` text NOT NULL,
  `f_gum` text NOT NULL,
  `f_perm` text NOT NULL,
  `f_art` text NOT NULL,
  `f_extra` text NOT NULL,
  `f_prohy` text NOT NULL,
  `f_refer` text NOT NULL,
  `f_otheroral` text NOT NULL,
  `f_oralphys` text NOT NULL,
  `f_rmouthexam` text NOT NULL,
  `f_rseal` text NOT NULL,
  `f_rgum` text NOT NULL,
  `f_rperm` text NOT NULL,
  `f_rart` text NOT NULL,
  `f_rextra` text NOT NULL,
  `f_rprohy` text NOT NULL,
  `f_rrefer` text NOT NULL,
  `f_rotheroral` text NOT NULL,
  `f_ging` text NOT NULL,
  `f_period` text NOT NULL,
  `f_malo` text NOT NULL,
  `f_super` text NOT NULL,
  `f_ulcer` text NOT NULL,
  `f_calcu` text NOT NULL,
  `f_cleft` text NOT NULL,
  `f_root` text NOT NULL,
  `f_flu` text NOT NULL,
  `f_specify` text NOT NULL,
  `f_decay` int(11) NOT NULL,
  `f_missing` int(11) NOT NULL,
  `f_filled` int(11) NOT NULL,
  `f_total` int(11) NOT NULL,
  `f_sound` int(11) NOT NULL,
  `f_oraldate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `findings`
--

INSERT INTO `findings` (`f_id`, `pr_findings_id`, `f_chiefcomplaint`, `f_historypresentillness`, `f_status`, `f_bp`, `f_rr`, `f_cr`, `f_temp`, `f_wt`, `f_pr`, `f_physicalexam`, `f_diagnosis`, `f_medication`, `f_nameofphysician`, `f_date`, `f_pulse`, `f_mouth`, `f_lungs`, `f_spine`, `f_remarks`, `f_others`, `f_abdo`, `f_allergy`, `f_asthma`, `f_anemia`, `f_bleeding`, `f_hailment`, `f_diabetes`, `f_epilepsy`, `f_kidney`, `f_convulsion`, `f_fainting`, `f_conditionfa`, `f_conditionfb`, `f_conditionfc`, `f_conditionfd`, `f_conditionfe`, `f_conditionff`, `f_conditionfg`, `f_conditionfh`, `f_conditionfi`, `f_conditionfj`, `f_conditionsa`, `f_conditionsb`, `f_conditionsc`, `f_conditionsd`, `f_conditionse`, `f_conditionsf`, `f_conditionsg`, `f_conditionsh`, `f_conditionsi`, `f_conditionsj`, `f_conditionsk`, `f_conditionsl`, `f_conditionsm`, `f_conditionsn`, `f_conditionso`, `f_conditionsp`, `f_conditionta`, `f_conditiontb`, `f_conditiontc`, `f_conditiontd`, `f_conditionte`, `f_conditiontf`, `f_conditiontg`, `f_conditionth`, `f_conditionti`, `f_conditiontj`, `f_conditiontk`, `f_conditiontl`, `f_conditiontm`, `f_conditiontn`, `f_conditionto`, `f_conditiontp`, `f_conditionla`, `f_conditionlb`, `f_conditionlc`, `f_conditionld`, `f_conditionle`, `f_conditionlf`, `f_conditionlg`, `f_conditionlh`, `f_conditionli`, `f_conditionlj`, `f_treatfa`, `f_treatfb`, `f_treatfc`, `f_treatfd`, `f_treatfe`, `f_treatff`, `f_treatfg`, `f_treatfh`, `f_treatfi`, `f_treatfj`, `f_treatfk`, `f_treatfl`, `f_treatfm`, `f_treatfn`, `f_treatfo`, `f_treatfp`, `f_treatsa`, `f_treatsb`, `f_treatsc`, `f_treatsd`, `f_treatse`, `f_treatsf`, `f_treatsg`, `f_treatsh`, `f_treatsi`, `f_treatsj`, `f_treatsk`, `f_treatsl`, `f_treatsm`, `f_treatsn`, `f_treatso`, `f_treatsp`, `f_mouthexam`, `f_seal`, `f_gum`, `f_perm`, `f_art`, `f_extra`, `f_prohy`, `f_refer`, `f_otheroral`, `f_oralphys`, `f_rmouthexam`, `f_rseal`, `f_rgum`, `f_rperm`, `f_rart`, `f_rextra`, `f_rprohy`, `f_rrefer`, `f_rotheroral`, `f_ging`, `f_period`, `f_malo`, `f_super`, `f_ulcer`, `f_calcu`, `f_cleft`, `f_root`, `f_flu`, `f_specify`, `f_decay`, `f_missing`, `f_filled`, `f_total`, `f_sound`, `f_oraldate`) VALUES
(57, '192321424000', 'a/b/c', 'Grade9-Findings', '', '110/90', '13/min', 'Normal', '36.0', '45', '157', 'a/b', 'a/b', 'a', 'Justin.Ortiz', '2022-11-07', '60/min', 'a/b', 'a/b', 'a/b/c', 'Treated', '', 'a/b', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(58, '192325977777', '', 'G8 - Findings', '', '23', '13/min', 'Below-Normal', '36', '213', '157', '', '', '', 'Justin.Ortiz', '2022-11-07', '2123', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(59, '091220309555', '', 'G7 - Findings', '', '110/90', '13/min', 'Normal', '37', '60', '157', '', '', '', 'Justin.Ortiz', '2022-11-07', '60/min', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(60, '192321424000', 'a/b/c', 'Grade8-Findings', '', '110/90', '13/min', 'Normal', '36', '45', '157', 'a/b', 'a/b', 'a/b', 'Justin.Ortiz', '2022-11-08', '60/min', 'a/b', 'a/b', 'a/b/c', 'Needs_Supervision', '', 'a/b', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(61, '192321424000', '', 'Grade10-Findings', '', '110/90', '13/min', 'Normal', '36', '45', '157', '', '', '', 'Justin.Ortiz', '2022-11-08', '60/min', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(62, '192321429999', 'a/b/c', 'Grade8-Findings', '', 'rfw', '1223', 'Normal', '23', '45', '325', 'a/b', 'a/b', 'a/b', 'Juztin.Ortiz', '2022-11-08', '2123', 'a/b', 'a/b', 'a/b/c', 'Advised/Counseled', 'fghj', 'a/b', 'NO', 'NO', 'YES', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(63, '192321433332', 'a/b/c', 'Grade7-Findings', '', '110/90', '13/min', 'Normal', '36', '45', '157', 'a/b', 'a/b', 'a', 'Juztin.Ortiz', '2022-11-08', '60/min', 'a/b', 'a/b', 'a/b/c', 'Needs_follow_up', '', 'a/b', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(64, '192321433332', '', 'Grade8-Findings', '', '23', '1223', 'Normal', '23', '45', '159', '', '', '', 'Juztin.Ortiz', '2022-11-08', '60/min', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(66, '190000000000', 'a', 'Grade7-Findings', '', '110/90', '13/min', 'Normal', '36', '45', '157', 'a/b', 'a', 'a', 'Juztin.Ortiz', '2022-11-09', '60/min', 'a', 'a', 'a', 'Advised/Counseled', 'aaa', 'a', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(67, '192321429988', 'a', 'Grade7-Findings', '', '110/90', '13/min', 'Below-Normal', '36.4', '2234', '325', '', 'a', 'a', 'Juztin.Ortiz', '2022-11-09', '60/min', 'a', 'a', 'a', 'Corrected', 'a', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(68, '190000000000', 'a', 'Grade8-Findings', '', '110/90', '13/min', 'Below-Normal', '37', '60', '1232', 'a/b', 'a', 'a', 'Juztin.Ortiz', '2022-11-09', '2123', 'a', 'a', 'a', 'Advised/Counseled', 'aaa', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(69, '111111111111', 'a/b/c', 'Grade8-Findings', '', '155', '1223', 'Normal', '36', '45', '157', 'a/b', 'a/b', 'a/b', 'Basilio.Cabasug', '2022-11-10', '60/min', 'a/b', 'a/b', 'a/b/c', 'Parents_Notified', '', 'a/b', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '2023-01-25'),
(70, '111111111111', 'a/b/c', 'Grade7-Findings', '', '155', '1223', 'Normal', '36', '45', '157', 'a/b', 'a', 'a/b', 'Basilio.Cabasug', '2022-11-10', '60/min', 'a/b', 'a/b', 'a/b/c', 'Needs_close_supervision', '', 'a/b', 'NO', 'YES', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'CMR', 'F', '', 'F', '', 'Ag F', '', 'Gn', '', 'F', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'M', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'M', '', '', '', '', '', '', 'F', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Xt', '', '', '', '', '', '', '', '', 'Alona.Mosquito-Leabres', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'None', 2, 0, 0, 0, 0, '0000-00-00'),
(71, '192323233444', 'a', 'Grade11-Findings', '', '110/90', '13/min', 'Above-Normal', '37', '60', '159', 'a/b', 'a', 'a', 'Juztin.Ortiz', '2022-11-10', '60/min', 'a', 'a', 'a', 'Needs_close_supervision', 'aaa', 'a', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(72, '192321429999', '', 'Grade7-Findings', '', '110/90', '13/min', 'Normal', '36', '213', '157', '', '', '', 'Juztin.Ortiz', '2022-11-10', '2123', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(73, '111111111111', 'a', 'Grade9-Findings', '', '110/90', '13/min', 'Normal', '36', '45', '157', 'a/b', 'a', 'a', 'Juztin.Ortiz', '2022-11-29', '60/min', 'a', 'a', 'a', 'Advised/Counseled', 'aaaa', 'a', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Alona.Mosquito-Leabres', '', '', '', '', '', '', '', '', '', 'Gn', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'None', 2, 2, 1, 1, 22, '2023-01-25'),
(74, '192000000009', 'a', 'Grade7-Findings', '', '110/90', '13/min', 'Normal', '36', '45', '157', 'a/b', 'a', 'a', 'Juztin.Ortiz', '2022-11-29', '60/min', 'a', 'a', 'a', 'Corrected', 'aaaa', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(75, '192442233889', 'a/b/c', 'Grade7-Findings', '', '110/90', '13/min', 'Normal', '36', '45', '157', 'a/b', 'a/b', 'a/b', 'Juztin.Ortiz', '2022-12-02', '60/min', 'a/b', 'a/b', 'a/b/c', 'Needs_close_supervision', 'N/A', 'a/b', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(76, '192442233889', '', 'Grade8-Findings', '', '110/90', '13/min', 'Normal', '36', '45', '157', '', '', '', 'Juztin.Ortiz', '2022-12-02', '60/min', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(77, '192442233889', 'a', 'Grade9-Findings', '', '155', '13/min', 'Normal', '36.4', '12', '1232', 'a/b', 'a', 'a', 'Juztin.Ortiz', '2022-12-02', '60/min', 'a', 'a', 'a', 'Treated', 'N/A', 'a', 'YES', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(78, '136825120367', 'a/b/c', 'Grade7-Findings', '', '110/90', '13/min', 'Normal', '36', '42', '155', 'a/b', 'a/b', 'a/b', 'Basilio.Cabasug', '2022-12-13', '60/min', 'a/b', 'a/b', 'a', 'Parents_Notified', 'N/A', 'a/b', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(79, '136825120367', 'a/b/c', 'Grade8-Findings', '', '110/90', '13/min', 'Normal', '37', '45', '159', 'a/b', 'a/b', 'a/b', 'Basilio.Cabasug', '2022-12-13', '60/min', 'a/b', 'a/b', 'a', 'Parents_Notified', 'N/A', 'a', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(80, '136251100382', 'a', 'Grade7-Findings', '', '110/90', '13/min', 'Normal', '36', '45', '157', 'a/b', 'a', 'a', 'Juztin.Ortiz', '2023-01-24', '60/min', 'a', 'a', 'a', 'Corrected', 'N/A', 'a', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(81, '109342101029', '', 'Grade7-Findings', '', '110/90', '13/min', 'Normal', '36', '45', '325', '', '', '', 'Basilio.Cabasug', '2023-01-24', '60/min', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(82, '109342101029', 'a', 'Grade12-Findings', '', '110/90', '13/min', 'Normal', '37', '42', '159', 'a/b', 'a', 'a', 'Juztin.Ortiz', '2023-01-25', '60/min', 'a', 'a', 'a', 'Advised/Counseled', 'N/A', 'a', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '', '', '', 'M', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Gm', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'F', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Heavy shade', '', '', 'Sy F', '', 'Xt', '', 'JC', '', 'Alona.Mosquito-Leabres', '', '', '', '', '', '', '', '', '', 'Gn', '', '', '', '', '', '', '', '', '', 4, 1, 0, 6, 22, '2023-01-25'),
(83, '328371287319', '', 'Grade7-Findings', '', '110/90', '13/min', 'Normal', '36.4', '60', '155', '', '', '', 'Alona.Mosquito-Leabres', '2023-01-27', '60/min', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '0000-00-00'),
(84, '111111111111', 'a', 'Grade10-Findings', '', '110/90', '13/min', 'Normal', '37', '45', '155', 'a/b', 'a', 'a', 'Juztin.Ortiz', '2023-01-27', '60/min', 'a', 'a', 'a', 'Needs_follow_up', 'N/A', 'a', 'YES', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'x', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'x', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'xt', '', '', '', '', '', '', 'none', 'Alona.Mosquito-Leabres', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '2023-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `g_id` int(11) NOT NULL,
  `g_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`g_id`, `g_name`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `log_admission`
--

CREATE TABLE `log_admission` (
  `lo_id` int(11) NOT NULL,
  `lo_date` date NOT NULL,
  `lo_user_id` int(11) NOT NULL,
  `lo_fname` varchar(255) NOT NULL,
  `lo_mname` varchar(255) NOT NULL,
  `lo_lname` varchar(255) NOT NULL,
  `lo_gender` varchar(255) NOT NULL,
  `lo_age` varchar(255) NOT NULL,
  `lo_physician_id` varchar(255) NOT NULL,
  `lo_relationtopatient` varchar(255) NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `lo_wardname` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_admission`
--

INSERT INTO `log_admission` (`lo_id`, `lo_date`, `lo_user_id`, `lo_fname`, `lo_mname`, `lo_lname`, `lo_gender`, `lo_age`, `lo_physician_id`, `lo_relationtopatient`, `log_time`, `lo_wardname`) VALUES
(16, '0000-00-00', 53, 'James', 'Fernandez', 'Navarro', '', '', '1', '', '2019-05-02 16:14:53', ''),
(17, '0000-00-00', 53, 'James', 'Fernandez', 'Navarro', '', '', '1', '', '2019-05-03 03:15:23', '');

-- --------------------------------------------------------

--
-- Table structure for table `log_findings`
--

CREATE TABLE `log_findings` (
  `lo_id` int(11) NOT NULL,
  `lo_user_id` varchar(255) NOT NULL,
  `lo_fname` varchar(255) NOT NULL,
  `lo_mname` varchar(255) NOT NULL,
  `lo_lname` varchar(255) NOT NULL,
  `lo_gender` varchar(255) NOT NULL,
  `lo_age` int(11) NOT NULL,
  `lo_complaint` text NOT NULL,
  `lo_historypresentillness` text NOT NULL,
  `lo_bp` varchar(255) NOT NULL,
  `lo_rr` varchar(255) NOT NULL,
  `lo_cr` varchar(255) NOT NULL,
  `lo_temp` varchar(255) NOT NULL,
  `lo_wt` varchar(255) NOT NULL,
  `lo_pr` varchar(255) NOT NULL,
  `lo_physicalexam` text NOT NULL,
  `lo_diagnosis` text NOT NULL,
  `lo_medication` text NOT NULL,
  `lo_pulse` varchar(128) NOT NULL,
  `lo_mouth` varchar(128) NOT NULL,
  `lo_lungs` varchar(128) NOT NULL,
  `lo_spine` varchar(128) NOT NULL,
  `lo_abdo` varchar(128) NOT NULL,
  `lo_remarks` varchar(128) NOT NULL,
  `lo_others` varchar(128) NOT NULL,
  `lo_allergy` varchar(128) NOT NULL,
  `lo_asthma` varchar(128) NOT NULL,
  `lo_anemia` varchar(128) NOT NULL,
  `lo_bleeding` varchar(128) NOT NULL,
  `lo_hailment` varchar(128) NOT NULL,
  `lo_diabetes` varchar(128) NOT NULL,
  `lo_epilepsy` varchar(128) NOT NULL,
  `lo_kidney` varchar(128) NOT NULL,
  `lo_convulsion` varchar(128) NOT NULL,
  `lo_fainting` varchar(128) NOT NULL,
  `lo_physician_id` int(11) NOT NULL,
  `lo_date` date NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_findings`
--

INSERT INTO `log_findings` (`lo_id`, `lo_user_id`, `lo_fname`, `lo_mname`, `lo_lname`, `lo_gender`, `lo_age`, `lo_complaint`, `lo_historypresentillness`, `lo_bp`, `lo_rr`, `lo_cr`, `lo_temp`, `lo_wt`, `lo_pr`, `lo_physicalexam`, `lo_diagnosis`, `lo_medication`, `lo_pulse`, `lo_mouth`, `lo_lungs`, `lo_spine`, `lo_abdo`, `lo_remarks`, `lo_others`, `lo_allergy`, `lo_asthma`, `lo_anemia`, `lo_bleeding`, `lo_hailment`, `lo_diabetes`, `lo_epilepsy`, `lo_kidney`, `lo_convulsion`, `lo_fainting`, `lo_physician_id`, `lo_date`, `log_time`) VALUES
(1, '59', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2023-01-17', '2023-01-17 08:21:21'),
(17, '53', 'Jenna', 'Castro', 'Hassan', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0000-00-00', '2019-05-02 16:15:27'),
(18, '53', 'Jenna', 'Castro', 'Hassan', '', 0, '', '*Under Observation', '', '', '', '', '', '', 'dsaad', 'dsaad', 'asd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0000-00-00', '2019-05-02 16:15:33'),
(20, '53', 'Jenna', 'Castro', 'Hassan', '', 0, '', '*Under Observation', '', '', '', '', '', '', 'a', 'a', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '0000-00-00', '2019-05-03 04:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `oldadmission`
--

CREATE TABLE `oldadmission` (
  `oad_id` int(11) NOT NULL,
  `oad_date` date NOT NULL,
  `oad_user_id` int(11) NOT NULL,
  `oad_gender` varchar(255) NOT NULL,
  `oad_age` varchar(255) NOT NULL,
  `oad_physician_id` varchar(255) NOT NULL,
  `oad_chargetoaccount` varchar(255) NOT NULL,
  `oad_relationtopatient` varchar(255) NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oldadmission`
--

INSERT INTO `oldadmission` (`oad_id`, `oad_date`, `oad_user_id`, `oad_gender`, `oad_age`, `oad_physician_id`, `oad_chargetoaccount`, `oad_relationtopatient`, `log_time`) VALUES
(1, '2019-05-02', 1, 'Male', '25', '53', '', '', '2019-05-02 09:18:19');

-- --------------------------------------------------------

--
-- Table structure for table `oldfindings`
--

CREATE TABLE `oldfindings` (
  `of_id` int(11) NOT NULL,
  `of_user_id` int(11) NOT NULL,
  `of_fname` varchar(255) NOT NULL,
  `of_mname` varchar(255) NOT NULL,
  `of_lname` varchar(255) NOT NULL,
  `of_suffix` varchar(12) NOT NULL,
  `of_gender` varchar(255) NOT NULL,
  `of_age` int(11) NOT NULL,
  `of_complaint` text NOT NULL,
  `of_historypresentillness` text NOT NULL,
  `of_bp` varchar(255) NOT NULL,
  `of_rr` varchar(255) NOT NULL,
  `of_cr` varchar(255) NOT NULL,
  `of_temp` varchar(255) NOT NULL,
  `of_wt` varchar(255) NOT NULL,
  `of_pr` varchar(255) NOT NULL,
  `of_physicalexam` text NOT NULL,
  `of_diagnosis` text NOT NULL,
  `of_medication` text NOT NULL,
  `of_pulse` varchar(128) NOT NULL,
  `of_mouth` varchar(128) NOT NULL,
  `of_lungs` varchar(128) NOT NULL,
  `of_abdo` varchar(128) NOT NULL,
  `of_spine` varchar(128) NOT NULL,
  `of_remarks` varchar(128) NOT NULL,
  `of_others` varchar(128) NOT NULL,
  `of_allergy` varchar(128) NOT NULL,
  `of_asthma` varchar(128) NOT NULL,
  `of_anemia` varchar(128) NOT NULL,
  `of_bleeding` varchar(128) NOT NULL,
  `of_hailment` varchar(128) NOT NULL,
  `of_diabetes` varchar(128) NOT NULL,
  `of_epilepsy` varchar(128) NOT NULL,
  `of_kidney` varchar(128) NOT NULL,
  `of_convulsion` varchar(128) NOT NULL,
  `of_findings` varchar(128) NOT NULL,
  `of_physician_id` int(11) NOT NULL,
  `of_date` date NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `of_fainting` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oldfindings`
--

INSERT INTO `oldfindings` (`of_id`, `of_user_id`, `of_fname`, `of_mname`, `of_lname`, `of_suffix`, `of_gender`, `of_age`, `of_complaint`, `of_historypresentillness`, `of_bp`, `of_rr`, `of_cr`, `of_temp`, `of_wt`, `of_pr`, `of_physicalexam`, `of_diagnosis`, `of_medication`, `of_pulse`, `of_mouth`, `of_lungs`, `of_abdo`, `of_spine`, `of_remarks`, `of_others`, `of_allergy`, `of_asthma`, `of_anemia`, `of_bleeding`, `of_hailment`, `of_diabetes`, `of_epilepsy`, `of_kidney`, `of_convulsion`, `of_findings`, `of_physician_id`, `of_date`, `log_time`, `of_fainting`) VALUES
(4, 1, 'Jenna', 'Castro', 'Hassan', '', 'Female', 26, '', 'Headache', '', '', '', '', '', '', '', 'vomiting', 'ibuprofen ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 53, '2019-05-02', '2019-05-02 08:04:09', ''),
(24, 1, 'Alaiza', 'Tanaliga', 'Tampilic', '', 'Female', 25, 'a/b/c', 'Grade7-Findings', '110/90', '13/min', 'Normal', '36', '45', '157', 'a/b', 'a/b', 'a/b', '60/min', 'a/b', 'a/b', 'a/b', 'a/b/c', 'Needs_close_supervision', 'N/A', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '', 60, '2022-12-02', '2022-12-02 03:24:02', 'NO'),
(31, 1, 'Clarence', 'Tanaliga', 'Tampilic', '', 'Female', 21, 'a', 'Grade9-Findings', '110/90', '13/min', 'Normal', '36', '45', '157', 'a/b', 'a', 'a', '60/min', 'a', 'a', 'a', 'a', 'Advised/Counseled', 'aaaa', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '', 59, '2023-01-25', '2023-01-25 08:42:07', 'NO'),
(32, 1, 'Clarence', 'Tanaliga', 'Tampilic', '', 'Female', 21, 'a', 'Grade9-Findings', '110/90', '13/min', 'Normal', '36', '45', '157', 'a/b', 'a', 'a', '60/min', 'a', 'a', 'a', 'a', 'Advised/Counseled', 'aaaa', 'YES', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', '', 61, '2023-01-25', '2023-01-25 08:45:43', 'NO'),
(34, 1, 'Juan', 'Ramos', 'Dela Cruz', '', 'Male', 20, '', 'Grade7-Findings', '110/90', '13/min', 'Normal', '36.4', '60', '155', '', '', '', '60/min', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 59, '2023-01-27', '2023-01-27 03:43:10', ''),
(35, 1, 'Juan', 'Ramos', 'Dela Cruz', '', 'Male', 20, '', 'Grade7-Findings', '110/90', '13/min', 'Normal', '36.4', '60', '155', '', '', '', '60/min', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 61, '2023-01-27', '2023-01-27 03:43:31', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient_record`
--

CREATE TABLE `patient_record` (
  `pr_id` varchar(255) NOT NULL,
  `pr_user_id` int(11) NOT NULL,
  `pr_date` date NOT NULL,
  `pr_lname` varchar(255) NOT NULL,
  `pr_fname` varchar(255) NOT NULL,
  `pr_mname` varchar(255) NOT NULL,
  `pr_suffix` varchar(12) NOT NULL,
  `pr_addrs` varchar(255) NOT NULL,
  `pr_age` int(11) NOT NULL,
  `pr_bdate` date NOT NULL,
  `pr_bplace` varchar(255) NOT NULL,
  `pr_vaccinestat` varchar(128) NOT NULL,
  `pr_divi` varchar(128) NOT NULL,
  `pr_civilstat` varchar(255) NOT NULL,
  `pr_gen` varchar(255) NOT NULL,
  `pr_number` varchar(255) NOT NULL,
  `pr_religion` varchar(255) NOT NULL,
  `pr_occup` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_record`
--

INSERT INTO `patient_record` (`pr_id`, `pr_user_id`, `pr_date`, `pr_lname`, `pr_fname`, `pr_mname`, `pr_suffix`, `pr_addrs`, `pr_age`, `pr_bdate`, `pr_bplace`, `pr_vaccinestat`, `pr_divi`, `pr_civilstat`, `pr_gen`, `pr_number`, `pr_religion`, `pr_occup`, `month`, `year`) VALUES
('109342101029', 9, '2022-11-29', 'Nabor', 'Julian', 'Romano', '', '#3086-B Gumamela Ext. Gen T. De Leon Valenzuela City ', 17, '2005-07-24', 'Angeles City', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Female', '09994838209', 'Elma Nabor', 'Valenzuela National Highschool', 'NOV', '2022'),
('111111111111', 27, '2022-11-07', 'Tampilic', 'Clarence', 'Tanaliga', '', '3117-A Reposo St. Brgy. 589', 21, '2001-10-11', 'Lubang, Occidental Mindoro', 'FullyVaccinated', 'Manila-City', 'RegionIV–MIMAROPA', 'Female', '09472599976', 'Albert Tampilic', 'Technology University of the Philippines', 'Nov', '2022'),
('136251100382', 1, '2022-12-05', 'Canay', 'LJ Mae', 'Ermino', '', '#2 Galguerra comp. Encarnacion st. Marulas Valenzuela City', 16, '2006-01-08', 'Valenzuela', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Female', '09982335490', 'Joseph M. Canay', 'Valenzuela National Highschool', 'DEC', '2022'),
('136513020409', 1, '2022-12-05', 'Conde', 'Mark Adrian', 'Bagasina', '', '#3 Cassanova Dr, Brgy. Culiat. Quezon City. ', 20, '2002-08-02', 'Quezon City', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Male', '09231369726', 'Marlon Conde', 'Valenzuela National Highschool', 'DEC', '2022'),
('136513100130', 6, '2022-11-29', 'Conde', 'Jhon Patrick', 'Bagasina', '', '3078 Gumamela Abalos Bukid Ext.Gen t De leon Valenzuela City', 18, '2004-02-23', 'Valenzuela City', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Male', '09101795969', 'Marlon Conde', 'Valenzuela National Highschool', 'NOV', '2022'),
('136588160164', 15, '2022-12-05', 'Fernando', 'Lia Julienne', 'Pablo', '', '1665 C. compound brgy 18 valenzuela city', 4, '2018-08-18', 'Manila', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Female', '09951961877', 'Maicah Fernando', 'Valenzuela National Highschool', 'DEC', '2022'),
('136806100063', 7, '2022-11-29', 'Esteban', 'Ruth ', 'Dona', '', ' Valenzuela City', 17, '2005-05-23', 'Valenzuela Medical Center', 'Fully_Vaccinated_w/_Booster', 'Valenzuela-City', 'NCR', 'Female', '09339630511', 'Rodora Esteban', 'Valenzuela National Highschool', 'NOV', '2022'),
('136824100042', 16, '2022-12-05', 'Colis', 'Arden', 'Guardiana ', '', '12M Herrera St, Marulas Valenzuela City ', 17, '2005-08-02', 'Manila', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Male', '09331169813', 'Ma. Lourdes G Colis', 'Valenzuela National Highschool', 'DEC', '2022'),
('136825060065', 4, '2022-11-29', 'Bustarde', 'Kimberly Anne', 'Declines', '', '44 Galguerra Compound, Encarnacion St. Brgy. Marulas, Valenzuela City', 21, '2001-05-16', 'Malolos, Bulacan', 'Fully_Vaccinated_w/_Booster', 'Valenzuela-City', 'NCR', 'Female', '09182721882', 'Valentino Bustarde', 'Valenzuela National Highschool', 'NOV', '2022'),
('136825090186', 11, '2022-11-30', 'Infiesto', 'Christian Loyd', 'Gaoiran', '', '33 Sandiego St. Marulas Valenzuela City', 19, '2003-11-23', 'Davao Del Norte City', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Male', '09216645892', 'Carl Infiesto', 'Valenzuela National Highschool', 'NOV', '2022'),
('136825100224', 18, '2022-12-05', 'Mance', 'Bianca', 'Baltazar ', '', '207 f.bautista st marulas Valenzuela city', 17, '2005-04-04', 'Valenzuela ', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Female', '09636420857', 'Ma. Angelina Baltazar ', 'Valenzuela National Highschool', 'DEC', '2022'),
('136825110006', 25, '2022-12-05', 'Aldana', 'Kurt', 'Sicat', '', '29 dama denotche marulas valenzuela city', 17, '2005-11-25', 'Marulas valenzuela ', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Male', '09319073974', 'Joan Sicat', 'Valenzuela National Highschool', 'DEC', '2022'),
('136825120367', 1, '2022-11-29', 'Bustarde', 'Hainabelle', 'Declines', '', '44 jacinto extn galguerra compound marulas val city', 16, '2006-05-18', 'Bulacan', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Female', '09182721882', 'Anna Bustarde', 'Valenzuela National Highschool', 'NOV', '2022'),
('136825194542', 2, '2022-11-29', 'Ignacio ', 'Sofia Denise ', 'Esquilona ', '', 'Riverside st, malabon city', 16, '2006-05-01', 'Valenzuela ', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Female', '09981904881', 'Salve & Ronald Ignacio ', 'Valenzuela National Highschool', 'NOV', '2022'),
('136825358412', 13, '2022-12-05', 'Roca', 'Khyle Raven', 'Bustarde', '', '45 Galguerra Compound, Encarnacion St. Brgy. Marulas, Valenzuela City', 13, '2010-09-02', 'Valenzuela City', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Male', '09176303480', 'Jess Roca', 'Valenzuela National Highschool', 'DEC', '2022'),
('136825782407', 12, '2022-12-05', 'Buan', 'Hazelle Vei', 'Renegado', '', '41 Galguerra Compound, Encarnacion Street Brgy. Marulas, Valenzuela City', 19, '2001-10-18', 'Caloocan City', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Female', '09361752322', 'Luz Renegado', 'Valenzuela National Highschool', 'DEC', '2022'),
('136826100059', 19, '2022-12-05', 'Dupo', 'Cliford Duane', 'B.', '', '#21 C Reyes Compound, Marulas, Valenzuela City', 20, '2002-11-26', 'Valenzuela City', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Male', '09162267892', 'Grace B. Dupo', 'Valenzuela National Highschool', 'DEC', '2022'),
('136826100099', 17, '2022-12-05', 'Loyola', 'Kench Justin ', 'Azada', '', '104 capricorn st marulas valenzuela city', 17, '2005-04-01', 'Manila', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Male', '09665489195', 'Josie Loyola', 'Valenzuela National Highschool', 'DEC', '2022'),
('136826110101', 21, '2022-12-05', 'Caderao', 'Lesly ', 'M', '', '81 Capricorn st.batimana cmpd marulas Valenzuela city ', 18, '2004-01-01', 'Valenzuela ', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Female', '09372754918', 'Teresita Monsing', 'Valenzuela National Highschool', 'DEC', '2022'),
('136826120251', 8, '2022-11-29', 'Bonacua', 'Nahjela Feona', 'Catador', '', '69t.concepcion st.marulas, Valenzuela City', 17, '2005-09-19', 'Tondo, Manila', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Female', '09323715251', 'Hazel C. Salvador', 'Valenzuela National Highschool', 'NOV', '2022'),
('136826293479', 14, '2022-12-05', 'Dangat', 'Bea Erika', 'De Vera', '', '31 Galguerra Compound, Encarnacion st. Brgy. Marulas, Valenzuela City', 18, '2001-08-18', 'Valenzuela City', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Female', '09751245212', 'Willie Dangat', 'Valenzuela National Highschool', 'DEC', '2022'),
('136827100077', 20, '2022-12-05', 'David', 'Cheace Eunice', 'Tan', '', '17 Tampoy 2 Marulas Valenzuela City', 17, '2005-06-12', 'Valenzuela City', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Female', '09751038496', 'Cheryl David', 'Valenzuela National Highschool', 'DEC', '2022'),
('136827110024', 26, '2022-12-05', 'bonguit', 'janah', 'mendoza', '', '2 fatima ave pag asa subdivision marulas valenzuela city', 16, '2006-06-01', 'our lady of fatima medical center', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Female', '09952165045', 'Maria Tita Bonguit', 'Valenzuela National Highschool', 'DEC', '2022'),
('227002100042', 5, '2022-11-29', 'Bonacua', 'King Prots', 'Atchico', '', '3078 Gumamela Ext. Gen t deleon Valenzuela City', 17, '2022-08-01', 'Valenzuela City', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Male', '09104526370', 'Virginia Bonacua', 'Valenzuela National Highschool', 'NOV', '2022'),
('328371287319', 1, '2023-01-27', 'Dela Cruz', 'Juan', 'Ramos', 'Sr.', '44 Galguerra Compound Encarnation St., Valenzuela City', 20, '2023-01-27', 'Baguio City', 'FullyVaccinated', 'Manila-City', 'NCR', 'Male', '09125323217', 'Mr. Dela Cruz', 'Technology University of the Philippines', 'Jan', '2023'),
('403547150015', 22, '2022-12-05', 'Javier', 'Hanika Angela', 'Ortiz', '', 'Little tagaytay marulas valenzuela', 16, '2006-07-18', 'Provincial Hospital', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Female', '09650513354', 'Princess Ortiz', 'Valenzuela National Highschool', 'DEC', '2022'),
('407203150113', 3, '2022-11-29', 'Roca', 'Jesse Jandrick', 'Bustarde', '', '#45 Galguerra compund, Encarnacion St., Marulas, Valenzuela City', 13, '2009-04-11', 'Fatima University Medical Center, Valenzuela City', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Male', '09176303480', 'Rosalie B. Roca', 'Valenzuela National Highschool', 'NOV', '2022'),
('407203150299', 10, '2022-11-29', 'Lee', 'Francheska Jairha ', 'Catador', '', '24 Encarnacion Street Marulas Valenzuela City', 15, '2006-12-07', 'Valenzuela city', 'FullyVaccinated', 'Valenzuela-City', 'NCR', 'Female', '09981904881', 'Joey Lee', 'Valenzuela National Highschool', 'NOV', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `physicians`
--

CREATE TABLE `physicians` (
  `ph_id` int(11) NOT NULL,
  `ph_name` varchar(255) NOT NULL,
  `ph_fieldofphysician` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physicians`
--

INSERT INTO `physicians` (`ph_id`, `ph_name`, `ph_fieldofphysician`, `date_added`) VALUES
(41, 'Juztin.Ortiz', 'Clinic_Admin', '2022-11-08 10:54:38'),
(43, 'Alona.Mosquito-Leabres', 'Dentist', '2022-12-02 03:27:49'),
(44, 'Basilio.Cabasug II', 'Nurse', '2022-12-02 03:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `remarks`
--

CREATE TABLE `remarks` (
  `r_id` int(128) NOT NULL,
  `r_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `remarks`
--

INSERT INTO `remarks` (`r_id`, `r_name`) VALUES
(1, 'Needs_Supervision'),
(2, 'Needs_close_supervision'),
(3, 'Needs_follow_up'),
(4, 'Corrected'),
(5, 'Treated'),
(6, 'Advised/Counseled'),
(7, 'Referred'),
(8, 'Parents_Notified'),
(9, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `standardusers`
--

CREATE TABLE `standardusers` (
  `su_id` int(11) NOT NULL,
  `su_userid` int(11) NOT NULL,
  `su_user` varchar(255) NOT NULL,
  `su_pass` varchar(255) NOT NULL,
  `su_fname` varchar(255) NOT NULL,
  `su_position` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `standardusers`
--

INSERT INTO `standardusers` (`su_id`, `su_userid`, `su_user`, `su_pass`, `su_fname`, `su_position`, `date_created`) VALUES
(59, 1, 'Kim.Bustarde', '$2y$12$O5ww2fPTPfdmh1ntaKiH7.w9dcIyztOFVjTFYuFe0640Qo5Zq9MRm', 'Kimberly Bustarde', 'Doctor', '2022-12-02 03:13:43'),
(61, 1, 'Emiele.Ariola', '$2y$12$u30fj4DXHF4pUDvU9OxFqOvNaI5BtXJjvzluvPgM5qEYdP2RpCv9S', 'France Emiele Ariola', 'Doctor', '2023-01-25 07:22:44'),
(62, 1, 'Mika.Rominez', '$2y$12$2TEB7XonpVGDU/PdWKuxVuMncmaGVieA4T83L5v3fAA/tk8TB3Sfu', 'Mikaela Joy Rominez', 'Doctor', '2023-01-25 07:23:18');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `st_id` int(11) NOT NULL,
  `st_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`st_id`, `st_name`) VALUES
(1, 'YES'),
(2, 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(255) NOT NULL,
  `u_user` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_secretquestion` varchar(255) NOT NULL,
  `u_secretanswer` varchar(255) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_fname`, `u_user`, `u_pass`, `u_secretquestion`, `u_secretanswer`, `date_registered`) VALUES
(1, 'Justin', 'admin', '$2y$10$ARoSHf7TAHqpYOaRE9U2Te0N.UVcRfKEsPCHuZ6CFf3tJP2xyYJly', 'What was your childhood nickname?', '0043f605eeeae08811074cc2f26c5126d21b24da', '2019-03-12 13:35:12'),
(2, 'clang', 'clang', '$2y$10$ARoSHf7TAHqpYOaRE9U2Te0N.UVcRfKEsPCHuZ6CFf3tJP2xyYJly', 'What is the name of your father?', 'Albert', '2023-01-27 05:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinestat`
--

CREATE TABLE `vaccinestat` (
  `v_id` int(11) NOT NULL,
  `v_name` varchar(128) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccinestat`
--

INSERT INTO `vaccinestat` (`v_id`, `v_name`) VALUES
(1, 'FullyVaccinated'),
(2, 'Partially Vaccinated'),
(3, 'Fully_Vaccinated_w/_Booster'),
(4, 'Not_yet Vaccinated ');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `w_id` int(11) NOT NULL,
  `w_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`w_id`, `w_name`) VALUES
(1, 'Headache'),
(2, 'Colds'),
(3, 'Fever'),
(4, 'Allergies'),
(5, 'Stomachache'),
(6, 'Dizziness'),
(7, 'Menstrual cramps'),
(8, 'Muscle_aches'),
(9, 'Vomiting'),
(10, 'Abdominal_pain'),
(11, 'Rashes'),
(12, 'Others');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_patientfindings`
--
ALTER TABLE `add_patientfindings`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `civilstat`
--
ALTER TABLE `civilstat`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `cr`
--
ALTER TABLE `cr`
  ADD PRIMARY KEY (`cr_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`de_id`);

--
-- Indexes for table `divi`
--
ALTER TABLE `divi`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `fieldsphysician`
--
ALTER TABLE `fieldsphysician`
  ADD PRIMARY KEY (`fp_id`);

--
-- Indexes for table `findings`
--
ALTER TABLE `findings`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `log_admission`
--
ALTER TABLE `log_admission`
  ADD PRIMARY KEY (`lo_id`);

--
-- Indexes for table `log_findings`
--
ALTER TABLE `log_findings`
  ADD PRIMARY KEY (`lo_id`);

--
-- Indexes for table `oldadmission`
--
ALTER TABLE `oldadmission`
  ADD PRIMARY KEY (`oad_id`);

--
-- Indexes for table `oldfindings`
--
ALTER TABLE `oldfindings`
  ADD PRIMARY KEY (`of_id`);

--
-- Indexes for table `patient_record`
--
ALTER TABLE `patient_record`
  ADD PRIMARY KEY (`pr_id`),
  ADD UNIQUE KEY `pr_id` (`pr_id`);

--
-- Indexes for table `physicians`
--
ALTER TABLE `physicians`
  ADD PRIMARY KEY (`ph_id`);

--
-- Indexes for table `remarks`
--
ALTER TABLE `remarks`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `standardusers`
--
ALTER TABLE `standardusers`
  ADD PRIMARY KEY (`su_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `vaccinestat`
--
ALTER TABLE `vaccinestat`
  ADD PRIMARY KEY (`v_id`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_patientfindings`
--
ALTER TABLE `add_patientfindings`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `civilstat`
--
ALTER TABLE `civilstat`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cr`
--
ALTER TABLE `cr`
  MODIFY `cr_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `de_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `divi`
--
ALTER TABLE `divi`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `fieldsphysician`
--
ALTER TABLE `fieldsphysician`
  MODIFY `fp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `findings`
--
ALTER TABLE `findings`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log_admission`
--
ALTER TABLE `log_admission`
  MODIFY `lo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `log_findings`
--
ALTER TABLE `log_findings`
  MODIFY `lo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `oldadmission`
--
ALTER TABLE `oldadmission`
  MODIFY `oad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oldfindings`
--
ALTER TABLE `oldfindings`
  MODIFY `of_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `physicians`
--
ALTER TABLE `physicians`
  MODIFY `ph_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `remarks`
--
ALTER TABLE `remarks`
  MODIFY `r_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `standardusers`
--
ALTER TABLE `standardusers`
  MODIFY `su_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vaccinestat`
--
ALTER TABLE `vaccinestat`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
