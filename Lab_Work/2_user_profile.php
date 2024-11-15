<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Name</label>
        <br>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email</label>
        <br>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="age">Age</label>
        <br>
        <input type="number" id="age" name="age" required>
        <br>
        <button type="submit">Submit</button>
    </form>

    <?php

    if (isset($_POST['name'],$_POST['age'],$_POST['email']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        echo "<h1><?php echo $name ?></h1>";
    echo "<h1><?php echo $email ?></h1>";
    echo "<h1><?php echo $age ?></h1>";
    $name = '';
    $email = '';
    $age = '';
    } 
    else
    {
        echo "<h1>Please fill in all fields.</h1>";
    }
    
?>


</body>
</html>