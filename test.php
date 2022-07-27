<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="test.php" method="post">
        <input type="text" name="name" id="">
        <input type="date" name="date" id="">
        <input type="submit" value="Done" name="submit">
    </form>
</body>
</html>
<?php
require('connection.php');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $date = $_POST['date'];
    
        $sql = "INSERT INTO test (name, date) VALUES ('$name','$date')";
        $query = $conn->query($sql);
        if($query == TRUE) {
            echo 'DOne';
            header('Location: index.php');
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
    }
?>