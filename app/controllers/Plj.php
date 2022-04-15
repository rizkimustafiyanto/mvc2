<?php

class Plj extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Plj';
        $data['plj'] = $this->model('Plj_model')->getAllPlj();
        $this->view('templates/header', $data);
        $this->view('plj/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Plj';
        $data['plj'] = $this->model('Plj_model')->getPljById($id);
        $this->view('templates/header', $data);
        $this->view('plj/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Plj_model')->tambahDataPlj($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/plj');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/plj');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Plj_model')->hapusDataPlj($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/plj');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/plj');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Plj_model')->getPljById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Plj_model')->ubahDataPlj($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/plj');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/plj');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Plj';
        $data['plj'] = $this->model('Plj_model')->cariDataPlj();
        $this->view('templates/header', $data);
        $this->view('plj/index', $data);
        $this->view('templates/footer');
    }
}
