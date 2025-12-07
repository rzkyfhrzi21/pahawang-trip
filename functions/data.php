<?php

include 'koneksi.php';

$sql_totalTrip          = mysqli_query($koneksi, "SELECT * from trip");
$total_trip             = mysqli_num_rows($sql_totalTrip);

$sql_totaluser          = mysqli_query($koneksi, "SELECT * from user where level != 'cust'");
$total_user             = mysqli_num_rows($sql_totaluser);

$sql_totalcust          = mysqli_query($koneksi, "SELECT * from user where level = 'cust'");
$total_cust             = mysqli_num_rows($sql_totalcust);

$sql_totalKlien         = mysqli_query($koneksi, "SELECT * from pemesanan");
$total_klien            = mysqli_num_rows($sql_totalKlien);
