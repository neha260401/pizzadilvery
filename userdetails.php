<!DOCTYPE html>
<html>
<head>
    <style>
         .container{
            height:500px;
            width: 500px;
            border: 2px solid orange;
            border-radius: 10px;
        }
        h2{
            font-family: 'calibri light';
        }
        .abc{
            margin: 60px;
            font-weight: normal;
        }
        h1{
            font-family: 'calibri light';
        }
        .fa-thumbs-up{
            color:orange;
        }
    </style>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<body>
    <div class="cont" align="center">
        <div class="container" align="center">
            
            <br><br>
            <h1>Account Created !</h1>
            <i class="fa-solid fa-thumbs-up fa-7x"></i><br><br>
            <h2 class="abc">Welcome to Tiffin Management System<br>we provide tiffin quickly !</h2><br><br>
             <h3><a href="home.html#section6">Book Tiffin</h3></a>
        </div>
		

    </div>
</body>
</html>

<?php
$servername="localhost";
$username="root";
$password="";
$database_name="database123"; 

$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save']))
{
    $username = $_POST['user'];
	$number = $_POST['number'];
	$email = $_POST['email'];
	$password =$_POST['pass'];

    $sql_query = "INSERT INTO userdata(user,numbers,email,password)VALUES('$username','$number','$email','$password')";

    if (mysqli_query($conn,$sql_query))
	{
		
	}
	else
	{
		echo "Error:" .$sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>