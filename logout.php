<?php
include 'koneksi.php';
session_start();

//hapus dan destroy session
session_unset(); 
session_destroy();

//hapus cookies
setcookie("", "", 0, '/');

header("location:login?pesan=logout");

