<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$cno = $_POST['cno'];
$email = $_POST['email'];
$password = $_POST['psw'];
$confirm_password = $_POST['confirm_psw'];
if($password!=$confirm_password)
{
echo "Renter password";
}
$connect_db = new mysqli('localhost','root','','designocracy');
if($connect_db->connect_error)
{
die("Connection failed : " . $connect_db->connect_error);
}
$sql = "Insert into signuptable (Firstname, Lastname, Email, Contact, Password) values ( '$fname'
,'$lname','$email','$cno','$password')";
if(mysqli_query($connect_db, $sql))
{
echo "Records inserted";
}
else
{
echo "Records aren't inserted ";
}
mysqli_close($connect_db);
?>
