<html>

<head>
    <title>Fibonacci Finder</title>
</head>

<body>

<h1>Program to Find Fibonacci Numbers</h1>

<form method="post">
    Enter a number: <input type="text" name="number"> <br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['number'];

    echo "Fibonacci series up to $n: ";

    $n1 = 0;
    $n2 = 1;
    
    echo "$n1, $n2";

    $i = 2;
    while ($i < $n) {
        $n3 = $n1 + $n2;
        echo ", $n3";
        $n1 = $n2;
        $n2 = $n3;
        $i++;
    }
}
?>

<!-- Rest of your HTML content -->

</body>

</html>