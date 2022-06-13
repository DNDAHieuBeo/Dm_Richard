<?php

include('database.php');

// get some data!
$sql = "SELECT * FROM cars";
$result = $conn->query($sql);

$myArray = array();
//echo $result->num_rows . "<br>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        //echo $row['make'] . "<br>";
        $myArray[] = $row;
    }

    // output our array as json
    echo json_encode(array('data' => $myArray));

} else {
    echo 'zero results';
}

// finished so close the db connection
$conn->close();
