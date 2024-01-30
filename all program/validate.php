<!DOCTYPE html>
<html>

<head>
    <style>
        .error {
            color: #ff0000;
        }
    </style>
</head>

<body>

    <?php
    $nameErr = $emailErr = $genderErr = $addressErr = "";
    $name = $email = $gender = $address = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }

        if (empty($_POST["address"])) {
            $addressErr = "Address is required";
        } else {
            $address = test_input($_POST["address"]);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>PHP Zone Input Validation Example</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        Email: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        Address: <textarea name="address" rows="5" cols="40"><?php echo $address; ?></textarea>
        <span class="error">* <?php echo $addressErr; ?></span>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female" <?php if ($gender == "female") echo "checked"; ?>>Female
        <input type="radio" name="gender" value="male" <?php if ($gender == "male") echo "checked"; ?>>Male
        <input type="radio" name="gender" value="other" <?php if ($gender == "other") echo "checked"; ?>>Other
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($emailErr) && empty($genderErr) && empty($addressErr)) {
        echo "<h2>Your Input:</h2>";
        echo "Name: $name";
        echo "<br>";
        echo "Email: $email";
        echo "<br>";
        echo "Address: $address";
        echo "<br>";
        echo "Gender: $gender";
    }
    ?>

</body>

</html>
