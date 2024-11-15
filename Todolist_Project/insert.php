<?php

    require_once 'db_connection.php';
    $conn = connection();

    if (isset($_POST['title']) && isset($_POST['desc']) && isset($_POST['start_date']) && isset($_POST['end_date']) && isset($_POST['user_id']))
    {
        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $user_id = $_POST['user_id']; 
        
        
        $sql = "INSERT INTO tasks (title, description, start_date, end_date, user_id)
                VALUES('$title', '$desc', '$start_date', '$end_date', '$user_id')";
                $res = $conn->query($sql);
                if ($res) 
                {
                    echo "Successfully Inserted Data!";
                } 
                else
                {
                    echo "Not insertd data!";
                }
    }
     
?>
   <br><br><a href="index.php">Go to Home Page</a>
