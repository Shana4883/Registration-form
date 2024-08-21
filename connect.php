<?php
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$Email=$_POST['Email'];
$pw=$_POST['pw'];
$cpw=$_POST['cpw'];
$dateOfBirth=$_POST['dateOfBirth'];
$gender=$_POST['gender'];

$conn=new mysqli('localhost','root','','Registration');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}
else
{
    $stmt=$conn->prepare("INSERT INTO registration(firstName,lastName,Email,pw,cpw,dateOfBirth,gender)values(?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss",$firstName,$lastName,$Email,$pw,$cpw,$dateOfBirth,$gender);
    $stmt->execute();
    echo "registration Successfully....";
    $stmt->close();
    $conn->close();
}
?>