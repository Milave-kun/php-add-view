<?php
include('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $mname = $_POST["mname"];
    $num = $_POST["num"];
    $streetname = $_POST["streetname"];
    $baranggay = $_POST["baranggay"];
    $city = $_POST["city"];
    $bday = $_POST["bday"];
    $course = $_POST["course"];
    $year = $_POST["year"];

    $sql = "UPDATE info SET fname='$fname', lname='$lname', mname='$mname', streetnum='$num', 
            streetname='$streetname', brgy='$baranggay', city='$city', bday='$bday', 
            year='$year', course='$course' WHERE id='$id'";
    
    try {
        mysqli_query($conn, $sql);
        echo "<div class='bg-success fw-bold p-3'>Update Successful!</div>";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM info WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your HTML head content -->
</head>
<body>
    <div class="container">
        <h2>Update Student Information</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <!-- Input fields to update student information -->
        </form>
    </div>
</body>
</html>
