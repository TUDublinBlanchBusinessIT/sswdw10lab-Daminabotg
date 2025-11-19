<?php

session_start();


$_SESSION['subTenKG'] = $_POST['subTenKG'];
$_SESSION['overTenKG'] = $_POST['overTenKG'];


header("Location: finalStep.php");
exit();
?>
