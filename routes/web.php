<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard/siswa', function () {
    
    $data = [
        ['nama' => 'Ahmad Yamin', 'nilai' => 98],
        ['nama' => 'Ahmad Adi Sucipto', 'nilai' => 97],
        ['nama' => 'Bagus Lucky', 'nilai' => 78],
        ['nama' => 'Caca', 'nilai' => 65],
        ['nama' => 'Soeoed', 'nilai' => 77],
        ['nama' => 'Fatar RTX', 'nilai' => 91],
    ];

    return view('siswa', compact( 'data'));
})->name('dashboard/siswa');

Route::get('/dashboard/guru', function () {
    $dataguru = [
        ['nama' => 'Bu Ariee', 'mapel' => 'Matematika'],
        ['nama' => 'Pak Lukman', 'mapel' => 'Pemrograman'],
        ['nama' => 'Bu Lasmi', 'mapel' => 'Agama'],
        ['nama' => 'Bu Enik', 'mapel' => 'Bahasa Inggris'],
        ['nama' => 'Pak Hamid', 'mapel' => 'Teknologi Informasi'],
        ['nama' => 'Bu Futihah', 'mapel' => 'Seni Budaya'],
    ];

    return view('guru', compact('dataguru'));
})->name('dashboard/guru');

Route::get('/dashboard/galery', function () {
    $link = [
        'https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/esensi/2023/10/salak.jpg',
        'https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/esensi/2023/10/salak.jpg',
        'https://www.indonesia.travel/content/dam/indtravelrevamp/id-id/ide-liburan/suka-mendaki-gunung-coba-jelajahi-5-gunung-diindonesiaaja-ini-yuk/gunung-semeru.jpg',
        'https://www.indonesia.travel/content/dam/indtravelrevamp/id-id/ide-liburan/suka-mendaki-gunung-coba-jelajahi-5-gunung-diindonesiaaja-ini-yuk/gunung-semeru.jpg'
    ];
    return view('galery',compact('link'));
})->name('dashboard/galery');