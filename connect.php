<?php
$username = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST,'password');

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="id";

$conn=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
{
    die ('Connect Error('.mysqli_connect_errorno().')' .mysqli_connect_error());

}
else
{
    $sql = "SELECT * FROM form WHERE  username='$username' AND password ='$password' LIMIT 1";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "record is found";
    }
    else
    {
        echo "record not found";
    }
}
?>