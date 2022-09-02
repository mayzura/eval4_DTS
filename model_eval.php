<?php
    //koneksi
    function buatKoneksi(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "company_eval4";
    return mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    }

    //ambil tabel produk
    function getTableProduk(){
        $link = buatKoneksi();
        $query = "SELECT * FROM produk";
        $result = mysqli_query($link, $query);
        
    //ambil data dalam bentuk array 2 dimensi
    $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $hasil;
    }

    // echo "<pre>";
    // print_r(getTableProduk());
    // echo "</pre>";
?>

