<?php

include('database.php');

// get some data!
$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

$myArray = array();
error_log("get-employees::Num rows: " . $result->num_rows);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $myArray[] = $row;
    }

    // output our array as json
    echo json_encode(array('data' => $myArray));

} else {
    error_log('get-employees::zero results');
}

// finished so close the db connection
$conn->close();

