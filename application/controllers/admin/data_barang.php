<?php
class Data_barang extends CI_Controller{
    public function index(){
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }
    public function tambah_aksi(){
        $Judul =$this->input->post('Judul');
        $penulis =$this->input->post('penulis');
        $penerbit =$this->input->post('penerbit');
        $kategori =$this->input->post('kategori');
        $harga =$this->input->post('harga');
        $stok =$this->input->post('stok');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar=''){}else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|jfif';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gagal Upload";
            }else{
                $gambar=$this->upload->data('file_name');
            }
        }
        $data = array(
            'Judul' => $Judul,
            'penulis' => $penulis,
            'penerbit' => $penerbit,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            'gambar' => $gambar
        );

        $this->model_barang->tambah_barang($data, 't_buku');
        redirect('admin/data_barang/index');
    }
}
