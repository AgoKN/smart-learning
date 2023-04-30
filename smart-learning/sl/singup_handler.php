<?php

// Set database connection details
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'users';

// Connect to the database
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check for connection errors
if (mysqli_connect_errno()) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username already exists in the database
    $check_query = "SELECT * FROM login WHERE username = '$username'";
    $result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($result) > 0) {
        // Username already exists, show an error message
		echo "<script>
			alert('Username already exists, please choose a different username');
			window.location.href='login-singup.php';
			</script>";
    } else {
        // Username is available, insert new user into the database
        $insert_query = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
        $insert_result = mysqli_query($conn, $insert_query);

        if ($insert_result) {
            // Registration successful, redirect to the login page
            echo "<script>
			alert('Account registred successfully. Please Log in.');
			window.location.href='login-singup.php';
			</script>";
            exit;
        } else {
            // Registration failed, show an error message
            echo 'Registration failed, please try again later';
        }
    }
}
?>
