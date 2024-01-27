<?php



$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$c_password = $_POST['c_password']; 

$conn = new mysqli('localhost','root','','clothing');


if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
     
    $stmt=$conn->prepare("insert into signup(name,email,password,c_password) values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$email,$password,$c_password);
    $stmt->execute();
    $stmt->close();
    $conn->close();

}


header("Location: toshop.html");
 

?>