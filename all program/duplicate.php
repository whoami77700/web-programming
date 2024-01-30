<!DOCTYPE html>
<html>

<head>
    <title>Program to Remove Duplicates from Given List</title>
</head>

<body>

<h1>Program to Remove Duplicates from Given List</h1>

<?php
function removeDuplicates($nums)
{
    $uniqueNums = array_unique($nums);
    return $uniqueNums;
}

$nums = array(1, 1, 2, 2, 3, 4, 5, 5);

echo "<p>The given list with duplicate elements is:</p>";
print_r($nums);

echo "<p>The list after removing duplicates is:</p>";
$result = removeDuplicates($nums);
print_r($result);
?>

<!-- Rest of your HTML content -->

</body>

</html>