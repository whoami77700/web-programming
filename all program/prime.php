<html>

<body>

<h1>Program to Generate Prime Numbers Within a Given Range</h1>

<form method="post">
    Enter first number: <input type="text" name="first"><br>
    Enter second number: <input type="text" name="second"><br>
    <input type="submit" name="submit" value="Generate">
</form>

<?php
function isPrime($num)
{
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

if (isset($_POST['submit'])) {
    $first = (int)$_POST['first'];
    $second = (int)$_POST['second'];

    echo "<p>Prime numbers between $first and $second are: ";

    for ($i = $first; $i <= $second; $i++) {
        if (isPrime($i)) {
            echo "$i ";
        }
    }

    echo "</p>";
}
?>

<!-- Rest of your HTML content -->

</body>

</html>