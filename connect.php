<?php
$host= "localhost";
$mysqlusers= "root";
$password ="";
$dbname ="information";

// create connection
$connect = mysqli_connect($host,$mysqlusers,$password,$dbname);
// check connection
if(!$connect){
    die("Connection failed:" .mysqli_connect_error());

}
echo "Successfully Connect";

?>

