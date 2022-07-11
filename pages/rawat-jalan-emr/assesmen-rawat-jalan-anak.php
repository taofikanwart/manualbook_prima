<?php

use DocPHT\Lib\DocPHT;

$_SESSION['page_id'] = '62bd58874aa44';

$html = new DocPHT(['Assesmen Rawat Jalan Anak']);
$values = [
$html->title('Assesmen Rawat Jalan Anak','Assesmen Rawat Jalan Anak'), 
$html->description('Tutorial melakukan penginputan EMR Assesmen Rawat Jalan Anak'), 
$html->description('1. Pada halaman dashboard klik pada menu rawat jalan seperti gambar berikut ini'), 
$html->image('rawat-jalan-emr/62be56a880bcc_Screenshot from 2022-07-01 08-59-41.png','dashboard'), 
$html->description('2. Akan muncul list pasien  hari ini yang sudah mendaftar, lalu klik tombol tindakan dinama pasien yang akan diperiksa'), 
$html->image('rawat-jalan-emr/62be56c921394_Screenshot from 2022-07-01 08-59-55.png','rawat jalan'), 
$html->description('3. Muncul profile pasien yang akan diperiksa, lalu klik tombol EMR yang terletak di kanan atas'), 
$html->image('rawat-jalan-emr/62be5708a2e63_Screenshot from 2022-07-01 09-00-17.png','EMR'), 
$html->description('4. Mucul pilihan inputan EMR, pilih pada menu EMR ASESMEN ANAK'), 
$html->image('rawat-jalan-emr/62be572482712_Screenshot from 2022-07-01 09-00-29.png','input EMR'), 
$html->description('5. Akan muncul form assessment rawat jalan anak, lalu diform ada pilihan inputan dokter atau perawat bias dipilih  yang diinput dokter saja atau perawat dan bias ditampikan semua yang diinput keduanya'), 
$html->image('rawat-jalan-emr/62be576489f01_Screenshot from 2022-07-01 09-01-38.png','inputan'), 
$html->description('6. Pada form assessment terdapat riwayat yg menginput assessment anak'), 
$html->image('rawat-jalan-emr/62be57f2ade85_Screenshot from 2022-07-01 09-01-47.png','riwayat'), 
$html->image('rawat-jalan-emr/62be58141c814_Screenshot from 2022-07-01 09-01-54.png','simpan'), 
$html->description('7. Setelah selesai diinput, pastikan datanya sudah sesuai, kemudan klik simpan'), 
$html->addButton(),
];