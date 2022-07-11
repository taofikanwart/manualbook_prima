<?php

use DocPHT\Lib\DocPHT;

$_SESSION['page_id'] = '62c2391b52edc';

$html = new DocPHT(['Assesmen Kemoterapi']);
$values = [
$html->title('Assesmen Kemoterapi','Assesmen Kemoterapi'), 
$html->description('Tutorial melakukan penginputan EMR Assesmen Rawat Jalan Kemoterapi'), 
$html->description('1. Pada halaman dashboard klik pada menu rawat jalan seperti gambar berikut ini '), 
$html->image('rawat-jalan-emr/62c239307ace2_Screenshot from 2022-07-04 07-46-04.png','dashboard'), 
$html->description('2. Akan muncul list pasien  hari ini yang sudah mendaftar, lalu klik tombol tindakan dinama pasien yang akan diperiksa'), 
$html->image('rawat-jalan-emr/62c2394edca07_Screenshot from 2022-07-04 07-46-20.png','list pasien'), 
$html->description('3. Muncul profile pasien yang akan diperiksa, lalu klik tombol EMR yang terletak di kanan atas'), 
$html->image('rawat-jalan-emr/62c239794f858_Screenshot from 2022-07-04 07-46-39.png','emr'), 
$html->description('4. Mucul pilihan inputan EMR, pilih pada menu ASESMEN KEMOTERAPI'), 
$html->image('rawat-jalan-emr/62c239b2a1733_Screenshot from 2022-07-04 07-46-49.png','pilihan assesmen kemoterapi'), 
$html->description('5. Akan tampil form asesmen kemoterapi seperti pada gambar berikut'), 
$html->image('rawat-jalan-emr/62c23a053ec6a_Screenshot from 2022-07-04 07-47-10.png','asesmen kemoterapi'), 
$html->description('6. Lengkapi inputan sesuai dengan data yang ada, kemudian klik SIMPAN'), 
$html->image('rawat-jalan-emr/62c23a3f88247_Screenshot from 2022-07-04 07-48-26.png','simpan'), 
$html->addButton(),
];