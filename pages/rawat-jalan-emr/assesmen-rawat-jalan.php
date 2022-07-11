<?php

use DocPHT\Lib\DocPHT;

$_SESSION['page_id'] = '62be5bc4ccba1';

$html = new DocPHT(['Assesmen Rawat Jalan']);
$values = [
$html->title('Assesmen Rawat Jalan','Assesmen Rawat Jalan'), 
$html->description('Tutorial melakukan penginputan EMR Assesmen Rawat Jalan'), 
$html->description('1. Pada halaman dashboard klik pada menu rawat jalan seperti gambar berikut ini'), 
$html->image('rawat-jalan-emr/62be5e6b4d566_Screenshot from 2022-07-01 08-59-41.png','Dashboard'), 
$html->description('2. Akan muncul list pasien hari ini yang sudah mendaftar, lalu klik tombol tindakan dinama pasien yang akan diperiksa '), 
$html->image('rawat-jalan-emr/62be5ea677f93_Screenshot from 2022-07-01 08-59-55.png','rawat jalan'), 
$html->description('3. Muncul profile pasien yang akan diperiksa, lalu klik tombol EMR yang terletak di kanan atas'), 
$html->image('rawat-jalan-emr/62be5eedb4022_Screenshot from 2022-07-01 09-00-17.png','emr'), 
$html->description('4. Mucul pilihan inputan EMR, pilih pada menu ASESMEN RAWAT JALAN'), 
$html->image('rawat-jalan-emr/62be64181cd14_Screenshot from 2022-07-01 09-50-29.png',''), 
$html->description('5. Akan muncul form assessment rawat jalan, lalu diform ada pilihan inputan dokter atau perawat bias dipilih  yang diinput dokter saja atau perawat dan bias ditampikan semua yang diinput keduanya'), 
$html->addButton(),
];