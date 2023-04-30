<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "users");

// Check if user is logged in as admin1
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin1' || $_SESSION['password'] !== 'admin1') {
    // Redirect to home page or display error message
    header('Location: homepage.php');
    exit();
}

// Check if delete button is clicked
if (isset($_POST['delete'])) {
    $user_id = $_POST['user_id'];
    $query = "DELETE FROM login WHERE id=$user_id";
    mysqli_query($conn, $query);
}

// Check if edit button is clicked
if (isset($_POST['edit'])) {
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "UPDATE login SET username='$username', password='$password' WHERE id=$user_id";
    mysqli_query($conn, $query);
}

// Get all users except for admin
$query = "SELECT * FROM login WHERE username != 'admin1'";
$result = mysqli_query($conn, $query);

// Check if add content form is submitted
if (isset($_POST['add_content'])) {
    $page = mysqli_real_escape_string($conn, $_POST['page']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $paragraph = mysqli_real_escape_string($conn, $_POST['paragraph']);
    $query = "INSERT INTO content (page, title, paragraph) VALUES ('$page', '$title', '$paragraph')";
    mysqli_query($conn, $query);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>    
    <link rel="stylesheet" href="../styles/admin-style.css">
</head>
<body>
    <h1>Admin Panel</h1>
    <a href="homepage.php">Back to Homepage</a> </br></br>
    <h3>Manage Users:</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['Id']; ?></td>
            <td>
                <form method="post">
                    <input type="hidden" name="user_id" value="<?php echo $row['Id']; ?>">
                    </br>
                    <input type="text" name="username" value="<?php echo $row['username']; ?>">
            </td>
            <td>
                    </br>
                    <input type="text" name="password" value="<?php echo $row['password']; ?>">
            </td>
            <td>
                    <input type="submit" name="edit" value="Save">
                    <input type="submit" name="delete" value="Delete">
                </form>
            </td>
        </tr>
        <?php } ?>
    </table>
        </br></br></br>
    <h3>Add New Content:</h3>
    <form method="post">
    <label for="page">Select Page:</label>
		<select id="page" name="page">
			<option value="python">Python</option>
			<option value="web_dev">Web Dev</option>
		</select>
		<br><br>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" placeholder="new title"><br><br>
        <label for="paragraph">Content:</label>
        <textarea id="paragraph" name="paragraph" placeholder="new content" rows="8"></textarea><br><br>
        <input type="submit" name="add_content" value="Add Content">
    </form>
    </br></br>
</body>

</html>

<?php mysqli_close($conn); ?>
