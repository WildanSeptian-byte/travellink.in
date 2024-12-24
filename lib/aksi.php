<?php
$aksi = $_GET['aksi'];

switch($aksi){
    case 'galeri':
        include 'main/galeri.php';
    break;
    case 'kontak':
        include 'main/about.php';
    break;
    case 'pesan':
        include 'main/pemesanan.php';
    break;
    case 'detail':
        include 'main/detail.php';
    break;
    case 'daftar':
        include 'main/daftar.php';
    break;
    case 'hapus':
        include 'main/hapus.php';
    break;
    
    
    default:
        include '../index.php';
    break;
}

?>