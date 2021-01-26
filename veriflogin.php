<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = md5 ($_POST['password']);

if (!empty($username) && !empty($password)){
    $sql = mysqli_query($connect, "SELECT * FROM login where username ='$username' AND password ='$password'");
    $result = mysqli_num_rows($sql);
    if($result) {
        echo "Login Berhasil!";
        echo "<a href='index.php'>Lanjut</a>";
    } else{
        echo "Username dan Password salah, silahkan ulangi. <a href='login.php'>login</a>";}
    }else {
    echo "Username dan Password kosong, silahkan di isi. <a href='login.php'>login</a>";
}

?>
