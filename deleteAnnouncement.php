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
        
        if ($conn->query($id)==TRUE && $con->affected_rows > 0) {
            echo " record deleted";
        } else {
            echo "Error: " . $id . "<br>" . $conn->error;
        }
}

elseif ($value == "2"){
    $id = $_POST ['id'];
        $queryDelete = "delete from discount where id = $id;";
        
        if ($conn->query($id)==TRUE && $conn->affected_rows > 0) {
            echo " record deleted";
        } else {
            echo "Error: " . $id . "<br>" . $conn->error;
        }
        }
elseif ($value=="3"){
    $id = $_POST ['id'];
        $queryDelete = "delete from events where id = $id;";
        
        if ($conn->query($id)==TRUE && $conn->affected_rows > 0) {
            echo " record deleted";
        } else {
            echo "Error: " . $id . "<br>" . $conn->error;
        }
}
}  
// console.log($run);
// console.log($queryDeleteInsert);
?>