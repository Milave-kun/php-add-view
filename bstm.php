<?php
    include('database.php');

    // Check if delete_id parameter is set in the URL
    if(isset($_GET['delete_id'])) {
        $id = $_GET['delete_id'];
        
        // SQL query to delete the record with the specified id
        $delete_query = "DELETE FROM info WHERE id = '$id'";
        
        // Execute the delete query
        if(mysqli_query($conn, $delete_query)) {
            // Redirect back to the same page after deletion
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit;
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }

// Check if update form is submitted
if(isset($_POST['update_id'])) {
    $update_id = $_POST['update_id'];
    $updated_fname = $_POST['updated_fname'];
    $updated_lname = $_POST['updated_lname'];
    $updated_mname = $_POST['updated_mname'];
    $updated_streetnum = $_POST['updated_streetnum']; // Add the address fields
    $updated_streetname = $_POST['updated_streetname'];
    $updated_brgy = $_POST['updated_brgy'];
    $updated_city = $_POST['updated_city'];
    $updated_bday = $_POST['updated_bday']; // Add the birthday field
    
    // Update the record in the database
    $update_query = "UPDATE info SET fname = '$updated_fname', lname = '$updated_lname', mname = '$updated_mname', 
                     streetnum = '$updated_streetnum', streetname = '$updated_streetname', brgy = '$updated_brgy', 
                     city = '$updated_city', bday = '$updated_bday' WHERE id = '$update_id'";
                     
    if(mysqli_query($conn, $update_query)) {
        // Redirect back to the same page after update
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSTM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
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
        
        /* Style for the delete button */
        .btn-delete {
            color: #fff;
            background-color: #dc3545; /* Red color */
            border-color: #dc3545; /* Red color */
        }

        /* Hover style for the delete button */
        .btn-delete:hover {
            background-color: #c82333; /* Darker red color on hover */
            border-color: #bd2130; /* Darker red color on hover */
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
        <h2>BSTM - 1st Year</h2>
    </div>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Address</th>
                <th scope="col">Birthday</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM info WHERE course = 'BSTM' AND year = '1st'";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        $fullName = $row['lname'] . ", " . $row['fname'] . " " . $row['mname'];
                        $address = $row['streetnum'] . " " . $row['streetname'] . " " . $row['brgy'] . " " . $row['city'];
                        echo "<tr>";
                        echo "<td>".$fullName."</td>";
                        echo "<td>".$address."</td>";
                        echo "<td>".$row['bday']."</td>";
                        echo "<td>
                                <a href='?delete_id=".$row['id']."' class='btn btn-delete' onclick='return confirm(\"Are you sure you want to delete this information?\")'>Delete</a>
                                <button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#updateModal".$row['id']."'>Update</button>
                              </td>";
                        echo "</tr>";

// Modal for updating records
echo '<div class="modal fade" id="updateModal'.$row['id'].'" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="'.$_SERVER['PHP_SELF'].'" id="updateForm'.$row['id'].'">
                <div class="modal-body">
                    <input type="hidden" name="update_id" value="'.$row['id'].'">
                    <div class="mb-3">
                        <label for="updated_fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="updated_fname" name="updated_fname" value="'.$row['fname'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="updated_lname" name="updated_lname" value="'.$row['lname'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_mname" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="updated_mname" name="updated_mname" value="'.$row['mname'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_streetnum" class="form-label">Street Number</label>
                        <input type="text" class="form-control" id="updated_streetnum" name="updated_streetnum" value="'.$row['streetnum'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_streetname" class="form-label">Street Name</label>
                        <input type="text" class="form-control" id="updated_streetname" name="updated_streetname" value="'.$row['streetname'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_brgy" class="form-label">Barangay</label>
                        <input type="text" class="form-control" id="updated_brgy" name="updated_brgy" value="'.$row['brgy'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_city" class="form-label">City</label>
                        <input type="text" class="form-control" id="updated_city" name="updated_city" value="'.$row['city'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_bday" class="form-label">Birthday</label>
                        <input type="text" class="form-control" id="updated_bday" name="updated_bday" value="'.$row['bday'].'">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="updateButton'.$row['id'].'" onclick="confirmUpdate('.$row['id'].')">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>';

                    }
                }
            ?>
        </tbody>
    </table>
</div>

<div class="container-lg">
    <div class="text-center">
        <h2>BSTM - 2nd Year</h2>
    </div>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Address</th>
                <th scope="col">Birthday</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM info WHERE course = 'BSTM' AND year = '2nd'";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        $fullName = $row['lname'] . ", " . $row['fname'] . " " . $row['mname'];
                        $address = $row['streetnum'] . " " . $row['streetname'] . " " . $row['brgy'] . " " . $row['city'];
                        echo "<tr>";
                        echo "<td>".$fullName."</td>";
                        echo "<td>".$address."</td>";
                        echo "<td>".$row['bday']."</td>";
                        echo "<td>
                                <a href='?delete_id=".$row['id']."' class='btn btn-delete' onclick='return confirm(\"Are you sure you want to delete this information?\")'>Delete</a>
                                <button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#updateModal".$row['id']."'>Update</button>
                              </td>";
                        echo "</tr>";

// Modal for updating records
echo '<div class="modal fade" id="updateModal'.$row['id'].'" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="'.$_SERVER['PHP_SELF'].'" id="updateForm'.$row['id'].'">
                <div class="modal-body">
                    <input type="hidden" name="update_id" value="'.$row['id'].'">
                    <div class="mb-3">
                        <label for="updated_fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="updated_fname" name="updated_fname" value="'.$row['fname'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="updated_lname" name="updated_lname" value="'.$row['lname'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_mname" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="updated_mname" name="updated_mname" value="'.$row['mname'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_streetnum" class="form-label">Street Number</label>
                        <input type="text" class="form-control" id="updated_streetnum" name="updated_streetnum" value="'.$row['streetnum'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_streetname" class="form-label">Street Name</label>
                        <input type="text" class="form-control" id="updated_streetname" name="updated_streetname" value="'.$row['streetname'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_brgy" class="form-label">Barangay</label>
                        <input type="text" class="form-control" id="updated_brgy" name="updated_brgy" value="'.$row['brgy'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_city" class="form-label">City</label>
                        <input type="text" class="form-control" id="updated_city" name="updated_city" value="'.$row['city'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_bday" class="form-label">Birthday</label>
                        <input type="text" class="form-control" id="updated_bday" name="updated_bday" value="'.$row['bday'].'">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="updateButton'.$row['id'].'" onclick="confirmUpdate('.$row['id'].')">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>';

                    }
                }
            ?>
        </tbody>
    </table>
</div>

<div class="container-lg">
    <div class="text-center">
        <h2>BSTM - 3rd Year</h2>
    </div>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Address</th>
                <th scope="col">Birthday</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM info WHERE course = 'BSTM' AND year = '3rd'";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        $fullName = $row['lname'] . ", " . $row['fname'] . " " . $row['mname'];
                        $address = $row['streetnum'] . " " . $row['streetname'] . " " . $row['brgy'] . " " . $row['city'];
                        echo "<tr>";
                        echo "<td>".$fullName."</td>";
                        echo "<td>".$address."</td>";
                        echo "<td>".$row['bday']."</td>";
                        echo "<td>
                                <a href='?delete_id=".$row['id']."' class='btn btn-delete' onclick='return confirm(\"Are you sure you want to delete this information?\")'>Delete</a>
                                <button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#updateModal".$row['id']."'>Update</button>
                              </td>";
                        echo "</tr>";

// Modal for updating records
echo '<div class="modal fade" id="updateModal'.$row['id'].'" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="'.$_SERVER['PHP_SELF'].'" id="updateForm'.$row['id'].'">
                <div class="modal-body">
                    <input type="hidden" name="update_id" value="'.$row['id'].'">
                    <div class="mb-3">
                        <label for="updated_fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="updated_fname" name="updated_fname" value="'.$row['fname'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="updated_lname" name="updated_lname" value="'.$row['lname'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_mname" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="updated_mname" name="updated_mname" value="'.$row['mname'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_streetnum" class="form-label">Street Number</label>
                        <input type="text" class="form-control" id="updated_streetnum" name="updated_streetnum" value="'.$row['streetnum'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_streetname" class="form-label">Street Name</label>
                        <input type="text" class="form-control" id="updated_streetname" name="updated_streetname" value="'.$row['streetname'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_brgy" class="form-label">Barangay</label>
                        <input type="text" class="form-control" id="updated_brgy" name="updated_brgy" value="'.$row['brgy'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_city" class="form-label">City</label>
                        <input type="text" class="form-control" id="updated_city" name="updated_city" value="'.$row['city'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_bday" class="form-label">Birthday</label>
                        <input type="text" class="form-control" id="updated_bday" name="updated_bday" value="'.$row['bday'].'">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="updateButton'.$row['id'].'" onclick="confirmUpdate('.$row['id'].')">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>';

                    }
                }
            ?>
        </tbody>
    </table>
</div>

<div class="container-lg">
    <div class="text-center">
        <h2>BSTM - 4th Year</h2>
    </div>

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Address</th>
                <th scope="col">Birthday</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM info WHERE course = 'BSTM' AND year = '4th'";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        $fullName = $row['lname'] . ", " . $row['fname'] . " " . $row['mname'];
                        $address = $row['streetnum'] . " " . $row['streetname'] . " " . $row['brgy'] . " " . $row['city'];
                        echo "<tr>";
                        echo "<td>".$fullName."</td>";
                        echo "<td>".$address."</td>";
                        echo "<td>".$row['bday']."</td>";
                        echo "<td>
                                <a href='?delete_id=".$row['id']."' class='btn btn-delete' onclick='return confirm(\"Are you sure you want to delete this information?\")'>Delete</a>
                                <button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#updateModal".$row['id']."'>Update</button>
                              </td>";
                        echo "</tr>";

// Modal for updating records
echo '<div class="modal fade" id="updateModal'.$row['id'].'" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="'.$_SERVER['PHP_SELF'].'" id="updateForm'.$row['id'].'">
                <div class="modal-body">
                    <input type="hidden" name="update_id" value="'.$row['id'].'">
                    <div class="mb-3">
                        <label for="updated_fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="updated_fname" name="updated_fname" value="'.$row['fname'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="updated_lname" name="updated_lname" value="'.$row['lname'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_mname" class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="updated_mname" name="updated_mname" value="'.$row['mname'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_streetnum" class="form-label">Street Number</label>
                        <input type="text" class="form-control" id="updated_streetnum" name="updated_streetnum" value="'.$row['streetnum'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_streetname" class="form-label">Street Name</label>
                        <input type="text" class="form-control" id="updated_streetname" name="updated_streetname" value="'.$row['streetname'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_brgy" class="form-label">Barangay</label>
                        <input type="text" class="form-control" id="updated_brgy" name="updated_brgy" value="'.$row['brgy'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_city" class="form-label">City</label>
                        <input type="text" class="form-control" id="updated_city" name="updated_city" value="'.$row['city'].'">
                    </div>
                    <div class="mb-3">
                        <label for="updated_bday" class="form-label">Birthday</label>
                        <input type="text" class="form-control" id="updated_bday" name="updated_bday" value="'.$row['bday'].'">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="updateButton'.$row['id'].'" onclick="confirmUpdate('.$row['id'].')">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>';

                    }
                }
            ?>
        </tbody>
    </table>
</div>

<!-- Your JavaScript and Bootstrap CDN links -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-cjSHp6CGxeH6ukzrghAgpDqzFXYVZYzRfrvgPzTc0a6jk3xCSO2THm6q0cJUKdkY" crossorigin="anonymous"></script>

<script>
    function confirmUpdate(id) {
        if (confirm("Are you sure you want to update this information?")) {
            document.getElementById('updateForm'+id).submit();
        }
    }
    $(document).ready(function(){
        $("#updated_bday").datepicker({
            dateFormat: 'yy-mm-dd', // Specify the date format
            changeMonth: true,      // Allow changing month
            changeYear: true        // Allow changing year
        });
    });

</script>

</body>
</html>
