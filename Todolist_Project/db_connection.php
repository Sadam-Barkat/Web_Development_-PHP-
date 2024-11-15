<?php
// db_connection.php
function connection() {
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "todolist";
    
    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        return $conn;
    }
    
}
?>