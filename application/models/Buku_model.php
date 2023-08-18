<?php

class Buku_model extends CI_Model
{
    public function getAllBuku()
    {
        return $this->db->get('books')->result_array();
    }

    public function tambahDataBuku()
    {
        $data = [
            "isbn" => $this->input->post('isbn', true),
            "author" => $this->input->post('author', true),
            "title" => $this->input->post('title', true),
            "price" => $this->input->post('price', true)
        ];

        $this->db->insert('books', $data);
    }

    public function hapusDataBuku($id)
    {
        $this->db->where('isbn', $id);
        $this->db->delete('books');
    }

    public function getBukuById($id)
    {
        return $this->db->get_where('books', ['isbn' => $id])->row_array();
    }

    public function ubahDataBuku()
    {
        $data = [
            "isbn" => $this->input->post('isbn', true),
            "author" => $this->input->post('author', true),
            "title" => $this->input->post('title', true),
            "price" => $this->input->post('price', true)
        ];

        $this->db->where('isbn', $this->input->post('isbn'));
        $this->db->update('books', $data);
    }

    public function cariDataBuku()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('isbn', $keyword);
        $this->db->or_like('author', $keyword);
        $this->db->or_like('title', $keyword);
        return $this->db->get('books')->result_array();
    }
}
