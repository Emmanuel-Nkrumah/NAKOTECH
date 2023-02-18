<?php
$Name=$_POST['Name'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];

$number = $_POST['number'];

//Database connection

$conn = new mysqli('localhost','root','','form2');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_Error);
}else{
    $stmt = $conn->prepare("insert into registration(Name, email , birthday, gender, number)
    values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisi",$Name, $email, $birthday, $gender, $number);
    $stmt->execute();
    echo "Registration Successlly"
    
    

    $stmt->close();
    $conn->close();
}

?>