<!doctype html>
<html lang="en">
  <head>
    <title>Form Validasi PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <?php
        
        $error_nama ="";
        $error_email ="";
        $error_web ="";
        $error_pesan ="";
        $error_telp ="";

        $nama = "";
        $email = "";
        $web = "";
        $pesan = "";
        $telp = "";

        // perintah ini digunakan untuk pengecekan apakah formnya sudak di submit atau belum
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            // pengecekan nama
            if(empty($_POST["nama"]))
            {
                $error_nama = "Nama tidak boleh kosong";
            } else {
                $nama = cek_input($_POST["nama"]);
                if(!preg_match("/^[a-zA-Z]*$/", $nama))
                {
                    $namaErr = "Inputan Hanya boleh huruf dan spasi";
                }
            }

            // pengecekan email
            if(empty($_POST["email"]))
            {
                $error_email = "Email tidak boleh kosong";
            } else {
                $email = cek_input($_POST["email"]);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    $error_email = "mail tidak valid";
                }
            }

            // pengecekan pesan
            if(empty($_POST["pesan"]))
            {
                $error_pesan = "Pesan tidak boleh kosong";
            } else {
                $pesan = cek_input($_POST["pesan"]);
            }

            // checl inputan web
            if(empty($_POST["web"]))
            {
                $error_web = "Web tidak boleh kosong";
            } else {
                $web = cek_input($_POST['web']);
                if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web)){
                    $error_web = "url tidak valid";
                }
            }

            // cek telpon
            if(empty($_POST["telp"]))
            {
                $error_telp = "Telephone tidak boleh kosong";
            } else {
                $tlp = cek_input($_POST["telp"]);
                if(is_numeric($telp))
                {
                    $error_telp = "Nomor HP harus angka";
                }
            }
        }
        function cek_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
      ?>
      <div class="container">
        <div class="row">
            <div class="col-5">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <div class="form-group">
                      <label for="">Nama</label>
                      <input type="text" name="nama" id="" class="form-control <?php echo ($error_nama !="" ? "border-danger" : ""); ?>" placeholder="Masukan Nama" id="nama" value="<?php echo $nama; ?>">
                      <span class="text-danger small"><?=$error_nama?></span>
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" name="email" id="" class="form-control <?php echo($error_email !="" ? "border-danger" : ""); ?>" placeholder="Masukan Email" value="<?=$email?>">
                      <span class="warning"><?=$error_email?></span>
                    </div>
                    <div class="form-group">
                      <label for="">Pesan</label>
                      <textarea class="form-control <?php echo($error_pesan !="" ? "border-danger" : ""); ?>" name="pesan" id="pesan" value="<?=$pesan?>"></textarea>
                      <span class="warning"><?=$error_pesan?></span>
                    </div>
                    <div class="form-group">
                      <label for="">Alamat web</label>
                      <input type="text" name="web" id="" class="form-control" placeholder="Alamat web">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <?php
                    echo "<h2> Input </h2>";
                    echo "Nama = ".$nama;
                    echo "<br/>";
                    echo "Email = ".$email;
                    echo "<br/>";
                    echo "Pesan = ".$pesan;
                    echo "<br/>";
                    echo "Alamat web = ".$web;
                ?>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>