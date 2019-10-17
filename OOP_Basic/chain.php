<?php

    class siswa
    {
        private $nama;
        private $umur;

        public function set_nama(string $nama)
        {
            $this->nama = $nama;
            return $this;
        }

        public function set_umur(int $umur)
        {
            $this->umur = $umur;
            return $this;
        }

        public function set_bio()
        {
         return "Nama adalah " . $this->nama . " Umur ". $this->umur;
        }
    }
    $s = new siswa();
    echo $s->set_nama('yoke')->set_umur(14)->set_bio();
?>