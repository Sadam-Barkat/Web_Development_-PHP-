<h1 style="text-align:center">Todolist</h1>
<a href="create.php"><big>Create</big></a>
<br><br>
<?php

require_once 'db_connection.php';

$conn = connection();

$sql = "SELECT task_id, title, description, start_date, end_date, user_id FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0)
 {
    // Start HTML table
    echo "<table border='1'>
            <tr>
                <th>Task ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>User ID</th>
                <th>Update</th>
                <th>Delete</th>
                <th>View</th>
            </tr>";
    
    // Output data of each row
    while ($row = $result->fetch_assoc())
    {
        echo "<tr>
                <td><a href='view.php?task_id={$row["task_id"]}'>{$row["task_id"]}</a></td>
                <td>" . $row["title"] . "</td>
                <td>" . $row["description"] . "</td>
                <td>" . $row["start_date"] . "</td>
                <td>" . $row["end_date"] . "</td>
                <td>" . $row["user_id"] . "</td>
                <td>
                   <a href='update.php?task_id={$row["task_id"]}'>Update</a>
                </td>
                <td>
                   <a href='delete.php?task_id={$row["task_id"]}'>Delete</a>
                </td>
                <td>
                   <a href='view.php?task_id={$row["task_id"]}'>View</a>
                </td>

              </tr>
              ";
    }
    echo "</table>";                
} 
else 
{
    echo "0 results";
}

$conn->close();

?>