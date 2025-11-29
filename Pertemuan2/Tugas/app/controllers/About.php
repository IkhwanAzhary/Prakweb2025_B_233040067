<?php

class About extends Controller {
    public function index($nama = 'Ikhwan', $pekerjaan = 'Mahasiswa', $umur = 21)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $this->view('about/index', $data);
    }

    public function page()
    {
        $this->view('about/index');
    }
}