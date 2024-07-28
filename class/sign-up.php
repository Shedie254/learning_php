<?php
// Initialize variables and errors
$username = "";
$password = "";
$errors = array();

// Check if form is submitted using POST method
if ($_SERVER['REQUEST_METHOD'] == "POST") {

  // Sanitize user input
  $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
  $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

  // Basic validation
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  // Replace with logic to check username and password against database
  // (example: using prepared statements for security)
  if (/* username and password match in database */) {
    // Successful login - Set session variable
    $_SESSION['username'] = $username;
    header('location: index.php'); // Redirect to homepage
  } else {
    array_push($errors, "Invalid username or password");
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Level Up Lend - Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Level Up Lend - Login</h1>
    <?php if (count($errors) > 0) { ?>
      <div class="error">
        <?php foreach ($errors as $error) { ?>
          <p><?php echo $error; ?></p>
        <?php } ?>
      </div>
    <?php } ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" required> <br><br>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" required> <br><br>
      <button type="submit">Log In</button>
    </form>
  </div>
</body>
</html>