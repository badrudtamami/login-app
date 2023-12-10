<?php
class Library
{
    protected $username = "root",
        $password = "root",
        $servername = "localhost",
        $database = "blog";
    protected $error;
    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    //fungsi login
    public function login($username, $password)
    {
        // Ambil data dari database 
        $query = $this->db->prepare("SELECT * FROM users WHERE username = :username");
        $query->bindParam(":username", $username);

        $query->execute();
        $data = $query->fetch();
        $user = $query->rowCount();
        if ($user > 0) {
            // jika password yang dimasukkan sesuai dengan yg ada di database 
            if (password_verify($password, $data['password'])) {
                $_SESSION['user_session'] = $data['id'];
                return true;
            } else {
                $this->error = "username atau Password Salah";
                return false;
            }
        } else {
            $this->error = "Username atau Password Salah";
            return false;
        }
    }

    //fungsi registrasi
    public function register($username, $email, $password)
    {
        try {
            // buat hash dari password yang dimasukkan 
            $hashPasswd = password_hash($password, PASSWORD_DEFAULT);
            //Masukkan user baru ke database 
            $query = $this->db->prepare("INSERT INTO users (username, email, password) VALUES(:username, :email, :pass)");

            $query->bindParam(":username", $username);
            $query->bindParam(":email", $email);
            $query->bindParam(":pass", $hashPasswd);
            if (empty($username) || empty($email) || empty($password)) {
                $this->error = "Data tidak boleh kosong!";
                return false;
            } else {
                $query->execute();
                return true;
            }
        } catch (PDOException $e) {
            if ($e->errorInfo[0] == 23000) {
                $this->error = "Email sudah digunakan!";
                return false;
            } else {
                echo $e->getMessage();
                return false;
            }
        }
    }

    //fungsi jika sudah login
    public function isLoggedIn()
    {
        // Apakah user_session sudah ada di session 
        if (isset($_SESSION['user_session'])) {
            return true;
        }
    }

    public function getUser()
    {
        // Cek apakah sudah login 
        if (!$this->isLoggedIn()) {
            return false;
        }

        try {
            // Ambil data user dari database 
            $query = $this->db->prepare("SELECT * FROM users WHERE id = :id");
            $query->bindParam(":id", $_SESSION['user_session']);

            $query->execute();
            return $query->fetch();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    //fungsi eror
    public function getLastError()
    {
        return $this->error;
    }


    //dashboard
    public function showArtikel()
    {
        $query = $this->db->prepare("SELECT * FROM artikel");
        $query->execute();

        $data = $query->fetchAll();
        return  $data;
    }

    public function createArtikel($judul_artikel, $isi_artikel, $penulis_artikel)
    {
        $query = $this->db->prepare("INSERT INTO artikel (judul_artikel, isi_artikel, penulis_artikel) VALUES (:judul_artikel, :isi_artikel, :penulis_artikel)");

        $query->bindParam(":judul_artikel", $judul_artikel);
        $query->bindParam(":isi_artikel", $isi_artikel);
        $query->bindParam(":penulis_artikel", $penulis_artikel);

        $query->execute();
        return $query->rowCount();
    }

    public function deleteArtikel($id)
    {
        $query = $this->db->prepare("DELETE FROM artikel WHERE id = :id");

        $query->bindParam(":id", $id);

        $query->execute();
        return $query->rowCount();
    }

    public function getById($id)
    {
        $query = $this->db->prepare("SELECT * FROM artikel WHERE id = :id");
        $query->bindParam(":id", $id);
        $query->execute();
        return $query->fetch();
    }

    public function updateArtikel($id, $judul_artikel, $isi_artikel, $penulis_artikel)
    {
        $query = $this->db->prepare("UPDATE artikel  SET judul_artikel = :judul_artikel, isi_artikel = :isi_artikel, penulis_artikel = :penulis_artikel WHERE id = :id");
        $query->bindParam(":id", $id);
        $query->bindParam(":judul_artikel", $judul_artikel);
        $query->bindParam(":isi_artikel", $isi_artikel);
        $query->bindParam(":penulis_artikel", $penulis_artikel);

        $query->execute();
        return $query->rowCount();
    }
}