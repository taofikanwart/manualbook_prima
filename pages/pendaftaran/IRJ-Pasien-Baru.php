<?php

use DocPHT\Lib\DocPHT;

$_SESSION['page_id'] = '62b9666248095';

$html = new DocPHT(['Pendaftaran Rawat Jalan Pasien Baru']);
$values = [
$html->title('Pendaftaran Rawat Jalan Pasien Baru','Pendaftaran Rawat Jalan Pasien Baru'), 
$html->description('Tutorial melakukan pendaftaran Instalasi Rawat Jalan untuk pasien baru'), 
$html->description('1. Untuk melakukan pendafatan rawat jalan pasien baru, pada menu halaman awal klik menu pendaftaran'), 
$html->image('pendaftaran/62bd183a782cb_Screenshot from 2022-06-27 14-33-12.png','halaman dahsboard'), 
$html->description('2. Kemudian klik pada menu Pendaftaran IRJ'), 
$html->image('pendaftaran/62bd18eb0966e_Screenshot from 2022-06-30 10-28-41.png','pendaftaran IRJ'), 
$html->description('3. Klik pada tombol tambah Pasien, seperti pada gambar dibawah ini'), 
$html->image('pendaftaran/62bd19d32d82b_Screenshot from 2022-06-30 10-27-02.png','tambah pasien'), 
$html->description('4. Isi form data pasien pastikan form dengan tanda bintang merah sudah terisi semua, kemudian klik simpan'), 
$html->image('pendaftaran/62bd50835c9d7_Screenshot from 2022-06-30 14-26-13.png','form tambah data pasien'), 
$html->description('5. Lengkapi data untuk pendaftarannya pada form berikut ini'), 
$html->image('pendaftaran/62bd51c28ae33_Screenshot from 2022-06-27 14-39-00.png','pendaftaran'), 
$html->description('6. terakhir klik simpan'), 
$html->addButton(),
];