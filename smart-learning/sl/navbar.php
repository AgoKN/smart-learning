<?php
session_start();
?>

<html>

<head>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .nav ul {
            list-style: none;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .nav li {
            display: inline-block;
            font-family: Tahoma;
            margin-top: 5px;
            font-size: 1.5em;
            line-height: 40px;
        }

        .nav a {
            text-decoration: none;
            color: rgb(240, 53, 89);
            display: block;
            padding: 17px;
        }

        .nav a:hover {
            background-color: rgb(251, 208, 28);
            border-radius: 10px;
        }

        .btn {
            float: right;
            margin: -50 10px;
        }

        img {
            position: fixed;
            width: 170px;
            height: 35px;
            margin: 0 10px;
            margin-top: 22px;
        }

        .btn {
            margin-top: -42px;
        }

        .welcome {
            background-color: rgb(171, 28, 77);
            border: none;
            color: rgb(251, 208, 28);
            padding: 10px;
            border-radius: 12px;
            text-decoration: none;
        }

        .admin-panel {
            background-color: rgb(251, 208, 28);
            border: none;
            color: rgb(171, 28, 77);
            padding: 10px;
            border-radius: 12px;
            text-decoration: none;
            margin-right: 7px;
        }

        button {
            margin-top: -18px;
            background-color: rgb(251, 208, 28);
            border: none;
            color: rgb(171, 28, 77);
            padding: 15px;
            border-radius: 12px;
        }

        button:hover {
            color: rgb(240, 53, 89);
            cursor: pointer;

        }
    </style>
</head>

<body>
    <a href="homepage.php" target="_top"><img src="../pics/logo1.png" /></a>
    <div class="nav">
        <ul>
            <li><a href="homepage.php" target="_top">Home</a></li>
            <li><a href="/smart-learning/pages/python.php" target="_top">Python</a></li>
            <li><a href="/smart-learning/pages/java.php" target="_top">Java</a></li>
            <li><a href="/smart-learning/pages/webdev.php" target="_top">Web Development</a></li>
        </ul>
    </div>
    <div class="btn">              
    <?php 
   if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin1' && isset($_SESSION['password']) && $_SESSION['password'] === 'admin1') {
        echo '<a href="admin.php" target="_top" class="admin-panel" > ADMIN PANEL </a>';
        echo '<a href="logout.php" target="_top" class="welcome" >Log out</a>';
    } else if(isset($_SESSION['username']) && ($_SESSION['username'] !== 'admin1' || !isset($_SESSION['password']) || $_SESSION['password'] !== 'admin1')) {
        echo '<a href="profile.php" target="_top" class="welcome" >My Profile</a>';
    } else {
       echo '<a href="login-singup.php" target="_top"><button>Log in | Sing up</button></a>';
    }
    ?>


</div>

</body>

</html>
