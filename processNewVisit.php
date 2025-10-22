<?php
include('dbcon.php');

$visitDate = $_POST['visitDate'];
$visitTime = $_POST['visitTime'];
$doctorID  = $_POST['docid'];
$patientID = $_POST['ptntid'];
$cost      = $_POST['cost'];

$sql = "INSERT INTO visit (visit_date, visit_time, doctor_id, patient_id, cost)
        VALUES ('$visitDate', '$visitTime', '$doctorID', '$patientID', '$cost');";

// echo "<pre>$sql</pre>";

if (mysqli_query($conn, $sql)) {
    echo "New visit record inserted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
