<?php
     require_once 'db_connection.php';
     $conn = connection();

     if(isset($_GET['task_id']))
     {
        $task_id = $_GET['task_id'];

        $sql = "SELECT * FROM tasks WHERE task_id = $task_id";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc())
        {
            $title = $row['title'];
            $desc = $row['description'];
            $start_date = $row['start_date'];
            $end_date = $row['end_date'];
            $user_id = $row['user_id'];
        }
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
    <form>
        <table border="1">
            <tr>
                <td>Task_id</td>
                <td><input type="" id="task_id" name="task_id" value="<?php echo htmlspecialchars($task_id); ?>"></input></td>
            </tr>
            
            <tr>
                <td>Title</td>
                <td><input type="" id="title" name="title" value="<?php echo htmlspecialchars($title); ?>"></input></td>
            </tr>

            <tr>
                <td>Desc</td>
                <td><input type="" id="desc" name="desc" value="<?php echo htmlspecialchars($desc); ?>"></input></td>
            </tr>

            <tr>
                <td>Start_date</td>
                <td><input type="" id="start_date" name="start_date" value="<?php echo htmlspecialchars($start_date); ?>"></input></td>
            </tr>
            
            <tr>
                <td>End_date</td>
                <td><input type="" id="end_date" name="end_date" value="<?php echo htmlspecialchars($end_date); ?>"></input></td>
            </tr>
        </table>
    </form> 
    <br>
    <a href="index.php">Go to home page</a>
</body>
</html>