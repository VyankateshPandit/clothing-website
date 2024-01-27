<?php 

$email = $_POST['email'];
$password = $_POST['password'];

$conn=new mysqli('localhost','root','','clothing');


    


if($conn->connect_error){
             die('connection failed : '.$conn->connect_error);
}
else{
          $stmt=$conn->prepare("insert into login(email,password) values(?,?)");
          $stmt->bind_param("ss",$email,$password);
          $stmt->execute();
          $stmt->close();
          $conn->close();

          



 
header("Location: toshop.html");
 

}





















// if(!empty($email)){

// if{
//            $host="localhost";
//            $dbemail="root";
//            $dbPassword="";
//            $dbname="clothing"
//            $conn= new mysqli ($host,$dbemail,$dbPassword,$dbname);
//            if(mysqli_connect_error()){
//                     die('connect error(.mysqli_connect_error().')
//            }
// }else{
//     echo"Enter Password";
// }
// }else{
//               echo"Enter Email id";
// }



?>