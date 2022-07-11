<?php

use DocPHT\Lib\DocPHT;

$_SESSION['page_id'] = '62c261f55ccc6';

$html = new DocPHT(['Lembar Konsul']);
$values = [
$html->title('Lembar Konsul','Lembar Konsul'), 
$html->description('utorial melakukan penginputan EMR LEMBAR KONSUL'), 
$html->description('1. Pada halaman dashboard klik pada menu RAWAT JALAN seperti gambar berikut ini'), 
$html->image('rawat-jalan-emr/62c262059237b_1.png',''), 
$html->description('2. Akan muncul list pasien hari ini yang sudah mendaftar, lalu klik tombol TINDAKAN pada nama pasien yang akan diperiksa'), 
$html->image('rawat-jalan-emr/62c263d51aade_2.png',''), 
$html->description('3. Muncul profile pasien yang akan diperiksa, lalu klik tombol EMR yang terletak di kanan atas '), 
$html->image('rawat-jalan-emr/62c26b9f8b26f_3.png','3'), 
$html->description('4. Pada pilihan inputan EMR, klik pada menu LEMBAR KONSUL'), 
$html->image('rawat-jalan-emr/62c26bcf99c90_Screenshot from 2022-07-04 10-47-24.png','4'), 
$html->description('5. Setelah form terbuka, pilih pada Nama Konsulen dan Unit yang diminta'), 
$html->image('rawat-jalan-emr/62c26c2403a08_Screenshot from 2022-07-04 10-47-48.png','5'), 
$html->description('6. Input form yang tersedia, pastikan adatanya sesuai, kemudian klik SIMPAN'), 
$html->image('rawat-jalan-emr/62c26c72aea6c_Screenshot from 2022-07-04 10-48-01.png','6'), 
$html->description('7. Klik pada menu RIWAYAT KONSUL untuk menjawab konsul yang diminta poli sebelumnya'), 
$html->image('rawat-jalan-emr/62c26ca6bc95b_Screenshot from 2022-07-04 10-48-18.png','7'), 
$html->addButton(),
];