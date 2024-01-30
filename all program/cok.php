<html>

<head>

<title>Program to create retrieve and delete Cookies in php</title>

</head>

<body>

<form method="POST" action="cok.php">

<h1>program to create and retrieve cookie</h1>

<pre><b>

Enter Name: <input type="text" name="name"> <br/>

Enter Age: <input type="text" name="age"> <br/>

Enter City: <input type="text" name="city"><br/>

</b></pre>

<br/>

<input type="submit" name="Submit1" value="Create Cookie">

<input type="submit" name="Submit2" value="Retrive Cookie">

<input type="submit" name="Submit3" value="Delete Cookie">

</form>
<?php
if (isset($_POST["Submit1"])) {
    if (empty($_POST["name"]) || empty($_POST["age"]) || empty($_POST["city"])) {
        echo("SORRY! Cookie values cannot be null<br>");
    } else {
        setcookie("name", $_POST["name"], time() + 3600);
        setcookie("age", $_POST["age"], time() + 3600);
        setcookie("city", $_POST["city"], time() + 3600);
        echo "Cookies Created !!";
    }
}

if (isset($_POST['Submit2'])) {
    if (isset($_COOKIE["name"]) && isset($_COOKIE["age"]) && isset($_COOKIE["city"])) {
        echo "Cookie Details are:</br>";
        echo "Name = " . $_COOKIE["name"] . "<br/>";
        echo "Age = " . $_COOKIE["age"] . "<br/>";
        echo "City = " . $_COOKIE["city"] . "<br/>";
    } else {
        echo "Sorry! Cookie not set";
    }
}

if (isset($_POST["Submit3"])) {
    if (!isset($_COOKIE["name"]) || !isset($_COOKIE["age"]) || !isset($_COOKIE["city"])) {
        echo("SORRY! Cookies not set<br>");
    } else {
        setcookie("name", "", time() - 3600);
        setcookie("age", "", time() - 3600);
        setcookie("city", "", time() - 3600);
        echo "Cookies deleted !!";
    }
}
?>

</body>

</html>