<?php

class Mk extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Mk';
        $data['mk'] = $this->model('Mk_model')->getAllMk();
        $this->view('templates/header', $data);
        $this->view('mk/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mk';
        $data['mk'] = $this->model('Mk_model')->getMkById($id);
        $this->view('templates/header', $data);
        $this->view('mk/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Mk_model')->tambahDataMk($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mk');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mk');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Mk_model')->hapusDataMk($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/mk');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/mk');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Mk_model')->getMkById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Mk_model')->ubahDataMk($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/mk');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/mk');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Mk';
        $data['mk'] = $this->model('Mk_model')->cariDataMk();
        $this->view('templates/header', $data);
        $this->view('mk/index', $data);
        $this->view('templates/footer');
    }
}
