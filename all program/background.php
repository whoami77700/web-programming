<html>

<body>

<?php
$today = date("l");

// Default background color
$bgcolor = "white";

if ($today == "Sunday") {
    $bgcolor = "black";
} elseif ($today == "Monday") {
    $bgcolor = "red";
} elseif ($today == "Wednesday") {
    $bgcolor = "green";
} elseif ($today == "Friday") {
    $bgcolor = "yellow";
} elseif ($today == "Thursday") {
    $bgcolor = "purple";
}

echo "<h1 style=\"background-color: $bgcolor;\">This program changes background color based on the day of the week</h1>";
?>

<!-- Rest of your HTML content -->

</body>

</html>