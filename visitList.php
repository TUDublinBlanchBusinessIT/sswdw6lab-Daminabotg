<?php
include('dbcon.php');

$sql = "SELECT * FROM visit";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['visit_date'] . "</td>";
    echo "<td>" . $row['visit_time'] . "</td>";
    echo "<td>" . $row['doctor_id'] . "</td>";
    echo "<td>" . $row['patient_id'] . "</td>";
    echo "<td>" . $row['cost'] . "</td>";
    echo "<td>" . $row['overtime'] . "</td>";
    echo "</tr>";
}

mysqli_close($conn);
?>
