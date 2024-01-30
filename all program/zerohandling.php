<?php

function divide($numerator, $denominator) {
    if ($denominator == 0) {
        throw new Exception("Cannot divide by zero!");
    }

    return $numerator / $denominator;
}

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numerator = $_POST["numerator"];
        $denominator = $_POST["denominator"];

        $result = divide($numerator, $denominator);

        echo "Result: " . $result;
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Divide by Zero Exception Handling</title>
</head>
<body>

<form method="post" action="">
    Enter the numerator: <input type="text" name="numerator"><br>
    Enter the denominator: <input type="text" name="denominator"><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>