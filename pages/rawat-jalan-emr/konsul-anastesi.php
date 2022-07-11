<?php

use DocPHT\Lib\DocPHT;

$_SESSION['page_id'] = '62c25b86c0d2f';

$html = new DocPHT(['Konsul Anastesi']);
$values = [
$html->title('Konsul Anastesi','Konsul Anastesi'), 
$html->description('Tutorial melakukan penginputan EMR lembar Konsul Anastesi'), 
$html->description('1. Pada halaman dashboard klik pada menu RAWAT JALAN seperti gambar berikut ini '), 
$html->image('rawat-jalan-emr/62c25b94a6f7b_1.png','1'), 
$html->description('2. Akan muncul list pasien hari ini yang sudah mendaftar, lalu klik tombol TINDAKAN pada nama pasien yang akan diperiksa'), 
$html->image('rawat-jalan-emr/62c25c64e0fae_2.png','2'), 
$html->description('3. Muncul profile pasien yang akan diperiksa, lalu klik tombol EMR yang terletak di kanan atas'), 
$html->image('rawat-jalan-emr/62c25c71b977b_3.png','3'), 
$html->description('4. Pada pilihan inputan EMR, klik pada menu LEMBAR KONSUL ANASTESI'), 
$html->image('rawat-jalan-emr/62c25d2b3a311_Screenshot from 2022-07-04 10-14-01.png','4'), 
$html->description('5. Inputakan data pada form Konsul Anastesi, kemudian klik tombol SIMPAN'), 
$html->image('rawat-jalan-emr/62c26000d1966_Screenshot from 2022-07-04 10-14-11.png','5'), 
$html->description('6. Pada bagian Histori klik pada tombol JAWAB, untuk mengisi lembar jawab untuk dokter spesialis anestesi'), 
$html->image('rawat-jalan-emr/62c2606e62ecd_Screenshot from 2022-07-04 10-14-24.png','6'), 
$html->description('7. Berikut form EMR Konsultasi Anestesi '), 
$html->image('rawat-jalan-emr/62c260cee3e61_Screenshot from 2022-07-04 10-14-47.png','7'), 
$html->description('8. Lengkapi data penginputan, kemudian klik SIMPAN jika sudah selesai'), 
$html->image('rawat-jalan-emr/62c260fcb34ce_Screenshot from 2022-07-04 10-15-16.png','8'), 
$html->addButton(),
];