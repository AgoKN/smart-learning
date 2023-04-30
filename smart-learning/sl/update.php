<?php
session_start();

if(!isset($_SESSION['Id'])) {
  // redirect to login page or display an error message
  exit("You must be logged in to access this page");
}

$user_id = $_SESSION['Id'];

// Connect to the database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "users";
$conn = mysqli_connect($host, $user, $password, $dbname);

// Get the new username and password from the form
$new_username = $_POST['new_username'];
$new_password = $_POST['new_password'];

// Update the user's username and password in the database
$sql = "UPDATE login SET username='$new_username', password='$new_password' WHERE Id=$user_id";
$result = mysqli_query($conn, $sql);

if ($result) {
  // If the update was successful, update the session variable 'username'
  $_SESSION['username'] = $new_username;

  // If the update was successful, redirect the user back to their profile page
  echo "<script>
	alert('Credentials updated successfully');
    window.location.href='profile.php'
    </script>";
} else {
  // If the update failed, display an error message
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
