<?php
include('database.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Delete student's information from the database based on the ID
    $sql = "DELETE FROM info WHERE id=$id";
    if(mysqli_query($conn, $sql)) {
        // Redirect back to the page where students are listed
        header('Location: index.php');
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
