<?php
session_start();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Get the username and password from the form
	$username = $_POST["username"];
	$password = $_POST["password"];

	// Connect to the database
	$conn = mysqli_connect("localhost", "root", "", "users");

	// Check if the username and password are correct
	$query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $query);
	if (mysqli_num_rows($result) > 0) {
		// Retrieve the user ID from the database
		$row = mysqli_fetch_assoc($result);
		$user_id = $row['Id'];

		// Set the user ID in the session
		$_SESSION['Id'] = $user_id;
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;

		// Close the database connection
		mysqli_close($conn);

		// Redirect the user to the homepage
		header('Location: /smart-learning/sl/homepage.php');
		exit();
	} else {
		// Show an alert message
		echo "<script>
				alert('Username or password are incorrect');
				window.location.href='login-singup.php';
			  </script>";
	}
}
?>
