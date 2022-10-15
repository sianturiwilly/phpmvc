<?php

class Mahasiswa_model {
    // private $mhs = [
    //     [
    //         "nama" => "Willi Sianturi",
    //         "nim" => "92316073",
    //         "email" => "prajudiwilliam10@gmail.com",
    //         "jurusan" => "Sistem Informasi"
    //     ],
    //     [
    //         "nama" => "Darwis Purba",
    //         "nim" => "91078933",
    //         "email" => "darwispurba93@gmail.com",
    //         "jurusan" => "Hukum"
    //     ],
    //     [
    //         "nama" => "Nike Ardilla",
    //         "nim" => "54029399",
    //         "email" => "nikeardilla75@gmail.com",
    //         "jurusan" => "Hukum"
    //     ]
    // ];
    private $dbh; // DBH: Database Handler
    private $stmt;

    public function __construct()
    {
        // DSN: Data Source Name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>