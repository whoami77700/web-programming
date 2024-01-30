<!DOCTYPE html>
<html>

<head>
    <title>Program to Display the Pattern</title>
</head>

<body>

    <h1>Program to Display the Pattern</h1>

    <form method="post">
        Enter a number: <input type="text" name="input"> <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <hr>

    <center>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = $_POST['input'];
            for ($i = 1; $i <= $num; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "* ";
                }
                echo "<br>";
            }
        }
        ?>
    </center>

</body>

</html>