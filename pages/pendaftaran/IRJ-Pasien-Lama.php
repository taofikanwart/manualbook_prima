<?php

use DocPHT\Lib\DocPHT;

$_SESSION['page_id'] = '62b95da16712d';

$html = new DocPHT(['Pendaftaran Rawat Jalan Pasien Lama']);
$values = [
$html->title('Pendaftaran Rawat Jalan Pasien Lama','Pendaftaran Rawat Jalan Pasien Lama'), 
$html->description('Tutorial melakukan pendaftaran Instalasi Rawat Jalan untuk pasien lama'), 
$html->description('1. Untuk melakukan pendaftaran, silahkan klik tombol pendaftaran seperti gambar dibawah ini'), 
$html->image('pendaftaran/62b95e19dcd85_Screenshot from 2022-06-27 14-33-12.png','Halaman Dashboard'), 
$html->description('2. Kemudian masukkan No RM Pasien, maka akan otomatis muncul terisi sesuai data pasien tersebut'), 
$html->image('pendaftaran/62b964322c2a6_Screenshot from 2022-06-27 15-00-41.png','Pendafataran'), 
$html->description('3. Lengkapi data untuk pendaftarannya, kemudian klik simpan'), 
$html->addButton(),
];