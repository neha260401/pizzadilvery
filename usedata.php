<?php
?>
<html>
    <head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        .container1{
                height: 50px;
                width:1350px;
                margin-top: 30px;
                background-color:orange;
                border-radius: 5px;
                
            }
		.container{
			background-color: white;
			height:800px;
		}
		table,th,td{
			align:center;
			border:1px solid black;
			border-collapse:collapse;

		}
		.rows{
			font-weight:bold;
		}
		.btn3{
                font-family:'Times new roman' ;
                height:60px;
                width: 70px;
                font-size:20px;
                cursor: pointer;
                background-color:orange;
                color:white;
                border-radius: 5px;
                border: none;
                padding: 10px;
                font-weight: bold;
             }
		h3{
			font-family:'calibri light';
			text-align:center;
		}
		h2{
			font-family:'calibri light';
		}
		.fa-sharp{
			cursor: pointer;
			color:black;
		}
		.fa-sharp:hover{

			color:orange;	
		}
		.navbar li{
                float:left;
                list-style:none;
                margin: 13px 20px;
                font-family:'calibri light';
                font-weight: medium;
                font-size: 20px;
                color:black;
                text-decoration: none;
             }
             .navbar a{
                text-decoration: none;
                color:black;
             }
             .navbar a:hover{
                background-color: white;
                height: 15px;
                width: 15px;
             }
             .del{
                background-color:red;
                height:30px;
                width:70px;
                border-radius:10px;

             }
			 .fa-solid{
				color:black;
				cursor: pointer;
			 }
			 .fa-solid :hover{
				color:orange;
			 }
		
		
    </style>
    </head>
    <body>
    <center><button  class="btn3">TM</button></center>
			 <h3>TIffin Management System</h3>
			 <a href="home.html"><i class="fa-solid fa-house fa-2x"></i></a>

    <div class="container1">
		
        <nav class="navbar">
       <ul>
           <a href="index.php"><li>Orders</a></li>
           <a href="usedata.php"><li>Customers</a></li>
       </ul>
       </nav>
</div>
             <br>
             <br>

		<?php
 if(isset($_POST['Delete']))
 {
 echo $id=$_GET['id'];
  require_once('db.php');
  $query="DELETE FROM userdata where id=$id";
  $result = mysqli_query($con,$query);
    echo "data deleted";
  
}
 ?>

		<div class="row">
			<div class="col">
				<div class="card">
					<div class="card-head">
 						
					</div>
					<div class="card-body">
						<table class="tab" cellpadding="10" align="center" width="80%" height="20%">
							<tr class="rows">
								<td>Id</td>
								<td>UserName</td>
								<td>Mobile No.</td>
								<td>Email</td>
								<td>Password</td>
								

							</tr>
							<tr>
							<?php
                               require_once('db.php');
							   $query = "select * from userdata";
							   $result = mysqli_query($con,$query);							  
							while($row = mysqli_fetch_assoc($result))
							{
							?>
							<form action="usedata.php?id=<?php echo $row['id']; ?>" method="POST">
							<td> <?php echo $row['id']; ?></td>
							<td> <?php echo $row['user']; ?></td>
							<td> <?php echo $row['numbers']; ?></td>
							<td> <?php echo $row['email']; ?></td>
							<td> <?php echo $row['password']; ?></td>
							<td>
								<button class="del"name="Delete" value="submit">Delete</button>
							</td> 
							</tr>
							</form>
							<?php

							}
							?>
							

						</table>
					
					</div>
				</div>
			</div>
		</div>
        </body>
</html>