<?php 

$nama = $_POST['nama'];
$email = $_POST['alamat'];
$alamat = $_POST['email'];

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "a+");
fputs($fp, "$nama|$alamat|$email\n");
fclose($fp);

header('location:setelah.php');
 ?>


