<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

echo "Welcome, " . $_SESSION['username'] . "!";
?>
<div>
    <h1>
        <?php echo $_SESSION['username'];?>
    </h1>
</div>
<a href="logout.php">Logout</a>
