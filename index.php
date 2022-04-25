<?php 
//connect to the database
$db = mysqli_connect('localhost','root', '', 'todo');
    if(isset($_Post['submit'])){
        $task = $_POST['task'];
        if(empty($task)){
            $errors = "You must fill in the task";
        }else{
        mysqli_query($db, "INSERT INTO tasks (task) VALUES ('$task')");
        header('location: index.php');
        }
        
    }

    $tasks = mysqli_query($db, "SELECT * FROM tasks");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List with PHP</title>
</head>
<body>
    
</body>
</html>