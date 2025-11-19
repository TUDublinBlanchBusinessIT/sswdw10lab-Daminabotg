<?php
session_start();


if (!isset($_POST['confirm'])) {
    header("Location: flightBooking.html");
    exit();
}

$fn = $_SESSION['passengerFN'];
$sn = $_SESSION['passengerSN'];

if ($_SESSION['luggage'] == '1') {
    $subTenKG = $_SESSION['subTenKG'];
    $overTenKG = $_SESSION['overTenKG'];
} else {
    $subTenKG = 0;
    $overTenKG = 0;
}

include("dbcon.php");


$sql = "INSERT INTO flightbooking (firstname, surname, bagsUnderTenKG, bagsOverTenKG) 
        VALUES ('$fn', '$sn', $subTenKG, $overTenKG)";

if (mysqli_query($conn, $sql)) {
    echo "Your flight booking was created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


session_destroy();
?>
