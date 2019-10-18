<?php
    include('koneksi.php');
    $query = mysqli_query($koneksi, "SELECT * from tb_gambar") or die("<b>Error</b> Kesalahan pada" . mysqli_error($koneksi));
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Tampikan Table gambar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <div class="my-3">
              <a href="form-upload.php" class="btn btn-success btn-sm">Upload gambar</a>
          </div>
            <table class="table">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Gambar</th>
                      <th>Keterangan</th>
                      <th>Tipe</th>
                      <th>Ukuran</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
            
                <?php
                    $no = 1;
                    while($row = mysqli_fetch_assoc($query))
                    {
                ?>
                    <tr>
                        <td>
                            <?=$no++?>
                        </td>
                        <td>
                            <img src="image_view.php?id_gambar=<?=$row['id_gambar']?>" alt="gambar" class="img-fluid">
                        </td>
                        <td>
                            <?=$row['keterangan']?>
                        </td>
                        <td>
                            <?=$row['tipe_gambar']?>
                        </td>
                        <td>
                            <?=$row['ukuran_gambar']?>
                        </td>
                        <td>
                            <a href="delete_gambar.php?id_gambar=<?=$row['id_gambar']?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php } ?>

              </tbody>
          </table>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>