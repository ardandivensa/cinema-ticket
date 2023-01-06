<?php

namespace App\Controllers\Admin;

use App\Models\FilmsModel;
use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Film extends BaseController
{
    public function index()
    {
        $film = new FilmsModel();
        $data['films'] = $film->findAll();

        // cek isi data
        // dd($data['films']);

        return view('fe/index', $data);
    }

    //--------------------------------------------------------------------------

    public function detail($id)
	{
		$film = new FilmsModel();
		$data['film'] = $film->where('id', $id)->first();
		
		if(!$data['film']){
			throw PageNotFoundException::forPageNotFound();
		}
		return view('film_detail', $data);
    }

    //--------------------------------------------------------------------------
    
    public function create()
    {
        // lakukan validasi
        $validation =  \Config\Services::validation();
        $validation->setRules(['title' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        // jika data valid, simpan ke database
        if($isDataValid){
            $news = new FilmsModel();
            $news->insert([
                "title" => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status" => $this->request->getPost('status'),
                "slug" => url_title($this->request->getPost('title'), '-', TRUE)
            ]);
            return redirect('admin/news');
        }
		
        // tampilkan form create
        return view('admin_create_news');
    }

    //--------------------------------------------------------------------------

    public function edit($id)
    {
        // ambil artikel yang akan diedit
        $news = new FilmsModel();
        $data['news'] = $news->where('id', $id)->first();
        
        // lakukan validasi data artikel
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'id' => 'required',
            'title' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        // jika data vlid, maka simpan ke database
        if($isDataValid){
            $news->update($id, [
                "title" => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status" => $this->request->getPost('status')
            ]);
            return redirect('admin/news');
        }

        // tampilkan form edit
        return view('admin_edit_news', $data);
    }

    //--------------------------------------------------------------------------

	public function delete($id){
        $news = new FilmsModel();
        $news->delete($id);
        return redirect('admin/news');
    }
}
