    <?php
          if(isset($_POST['name']) && isset($_POST['rollno']) && isset($_POST['course']))
          {
            $name=$_POST['name'];
            $rollno=$_POST['rollno'];
            $course=$_POST['course'];
    ?>
        <h1><?php echo $name?></h1>  
        <h1><?php echo $rollno?></h1>  
        <h1><?php echo $course?></h1>       
        <?php }

        else
        {
            echo '<h1>Invalid</h1>';
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
    <label for="name">Enter Name</label>
    <br>
    <input type="text" id="name" name="name"></input>
    <br>
    <label for="rollno">Roll No</lable>
    <br>
    <input type="number" id="rollno" name="rollno"></input>
    <br>
    <label for="course">Course</label>
    <br>
    <input type="text" id="course" name="course">
    <br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>