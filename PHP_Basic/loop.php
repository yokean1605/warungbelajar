<!doctype html>
<html lang="en">
  <head>
    <title>PHP | FOR</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <p>Loop for</p>
        <?php
            for($i=1; $i<10;$i++) {
                for($a=10; $a>0;$a--){
                    echo $a;
                }
                echo "<br/>";
            }
        ?>

        <!-- lopp while -->
        <p>Loop while</p>
        <?php
          $b=1;
          while ($b <= 10) :
            echo "I love U";
            echo "<br/>";
            $b++;
          endwhile;

          $c=0;
          while ($c <= 101){
            echo $c;
            echo "<br/>";
            $c = $c+10;
          }

          $d=0;
          while ($d <= 10) {
            $e=0;
            while($e<=10){
              echo $e.",";
              $e++;
            }
            $d++;
            echo "<br/>";
          }

          // continue
          $f = 1;
          while($f <= 10){
            if($f == 7){
              $f++;
              continue;
            }
            echo $f;
            echo "<br/>";
            $f++;
          }

          // do while
          $z = 1;
          do {
            echo $z;
            echo "<br/>";
            $z++;
          } while ($z <= 10);
        ?>
    </div>  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>