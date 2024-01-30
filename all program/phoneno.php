<!DOCTYPE html>
<html>

<head>
    <title>Form Validation</title>
</head>

<body>

    <form id="myForm">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required><br><br>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="male">Male
        <input type="radio" id="female" name="gender" value="female">Female<br><br>

        <input type="button" value="Register" onclick="validateForm()">
    </form>

    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            if (name === "" || email === "" || password === "" || confirmPassword === "") {
                alert("Please fill in all required fields.");
            } else if (!validateEmail(email)) {
                alert("Invalid email format. Please enter a valid email address.");
            } else if (password.length < 6) {
                alert("Password should be at least 6 characters long.");
            } else if (password !== confirmPassword) {
                alert("Passwords do not match. Please enter matching passwords.");
            } else {
                alert("Registration successful!");
                // Additional code to submit the form or perform other actions.
            }
        }

        function validateEmail(email) {
            var re = /\S+@\S+\.\S+/;
            return re.test(email);
        }
    </script>

</body>

</html>
