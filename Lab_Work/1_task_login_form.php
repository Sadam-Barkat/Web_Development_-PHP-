<?php 
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST['username'];
    $password = $_POST['password']; // You may want to handle password securely in a real application
    ?>
    <h1><?php echo htmlspecialchars($username); ?></h1>        
    <?php 
} else {
    echo "<h1>Please enter valid credentials</h1>";
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">Enter Username:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <label for="password">Enter Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
