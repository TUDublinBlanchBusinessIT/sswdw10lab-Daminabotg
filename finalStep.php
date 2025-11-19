<?php
include("finalStepHeader.html");

// start a session
session_start();

// echo the passenger's firstname
echo $_SESSION['passengerFN'];

echo "<br>";

// echo the passenger's surname
echo $_SESSION['passengerSN'];

echo "<br>";

// if the luggage session variable is on
if (isset($_SESSION['luggage']) && $_SESSION['luggage'] == 1) {

    // echo the amount of bags under ten kilos
    echo "Bags under 10KG: " . $_SESSION['subTenKG'];

    echo "<br>";

    // echo the amount of bags over ten kilos
    echo "Bags 10–20KG: " . $_SESSION['overTenKG'];
}
?>
</h4></div></div>

<form method="POST" action="confirm.php">
    <div class="form-group">        
        <label class="control-label col-sm-12 text-center">Is the above information correct?</label>
        <div class="checkbox col-sm-12 text-center">
          <label><input type="checkbox" name="confirm">Yes</label>
        </div>
    </div>
   
    <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-default">Continue</button>
    </div>
</form>
