<?php

function validateDate($date) {
    $format = 'd-m-Y';
    $dateTime = DateTime::createFromFormat($format, $date);

    if (!$dateTime || $dateTime->format($format) !== $date) {
        throw new Exception("Invalid date format. Please enter date in dd-mm-yyyy format.");
    }

    return $dateTime;
}

try {
    $errorMessage = ""; // Initialize an empty error message
    $validDateMessage = ""; // Initialize an empty valid date message

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputDate = $_POST["date"];

        try {
            $validDate = validateDate($inputDate);
            $validDateMessage = "Valid date format is: " . $validDate->format('d-m-Y');
        } catch (Exception $e) {
            $errorMessage = $e->getMessage();
        }
    }
} catch (Exception $e) {
    $errorMessage = "Error: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Date Validation Exception Handling</title>
    <style>
        .error {
            color: #ff0000;
        }
    </style>
</head>
<body>

<form method="post" action="">
    Enter a date: <input type="text" name="date" placeholder="dd-mm-yyyy"><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (!empty($errorMessage)) {
    echo '<span class="error">' . $errorMessage . '</span>';
} elseif (!empty($validDateMessage)) {
    echo '<p>' . $validDateMessage . '</p>';
}
?>

</body>
</html>
