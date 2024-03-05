<?php
    include('database.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Senior High
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="gas.php">GAS</a></li>
            <li><a class="dropdown-item" href="abm.php">ABM</a></li>
            <li><a class="dropdown-item" href="stem.php">STEM</a></li>
            <li><a class="dropdown-item" href="humms.php">HUMMS</a></li>
            <li><a class="dropdown-item" href="ict.php">ICT</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            College
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="bsit.php">BSIT</a></li>
            <li><a class="dropdown-item" href="bshm.php">BSHM</a></li>
            <li><a class="dropdown-item" href="bstm.php">BSTM</a></li>
            <li><a class="dropdown-item" href="bsoa.php">BSOA</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-lg">
    <div class="text-center">
        <h2>Register A Student</h2>
    </div>
</div>

<div class="container my-5">
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <label class="fw-bold">Full Name:<span style='color:red;'>*</span></label>
        <div class="row">
            <div class="col-5">
                 <input type="text" class="form-control" placeholder="First Name" name="fname"> 
            </div>
            <div class="col-5">
                <input type="text" class="form-control" placeholder="Last Name" name="lname">
            </div>
            <div class="col-2">
                <input type="text" class="form-control" placeholder="Middle Name" name="mname">
            </div>
        </div>
        <label class="fw-bold mt-3">Address:<span style='color:red;'>*</span></label>
        <div class="row">
            <div class="col-1">
                <input type="text" class="form-control" placeholder="#" name="num">
            </div>
            <div class="col-3">
                <input type="text" class="form-control" placeholder="Street Name" name="streetname">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" placeholder="Baranggay" name="baranggay">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" placeholder="City" name="city">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-4">
                <label class="fw-bold">Birthday:<span style='color:red;'>*</span></label>
                <input type="date" class="form-control" name="bday">
            </div>
            <div class="col-4">
                <label class="fw-bold">Course/Strand:<span style='color:red;'>*</span></label>
                <select class="form-select" aria-label="Default select example" name="course">
                    <option selected>select strand/course </option>
                    <option value="GAS">GAS</option>
                    <option value="ABM">ABM</option>
                    <option value="STEM">STEM</option>
                    <option value="HUMMS">HUMMS</option>
                    <option value="ICT">ICT</option>
                    <option value="BSIT">BSIT</option>
                    <option value="BSOA">BSOA</option>
                    <option value="BSTM">BSTM</option>
                    <option value="BSHM">BSHM</option>
                </select>
            </div>
            <div class="col-4">
                <label class="fw-bold">Year:<span style='color:red;'>*</span></label>
                <select class="form-select" aria-label="Default select example" name="year">
                    <option selected>select year level </option>
                    <option value="1st">1st year</option>
                    <option value="2nd">2nd year</option>
                    <option value="3rd">3rd year</option>
                    <option value="4th">4th year</option>
                    <option value="11">Grade 11</option>
                    <option value="12">Grade 12</option>
                </select></div>
        </div>
        <div class="mt-5 d-flex justify-content-center">
            <input type="submit" class="btn btn-outline-primary" value="Register">
        </div>

    </form>
</div>


</body>
</html>

<?php
    
    

     if($_SERVER["REQUEST_METHOD"] == "POST"){

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

        $sql = "INSERT INTO info (fname, lname, mname, streetnum, streetname, brgy, city, bday, year, course) 
                        VALUES ('$fname', '$lname', '$mname', '$num', '$streetname', '$baranggay',
                        '$city', '$bday', '$year', '$course')";
        try{
            mysqli_query($conn, $sql);
            echo "<div class='bg-success fw-bold p-3'>
                    Register Successfully!
                </div>";
        }
        catch(error){
            echo "error";
        }
     }
?>