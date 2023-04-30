<?php
session_start();
?>

<html lang="en">
<head>
    <link rel="stylesheet" href="../styles/login-singup-style.css">
    <title>Log in | Sing up</title>
</head>

<body>
    <iframe src="navbar.php" frameborder="0" width="100%"></iframe>
    <h1>LOG IN - SING UP</h1>
    <h3>to learn more with us..</h3>
    <div style="margin-top: -150px;">
        <div class="container">
        <h2>Sign up</h2>
	<form action="singup_handler.php" method="POST">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" placeholder="Enter Username" required><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" placeholder="Enter Password" required><br><br>
		<input type="submit" value="Signup" 
        style="background-color: rgb(171, 28, 77);
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 114%;">
	</form>
        </div>

        <div class="container2">
            <h2>Log in</h2>
            <form action="login_handler.php" method="POST">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username" placeholder="Enter Username" required><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" placeholder="Enter Password" required><br><br>
		<input type="submit" value="Login" 
        style="background-color: rgb(171, 28, 77);
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 114%;">
	</form>
        </div>
    </div>



</body>

</html>