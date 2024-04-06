<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $EmployeeName = $_POST['employeeName'];
    $hoursWorked = $_POST['hoursWorked'];
    $ratePerHour = $_POST['ratePerHour'];

    // CALCULATE NET PAY
    $basicPay = $hoursWorked * ratePerHour;

    // Calculate tax based on basic pay
    $netPay = $basicPay - $tax;

    echo "Employee Name: " . $EmployeeName . "<br>";
    echo "Basic Pay: " . number_format($basicPay, 2) . "<br>";
    echo "Tax: $" . number_format($tax, 2) . "<br>";
    echo "Net Pay: $" . number_format($netPay, 2);

}