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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .navbar {
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .navbar-brand {
            font-weight: bold;
            color: #007bff;
            transition: color 0.3s;
        }

        .navbar-brand:hover {
            color: #0056b3;
        }

        .dropdown-menu {
            border: none;
            border-radius: 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .dropdown-item {
            color: #333;
            transition: background-color 0.3s;
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
        }

        .container-lg,
        .container {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .form-control {
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #007bff;
        }

        .table {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
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
        <h2>STEM - Grade 11</h2>
    </div>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Address</th>
                <th scope="col">Birthday</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM info";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['course'] === "STEM" && $row['year'] === "11"){
                            $fullName = $row['lname'] . ", " . $row['fname'] . " " . $row['mname'];
                            $address = $row['streetnum'] . " " . $row['streetname'] . " " . $row['brgy'] . " " . $row['city'];
                            echo "<tr>";
                            echo "<td>".$fullName."</td>";
                            echo "<td>".$address."</td>";
                            echo "<td>".$row['bday']."</td>";
                            echo "</tr>";
                        } 
                    }
                }
            ?>
        </tbody>
    </table>
</div>

<div class="container-lg">
    <div class="text-center mt-5">
        <h2>STEM - Grade 12</h2>
    </div>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Address</th>
                <th scope="col">Birthday</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM info";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if($row['course'] === "STEM" && $row['year'] === "12"){
                            $fullName = $row['lname'] . ", " . $row['fname'] . " " . $row['mname'];
                            $address = $row['streetnum'] . " " . $row['streetname'] . " " . $row['brgy'] . " " . $row['city'];
                            echo "<tr>";
                            echo "<td>".$fullName."</td>";
                            echo "<td>".$address."</td>";
                            echo "<td>".$row['bday']."</td>";
                            echo "</tr>";
                        } 
                    }
                }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
