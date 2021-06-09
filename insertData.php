<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "xtitan-announcement-project";

$conn =mysqli_connect ($server , $username , $password , $dbname);

if(isset($_POST['submitButton'])){
    $value = $_POST ['type'];

    if ($value == "1"){
        $Title = $_POST ['Title'];
        $Period = $_POST ['Period'];
        $Description = $_POST ['Description'];
        $photo = $_POST['image'];

        $queryInsert = "insert into promotions (title , period , description , photo) values ('$Title', '$Period', '$Description', '$photo');";
        
        if (mysqli_query($conn, $queryInsert)) {
            $last_id = mysqli_insert_id($conn);
            echo "New record created successfully. Last inserted ID is: " . $last_id;
           } else {
            echo "Error: " . $queryInsert . "<br>" . mysqli_error($conn);
           }
}

elseif ($value == "2"){
    $Title = $_POST ['Title'];
    $Period = $_POST ['Period'];
    $Description = $_POST ['Description'];
    $photo = $_POST['image'];
    
    $queryInsert = "insert into discount (title , period , description , photo) values ('$Title', '$Period', '$Description', '$photo');";
    
    if (mysqli_query($conn, $queryInsert)) {
        $last_id = mysqli_insert_id($conn);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
       } else {
        echo "Error: " . $queryInsert . "<br>" . mysqli_error($conn);
       }
    mysqli_close($conn);
}
elseif ($value=="3"){
    $Title = $_POST ['Title'];
    $Period = $_POST ['Period'];
    $Description = $_POST ['Description'];
    $photo = $_POST['image'];
    
    $queryInsert = "insert into events (title , period , description , photo) values ('$Title', '$Period', '$Description', '$photo');";
    
    if (mysqli_query($conn, $queryInsert)) {
        $last_id = mysqli_insert_id($conn);
        echo "New record created successfully. Last inserted ID is: " . $last_id;
       } else {
        echo "Error: " . $queryInsert . "<br>" . mysqli_error($conn);
       }

    mysqli_close($conn);
}
}  
// console.log($run);
// console.log($queryInsertInsert);
?>