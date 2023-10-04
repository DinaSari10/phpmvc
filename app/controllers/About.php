<?php

class About extends Controller {
    public function index($nama = 'Dina', $sekolah = 'Dokter', $umur = 17)
    {
        $data['nama'] = $nama;
        $data['sekolah'] = $sekolah;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
      
   