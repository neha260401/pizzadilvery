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
	$username = $_POST['name'];
	$mobile_no = $_POST['mobileNo'];
	$email = $_POST['Email'];
	$address = $_POST['address'];
	$message = $_POST['message'];
	$time = $_POST['user_time'];
	$date = $_POST['date'];
	  

	$sql_query = "INSERT INTO entry_details(username,mobile_no,email,addresss,messagee,timee,datee)
	VALUES ('$username','$mobile_no','$email','$address','$message','$time','$date')";

	if (mysqli_query($conn,$sql_query))
	{
		echo " New Details Entry inserted successfully !";
	}
	else
	{
		echo "Error:" .$sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
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
</head>
<body>
<div class="cont" align="center">
        <div class="container" align="center">
            
            <br><br>
            <h1>Pizza Ordered Successful!</h1>
            <i class="fa-solid fa-thumbs-up fa-7x"></i><br><br>
            <h2 class="abc">As per your booking detail <br>we provide Pizza quickly !</h2><br><br>
			<h6><a href="home.html">Back to home</a></h6>
             

        </div>

    </div>
</body>
</html>