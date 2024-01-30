<html>
<head>
<title>PHP File create/write Example</title>
</head>
<body>

<h1>Program to read and write file</h1>

<form method="POST">
    <input type="submit" name="Submit" value="Read File"><br/><br/>
    Enter String to write to file : <input type="text" name="name"> <br/><br/>
    <input type="submit" name="Submit2" value="Write File">
</form>

<?php
if (isset($_POST['Submit'])) {
    $filename = fopen("hello.txt", "r");

    if ($filename) {
        $filesize = filesize("hello.txt");
        $filecontent = fread($filename, $filesize);

        fclose($filename);

        echo("File Name=hello.txt</br>");
        echo("File Content = $filecontent <br>");
        echo("File size: $filesize bytes");
    } else {
        echo "Error !! Try again";
    }
}

if (isset($_POST['Submit2'])) {
    // open file hello.txt in append mode
    $myfile = fopen("hello.txt", "a");

    $text = $_POST["name"];

    fwrite($myfile, $text);

    fclose($myfile);
}
?>

</body>
</html>