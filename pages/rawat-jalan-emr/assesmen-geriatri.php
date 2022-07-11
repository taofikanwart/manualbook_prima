<?php

use DocPHT\Lib\DocPHT;

$_SESSION['page_id'] = '62c23cdc17555';

$html = new DocPHT(['Assesmen Geriatri']);
$values = [
$html->title('Assesmen Geriatri','Assesmen Geriatri'), 
$html->description('Tutorial melakukan penginputan EMR Assesmen Rawat Jalan Geriatri'), 
$html->description('1. Pada halaman dashboard klik pada menu rawat jalan seperti gambar berikut ini '), 
$html->image('rawat-jalan-emr/62c23da7bdcb8_1.png','1'), 
$html->description('2. Akan muncul list pasien hari ini yang sudah mendaftar, lalu klik tombol tindakan dinama pasien yang akan diperiksa'), 
$html->image('rawat-jalan-emr/62c23dc105efc_2.png','2'), 
$html->description('3. Muncul profile pasien yang akan diperiksa, lalu klik tombol EMR yang terletak di kanan atas '), 
$html->image('rawat-jalan-emr/62c23ddeb8452_3.png','3'), 
$html->description('4. Pada pilihan inputan EMR, klik pada menu FORM GERIATRI'), 
$html->image('rawat-jalan-emr/62c23f2095d37_Screenshot from 2022-07-04 08-10-27.png','4'), 
$html->description('5. Klik pada pilihan skrining awal pasien geriatri [RM – C10], bila sudah diisi lengkap lalu klik SIMPAN
'), 
$html->image('rawat-jalan-emr/62c23f8feb7d1_Screenshot from 2022-07-04 08-10-53.png','5'), 
$html->description('6.	Berikutnya Klik Comprehensive Geriatric Assesment  [RM – C10], bila sudah diisi lengkap lalu klik SIMPAN'), 
$html->image('rawat-jalan-emr/62c24045221af_Screenshot from 2022-07-04 08-11-17.png','6'), 
$html->description('7. Lengkapi data-data inputan kemudian, klik SIMPAN'), 
$html->image('rawat-jalan-emr/62c24052894a0_Screenshot from 2022-07-04 08-12-57.png','7'), 
$html->addButton(),
];