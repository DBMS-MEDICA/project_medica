<?php
include_once("../classes/db/DB_CONNECTION.class.php");
$current_patient = json_decode($_SESSION['Patient']);

$db = new DB_CONNECTION("medica_admin", "medica_admin");

$stmt = $db->prepare("SELECT d.doctor_name, c.region, a.sl_no, a.ETA FROM Appointment a, Chamber c, Doctor d WHERE a.Doctor_ID=d.doctor_id and a.chamber_id=c.chamber_id and CAST(ETA AS DATE) >= (sysdate - 7) AND Patient_id='" . $current_patient->patient_id . "' ORDER BY ETA DESC");
$stmt->execute();
$appointments = array();
while ($rows = $stmt->fetchAll()) {
    $appointments = $rows;
}


$stmt = $db->prepare("Select * from Prescription pr, Patient pa where pr.patient_id=pa.patient_id order by prescription_date desc");
$stmt->execute();
$prescriptions = array();
while ($rows = $stmt->fetchAll()) {
    $prescriptions = $rows;
}
