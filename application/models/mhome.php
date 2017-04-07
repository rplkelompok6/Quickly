<?php
class mhome extends CI_Model{

function getBuku($perPage,$uri) { //to get all data in tb_book
$this->db->select('buku.buku_kode,kategori_nama,penerbit_nama,buku_judul,
buku_jumhal,buku_diskripsi,buku_pengarang,buku_tahun_terbit,stok,gambar');
$this->db->from('buku INNER JOIN kategori
ON buku.kategori_kode=kategori.kategori_kode INNER JOIN penerbit ON buku.penerbit_kode=penerbit.penerbit_kode');
$this->db->order_by('buku_kode','ASC');
$getData = $this->db->get('', $perPage, $uri);
if($getData->num_rows() > 0)
return $getData->result();
else
return null;
}

function cek_id(){
$today=$this->db->query("SELECT DATE(NOW()) AS 'sekarang'");
$query=$this->db->query("SELECT MAX(peminjam_kode) as last FROM peminjam WHERE peminjam_kode LIKE 'PM%'");
return $query;
}

function tambah_peminjam(){
$gambar=$this->upload->data();
$data=array('peminjam_kode'=>$this->input->post('peminjam_kode'),
'peminjam_nama'=>$this->input->post('peminjam_nama'),
'peminjam_alamat'=>$this->input->post('peminjam_alamat'),
'peminjam_telp'=>$this->input->post('peminjam_telp'),
'peminjam_foto'=>$gambar['file_name']);
$this->db->insert('peminjam',$data);
}

function caridata($pilih,$keyword){
$this->db->like($pilih,$keyword);
$query = $this->db->get('buku');
return $query;
}

}
?>