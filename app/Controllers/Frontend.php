<?php

namespace App\Controllers;

use App\Models\FilmsModel;
use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Frontend extends BaseController
{
    public function index()
    {
        // buat object model $film
        $film = new FilmsModel();

        /* siapkan data untuk dikirim ke view dengan nama $films dan isi datanya dengan film yang sudah terbit */
        $data['films'] = $film->findAll();

        // cek isi data
        // dd($data['films']);

        // kirim data ke view
        return view('fe/index', $data);
    }

    public function detail($id)
    {
        $film = new FilmsModel();

        // mencari data dari $id
		$data['film'] = $film->where(['id' => $id])->first();

        // tampilkan 404 error jika data tidak ditemukan
		if (!$data['film']) {
			throw PageNotFoundException::forPageNotFound();
		}

        return view('fe/detail', $data);
    }

    public function jadwal($id)
    {
        $film = new FilmsModel();

        // mencari data dari $id
		$data['film'] = $film->where(['id' => $id])->first();

        // tampilkan 404 error jika data tidak ditemukan
		if (!$data['film']) {
			throw PageNotFoundException::forPageNotFound();
		}

        return view('fe/jadwal', $data);
    }

    public function pay($id, $time)
    {
        $film = new FilmsModel();

        // mencari data dari $id
		$data['film'] = $film->where(['id' => $id])->first();

        // tampilkan 404 error jika data tidak ditemukan
		if (!$data['film']) {
			throw PageNotFoundException::forPageNotFound();
		}

        return view('fe/pay', $data);
    }
}
