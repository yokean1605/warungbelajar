<?php
if(isset($_GET['id_gambar']))
{
    include('koneksi.php');
    $id_gambar = $_GET['id_gambar'];
    $sql = "DELETE from tb_gambar where id_gambar='$id_gambar'";
    $query = mysqli_query($koneksi, $sql) or die("Kesalahan Pada " . mysqli_error($koneksi));
}
header('location:index.php');
?>