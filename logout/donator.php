<?php

$koneksi = mysqli_connect('localhost','root','','youthcare_db');

if (isset($_POST['submit']))
  {
    
$radioVal = $_POST["amount"];
$username = $_SESSION['user_name'];

$sql = "INSERT INTO tb_donator(username,amount)VALUES('$username','$radioVal')";
$result = mysqli_query($koneksi, $sql);

if ($result) {
    header("location: index.php");

} else {


    echo 'error';
}

}

?>