<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Add User</h2>
    <a href="view_users.php" class="link">View Users</a>
    <form action="add_user.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" class="input" name="name" required><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">' . htmlspecialchars($_GET['error']) . '</p>';
        }
        ?>
        <input type="submit" value="Add User">
    </form>
</body>
</html>
