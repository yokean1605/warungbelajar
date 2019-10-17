<?php

    echo "Belajar PHP </br>";
    ecHo "Belajar PHP </br>";
    eCho "Belajar PHP </br>";
    eCHo "Belajar PHP <br/>";

    function a(){
        echo "Tampilkan huruf 'a' <br/>";
    }

    function b(){
        echo "Tampilkan huruf 'b' <br/>";
    }

    a();
    b();
    // menulis skrip php dalam HTML

    $nama = "YOke Andreian Yudistira";
    $alamat = "Bajang Mlarak Ponorogo";
?>

<!doctype html>
<html lang="en">
  <head>
    <title>PHP | penamaakan</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?=$nama?>">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?=$alamat?>">
            </div>
            <!-- skrip di antara skrip PHP -->
            <?php for ($i=0; $i < 11; $i++) { ?>
                <p>Ini adalah paragraph loping for <?=$i?></p>
            <?php } ?>

            <!-- perintah untuk mencari luas -->
            <?php
                $s1 = 20;
                $s2 = 10;
                $luas = $s1 * $s2;
            ?>
            <div class="form-group">
                <label for="">Luas Persegi panjang adalah </label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId" value="<?=$luas?>">
            </div>

            <!-- pembuatan class dan function -->
            <?php
                class luas{
                    function hitung_luas($panjang, $lebar){
                        $l = $panjang * $lebar;
                        return $l;
                    }
                }
                $l = new luas();
            ?>
            <label for="">
                Luas persegi dari 10 di kali 20 adalah <?=$l->hitung_luas(20,10); ?>
            </label>

            <!-- mencari luas persegi dengan form input -->
            <?php
                $luas2 = 0;
                $keliling2 = 0;

                if(isset($_POST['submit'])){
                    $pjg = $_POST['panjang'];
                    $lbr = $_POST['lebar'];

                    // hitung luas
                    $luas2 = $pjg*$lbr;
                    $keliling2 = ($pjg+$lbr)*2;
                }
            ?>

            <form action="" method="post">
                <div class="form-group">
                  <label for="">Panjang</label>
                  <input type="text" name="panjang" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="">Lebar</label>
                  <input type="text" name="lebar" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
            <p>Maka luas yang di peroleh = <?=$luas2?></p>
            <p>Maka keliling yang di peroleh = <?=$keliling2?></p>

            <!-- mencari kecocokan input -->
            <?php
            if(isset($_POST['submit'])){
              $n1 = $_POST['nilai1'];
              $n2 = $_POST['nilai2'];

              if($n1==$n2){
                echo "sama";
              }
            }
          ?>

          <form action="" method="post">
            <div class="form-group">
              <label for="">Nilai 1</label>
              <input type="text" name="nilai1" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Nilai 2</label>
              <input type="text" name="nilai2" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
        
          <!-- costanta -->
          <?php 
            $nama_konstanta_1 = "WEB1";
            $nama_konstanta_2 = "WEB2";
            
            $email = "http://warungbelajar.com";
            define($nama_konstanta_1,$email);
            echo WEB1;
            echo "<br/>";
            

            // konstanta nilai 1
            define('web', 'http:://www.google.com/');
            echo web;

            // konstanta lebih dari
            define('DB', [
              'host'=>'localhost',
              'port'=>'3306',
              'db_name' => 'local',
              'user_name' => 'root',
              'pass' => '123'
            ]);
            echo '<br/>';
            echo DB['host'];
            
          ?>
          <?php
            $desimal = 90;
            $biner = 0b1011010;

            echo "Desimal = ".$desimal;
            echo "<br/>";
            echo "Biner = ".$biner;
          ?>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>