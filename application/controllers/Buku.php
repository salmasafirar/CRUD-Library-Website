<?php

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Buku';
        $data['buku'] = $this->Buku_model->getAllBuku();
        if ($this->input->post('keyword')) {
            $data['buku'] = $this->Buku_model->cariDataBuku();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('buku/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Buku';
        $this->form_validation->set_rules('isbn', 'ISBN', 'required');
        $this->form_validation->set_rules('author', 'Author', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('buku/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Buku_model->tambahDataBuku();
            redirect('buku');
        }
    }

    public function hapus($id)
    {
        $this->Buku_model->hapusDataBuku($id);
        redirect('buku');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Buku';
        $data['buku'] = $this->Buku_model->getBukuById($id);

        $this->form_validation->set_rules('isbn', 'ISBN', 'required');
        $this->form_validation->set_rules('author', 'Author', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('buku/ubah');
            $this->load->view('templates/footer');
        } else {
            $this->Buku_model->ubahDataBuku();
            redirect('buku');
        }
    }
}
