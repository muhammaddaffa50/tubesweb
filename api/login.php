<?php 
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM login WHERE username='".$username."' AND password='".$password."'";

$result=mysqli_query($koneksi,$sql);
$jumlah = mysqli_num_rows($result);

if ($jumlah == 1){
    echo json_encode("Success");
}else{
    echo json_encode("Error");
}
?>