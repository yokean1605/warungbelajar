<?php

include('koneksi.php');
if(isset($_POST['upload']))
{
  if(empty($_FILES['gambar']['tmp_name']))
  {
    echo "Input file belum digunakan";
  } else 
  {
    $file_name = $_FILES['gambar']['name'];
    $file_size = $_FILES['gambar']['size'];
    $file_type = $_FILES['gambar']['type'];

    if($file_size < 2048000 and ($file_type='image/jpeg' or $file_type == 'image/png'))
    {
      $image = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
      $keterangan = $_POST['keterangan'];
      $sql = "INSERT into tb_gambar (gambar, nama_gambar, tipe_gambar, ukuran_gambar, keterangan) values ('$image','$file_name', '$file_type', '$file_size', '$keterangan')";
      mysqli_query($koneksi, $sql) or die("<b>Error</b> Ada kesalahan" . mysqli_error($koneksi));
      header('location:index.php');
    } else 
    {
      echo "file tidak sesuai ukuran";
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
      <table>
        <tr>
          <td>Gambar</td>
          <td>
            <input type="file" name="gambar" id="">
          </td>
        </tr>
        <tr>
          <td>Keterangan</td>
          <td>
            <textarea type="text" name="keterangan" id=""></textarea>
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="upload" id="" value="Upload">
          </td>
        </tr>
      </table>
    </form>
</body>
</html>