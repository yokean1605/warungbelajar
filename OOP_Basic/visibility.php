<!doctype html>
<html lang="en">
  <head>
    <title>Visibilty property PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <?php
            
            /**
             * visibility private
             * hanya dapat di akses oleh class itu sendiri tidak bisa di akses oleh class turunanya
             */
            class komputer
            {
                var $prosesor = "Core i7";
                private $memory = "4 GB";
                private function memutar_video()
                {
                    return $this->prosesor;
                }
            }

            $kom = new komputer();
          ?>
          <h3>
              <?php
                echo $kom->prosesor;
                // echo $kom->memory;
                // echo $kom->memutar_video();
              ?>
          </h3>

          <?php
            /**
             * visibility protected 
             * bisa di akses melalui class itu sendiri dan class turunanya
             **/

             class komputer2
             {
                 protected $prosesor = "Core i7";
                 protected $memory = "6GB";
                 function memutar_video()
                 {
                    return $this->memory;
                 }
             }

             class komputer_anak extends komputer2
             {
                 function memutar_video2()
                 {
                     return $this->memory;
                 }
             }

             $komp = new komputer2;
             $komp_anak = new komputer_anak();
             echo $komp->memutar_video();
             echo "<br/>";
             echo $komp_anak->memutar_video2();
             echo "<br/>";
          ?>

          <?php

            class komputer_public
            {
                public $memory = "6GB";
                public $prosesor = "Core i 7";
                public function memutar_video()
                {
                    return "Komputer memutar video";
                }
            }
            $jos = new komputer_public;
            echo $jos->memutar_video();
             
          ?>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>