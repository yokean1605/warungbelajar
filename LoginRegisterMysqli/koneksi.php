<?php

class koneksi
{
    public $server = "localhost";
    public $username = "root";
    public $pass = "123";
    public $db = "crud";
    public $con = "";

    function __construct()
    {
        $this->con = mysqli_connect($this->server, $this->username, $this->pass, $this->db);
    }

    function register($username, $pass, $name)
    {
        $sql = "INSERT into tb_user (username, password, nama) VALUES ('$username', '$pass', '$name')";
        $insert = mysqli_query($this->con, $sql);
        return $insert;
    }

    function login($username, $pass, $remember)
    {
        $sql = "SELECT * FROM tb_user where username='$username'";
        $query = mysqli_query($this->con, $sql);
        $data = $query->fetch_array();
        if(password_verify($pass, $data['password']))
        {
            // kondisi cookies di aktifkan atau tidak
            if($remember)
            {
                setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
                setcookie('nama', $data['nama'], time() + (60 * 60 * 24 * 5), '/');
            }
            $_SESSION['username'] = $username;
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['is_login'] = TRUE;
            return TRUE;
        }
    }

    function relogin()
    {
        $sql   = "SELECT * FROM tb_user where username = '$username'";
        $query = mysqli_query($this->con, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['nama']     = $data['nama'];
        $_SESSION['is_login'] = TRUE;
    }
}

?>