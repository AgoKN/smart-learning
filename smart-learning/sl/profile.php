<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('Location: login-singup.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" href="../styles/profile-style.css">
</head>
<body>
	<div class="container">
    <button onclick="location.href='homepage.php'" style="background-color: rgb(171, 28, 77); color: white; padding: 10px; border-radius: 5px; border: none; cursor: pointer;">Back to Homepage</button>

		<h1>Welcome <?php echo $_SESSION['username']; ?></h1>
		
		<p>My benefits from being logged in: </p>
		<ul>
			<li><i>Unlocked JAVA - Premium Learning </i> <a href="../pages/java.php#javapremium"> [click here]</a></li>
			</br>
			<li>Progress tracking: You can track your progress as you complete courses (coming soon)</li>
			</br>
			<li>Access to coding challenges, hackathons, and job boards (coming soon)</li>
		</ul>
		<br/>
		<hr>
		<p>Edit your details here:</p>
		<form method="post" action="update.php">
			<label for="new_username">New Username:</label>
			<input type="text" id="new_username" name="new_username">
			<br><br>
			<label for="new_password">New Password:</label>
			<input type="password" id="new_password" name="new_password">
			<br><br>
			<input type="submit" value="Update">
		</form>

		<a href="logout.php" class="btn">Log out</a>
	</div>
</body>
</html>
