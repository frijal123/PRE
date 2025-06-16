

<?php
function connect(){
$user="root";
$host="localhost";
$pass=null;
$db="index";
$conn= new mysqli($host,$user,$pass, $db);

if($conn ->connect_error){
    die("ERROR". $conn ->connect_error);
}
else{
    return $conn;
}
}
?>