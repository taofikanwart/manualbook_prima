<?php

use DocPHT\Lib\DocPHT;

$_SESSION['page_id'] = '62b9468e83e2f';

$html = new DocPHT(['Login']);
$values = [
$html->title('Login','Login'), 
$html->description('Tata cara akses aplikasi Prima RSUP Persahabatan'), 
$html->description('Aplikasi Prima dapat diakses melalui link berikut:
untuk yang menggunakan jaringan internal:'), 
$html->linkButton('http://192.168.132.2/simrs','http://192.168.132.2/simrs','1'), 
$html->description('untuk yang menggunakan jaringan publik atau internet dapat melalui link berikut:'), 
$html->linkButton('https://simrspersahabatan.co.id/simrs/user/login','https://simrspersahabatan.co.id/simrs',''), 
$html->image('akses/62b95c8badc2e_Screenshot from 2022-06-27 14-28-48.png','Halaman Login'), 
$html->description('masukkan username dan password aplikasi Prima yang sudah diberikan, kemudian klik login, maka akan tampil halaman pertama dari aplikasi Prima'), 
$html->image('akses/62bd17320c77f_Screenshot from 2022-06-27 14-33-12.png','Halaman Dashboard'), 
$html->addButton(),
];