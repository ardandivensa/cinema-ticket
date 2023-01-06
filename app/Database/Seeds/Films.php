<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Films extends Seeder
{
    public function run()
    {
        // membuat data default
		$films = [
			[
				'title' => 'Peaky Blinders',
				'category'  => 'thriller',
				'producer'  => '',
				'director'  => '',
				'writer'  => '',
				'production'  => '',
				'thumbnail'  => 'assets/img/peaky-blinders.jpg',
				'content' => 'Peaky Blinders adalah serial drama populer bergenre thriller crime yang mengisahkan tentang kehidupan sekelompok gangster berbahaya di Birmingham, Inggris. Serial tersebut konon diangkat dari kisah nyata yang terjadi pada tahun 1890.'
			],
			[
				'title' => 'The Godfather',
				'category'  => 'criminal',
				'producer'  => 'Fikrie Ardiansyah',
				'director'  => 'Ardantriya Divensa',
				'writer'  => 'Mohammed Farrel Faisal',
				'production'  => 'TI UMB Films',
				'thumbnail'  => 'assets/img/the-godfather.jpg',
				'content' => 'The Godfather merupakan film legendaris yang tak hanya berhasil menjadi film terbaik pada penghargaan Oscar 1972, tetapi juga menjadi film dengan penilaian tertinggi kedua di IMDb dengan perolehan rating 9.2/10.'
			],
			[
				'title' => 'G30S/PKI',
				'category'  => 'history',
				'producer'  => '',
				'director'  => '',
				'writer'  => '',
				'production'  => '',
				'thumbnail'  => 'assets/img/g30s-pki.jpg',
				'content' => ''
			],
			[
				'title' => 'Cek Toko Sebelah',
				'category'  => 'comedy',
				'producer'  => '',
				'director'  => '',
				'writer'  => '',
				'production'  => '',
				'thumbnail'  => 'assets/img/cek-toko-sebelah.jpg',
				'content' => ''
			],
			[
				'title' => 'Dilan',
				'category'  => 'romance',
				'producer'  => '',
				'director'  => '',
				'writer'  => '',
				'production'  => '',
				'thumbnail'  => 'assets/img/dilan.jpg',
				'content' => ''
			],
		];

		foreach($films as $data){
			// insert semua data ke tabel
			$this->db->table('films')->insert($data);
		}
    }
}
