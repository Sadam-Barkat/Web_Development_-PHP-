<?php

     require_once 'db_connection.php';
     $conn = connection();

     if(isset($_GET['task_id']))
     {
        $taskid = $_GET['task_id'];

        $sql = "DELETE FROM tasks WHERE task_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i",$taskid);

        if($stmt->execute())
        {
            echo "Successfuly Deleted!";
        }
        else
        {
            echo "Not deleted";
        }

     }
     $conn->close();
     $stmt->close();
?>
    <br><br>
    <a href="index.php">Go Back To Previous Page</a>