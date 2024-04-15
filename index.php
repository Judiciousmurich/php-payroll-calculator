<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employeeName = $_POST['employeeName'];
    $hoursWorked = $_POST['hoursWorked'];
    $ratePerHour = $_POST['ratePerHour'];

    // Calculate basic pay
    $basicPay = $hoursWorked * $ratePerHour;

    if ($basicPay > 50000) {
        $tax = $basicPay * 0.20;
    } elseif ($basicPay >= 20000 && $basicPay <= 50000) {
        $tax = $basicPay * 0.10;
    } else {
        $tax = 0;
    }

    // Calculate net pay
    $netPay = $basicPay - $tax;

    echo "Employee Name: " . $employeeName . "<br>";
    echo "Basic Pay: $" . number_format($basicPay, 2) . "<br>";
    echo "Tax: $" . number_format($tax, 2) . "<br>";
    echo "Net Pay: $" . number_format($netPay, 2);
}
?>

<!-- html -->
<!DOCTYPE html>
<html>
<head>
    <title>Payroll Calculator.</title>
</head>
<body>
    <h2>Payroll Calculator</h2>
    <form method="post">
        Employee Name: <input type="text" name="employeeName" required><br>
        Hours Worked: <input type="number" name="hoursWorked" step="0.01" required><br>
        Rate per Hour: <input type="number" name="ratePerHour" step="0.01" required><br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>