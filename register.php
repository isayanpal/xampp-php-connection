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
if(
    isset($_POST['save']) 
) {
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];

    $sql_query="INSERT INTO entry_details (first_name,last_name,email)
    VALUES ('$first_name','$last_name','$email')";
    if(mysqli_query($conn,$sql_query))
    {
        echo "New Details Entry inserted successfully !";
    }
    else
    {
        echo "Error:" . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>