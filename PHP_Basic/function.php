<!doctype html>
<html lang="en">
  <head>
    <title>FUnction | PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
            <!-- function dengan 2 parameter -->
            <?php
                class mencari_luas {
                  
                  function luas_segitiga($alas, $tinggi){
                      $luas = ($alas)/2 * $tinggi;
                      return $luas;
                  }
                  
                  // menuliskan type interger di parameter
                  function luas_segitiga2($alas, $tinggi)
                  {
                    if((is_int($tinggi)) and (is_int($alas)) ){
                      $value = ($alas)/2 * $tinggi;
                      return $value;
                    }else {
                      echo "(maaf isi bukan int)";
                    }
                  }

                  // memberi nilai default pada parameter
                  function luas_segitiga3($alas = 10, $tinggi = 20)
                  {
                    $value2 = ($alas)/2 * $tinggi;
                    return $value2;
                  }
                }
                $l = new mencari_luas();                
            ?>
            <h1>Luas dari 20 * 30 adalah <?=$l->luas_segitiga(20,30)?></h1>
            <h2>Luas segitiga dari 20 * 20 adalah <?=$l->luas_segitiga2("alas",20)?></h2>
            <h2>Luas segitiga dari 20 * 20 adalah <?=$l->luas_segitiga3(20)?></h2>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>