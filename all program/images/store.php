<!DOCTYPE HTML>
<html>
<head>
    <title>Image</title>
</head>
<body>
    <form method="post" action="store.php" enctype="multipart/form-data">
        <input type="file" name="image">
        <button type="submit" name="upload">Upload Image</button>
        <button type="submit" name="view">View Image</button>
    </form>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "student_db");

    if (isset($_POST['upload'])) {
        $Get_image_name = $_FILES['image']['name'];
        $img_path = "images/" . basename($Get_image_name);

        // Check if the directory exists, create it if not
        if (!file_exists("images")) {
            mkdir("images");
        }

        $sql = "INSERT INTO student (imagename, created_time) VALUES ('$Get_image_name', NOW())";
        mysqli_query($conn, $sql);
        
        if (move_uploaded_file($_FILES['image']['tmp_name'], $img_path)) {
            echo "Successful";
        } else {
            echo "Try again";
        }
    }

    if (isset($_POST['view'])) {
        $img = mysqli_query($conn, "SELECT * FROM student");
        echo "Retrieve";
        
        while ($row = mysqli_fetch_array($img)) {
            echo "<img src='images/" . $row['imagename'] . "'>";
        }
    }
    ?>
</body>
</html>
