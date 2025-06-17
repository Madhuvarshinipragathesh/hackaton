<?php
$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='web';
$conn = mysqli_connect("localhost", "root", "", "web");
if($con){
    echo"Connection Successfully";

}
else{
    die(mysqli_error($con));
}
?>



