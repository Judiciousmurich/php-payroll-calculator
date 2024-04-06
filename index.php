<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $EmployeeName = $_POST['employeeName'];
    $hoursWorked = $_POST['hoursWorked'];
    $ratePerHour = $_POST['ratePerHour'];

    // CALCULATE NET PAY
    $basicPay = $hoursWorked * ratePerHour;

    // Calculate tax based on basic pay
    $netPay = $basicPay - $tax;

}