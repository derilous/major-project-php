<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "xtitan-announcement-project";

$conn =mysqli_connect ($server , $username , $password , $dbname);

if(isset($_POST['submitDelete'])){
    $value = $_POST ['typeDelete'];

    if ($value == "1"){
        $id = $_POST ['id'];
        $queryDelete = "delete from promotions where id = $id;";
        
        if (mysqli_query($conn, $queryDelete)) {
            echo "passed";
           } else {
            echo "Error: " . $queryDelete . "<br>" . mysqli_error($conn);
           }
}

elseif ($value == "2"){
    $id = $_POST ['id'];
    $queryDelete = "delete from discount where id = $id;";
    
    if (mysqli_query($conn, $queryDelete)) {
           if (mysqli_query($conn, $queryDelete)) {
            echo "New record created successfully. Last inserted ID is: " . $rows;
           } else {
            echo "Error: " . $queryDelete . "<br>" . mysqli_error($conn);
           }} else {
        echo "Error: " . $queryDelete . "<br>" . mysqli_error($conn);
       }
    mysqli_close($conn);
}
elseif ($value=="3"){
    $id = $_POST ['id'];
    $queryDelete = "delete from events where id = $id;";
    
    if (mysqli_query($conn, $queryDelete)) {
        $rows = mysqli_stmt_affected_rows($conn);
        echo "New record created successfully. Last inserted ID is: " . $rows;
       } else {
        echo "Error: " . $queryDelete . "<br>" . mysqli_error($conn);
       }

    mysqli_close($conn);
}
}  
// console.log($run);
// console.log($queryDeleteInsert);
?>