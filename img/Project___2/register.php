<?php
$email = $_POST['eu'];
$password = $_POST['psw'];
$connection = mysqli_connect('localhost','root','','designocracy');
$query = "select* from signuptable where Email = '$email' && Password = '$password'";
$ck = mysqli_query($connection,$query);
$res = mysqli_num_rows($ck);
if($res == 1)
{
header("location:designocracy1.html");
}
else{
echo "You need to signup";
}
?>