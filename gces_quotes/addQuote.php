<?php
$method = $_SERVER['REQUEST_METHOD'];
// echo "Requesting from: $method method.";
if($method == 'POST')
{
    $authorName = $_POST["author"];
    $content = $_POST["content"];
    $raw_query = "insert into course (author, content) values('$authorName', '$content')";

    echo $raw_query;

    include "connection.php";

    $result = mysqli_query($conn, $raw_query);

    if(mysqli_error_list($conn))
    {
        echo "Error in n=inserting data";
    }
    else{
        echo "Data inserted successfully";
    }
}

// echo "\nRecived Author: $authorName, Content: $content";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Quote</title>
</head>
<body>
    <form action="" method = "POST">
        <div>
            <h1>Add New Quote</h1>
            <p>Enter Author's Name:</p>
            <input type="text" name="author" id="" placeholder = "Enter the name of the author..."/>
            <p>Contents:</p>
            <input type="text" name="content" id="" placeholder = "Enter the content of the book..."/>
            <br><br>
            <input type="submit" value="Add Quote"/>
        </div>
    </form>
</body>
</html>