 <?php
 $id=$_POST['var'];
 require_once('db.php');
 $query="DELETE FROM entry_details where id=$id";
 $result = mysqli_query($con,$query);
 if(mysqli_fetch_row($result)>0)
 {
   echo "data deleted";
 }
 else{
    echo "data doesont deleted";
    echo $con;
 }
 ?>