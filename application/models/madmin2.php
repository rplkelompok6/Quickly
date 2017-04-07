<?php
class madmin extends CI_Model{
function tampil_petugas(){
$tampil_petugas=$this->db->query("select * from petugas");
return $tampil_petugas;
}

function cek_id(){
$today=$this->db->query("SELECT DATE(NOW()) AS 'sekarang'");
$query=$this->db->query("SELECT MAX(petugas_kode) as last FROM petugas WHERE petugas_kode LIKE 'PT%'");
return $query;
}

function tambahpetugas(){
$data=array('petugas_kode'=>$this->input->post('petugas_kode'),
'petugas_nama'=>$this->input->post('petugas_nama'),
'username'=>$this->input->post('username'));
$data2=array('username'=>$this->input->post('username'),
'password'=>$this->input->post('password'),
'status'=>'petugas');
$this->db->insert('petugas',$data);
$this->db->insert('login',$data2);
}

function hapus_petugas($petugas_kode){
$this->db->where('petugas_kode',$petugas_kode);
$this->db->delete('petugas');
}

function tampilpetugas($petugas_kode){
$petugas_kode=$this->db->where('petugas_kode',$petugas_kode);
$tampilpetugas=$this->db->get('petugas');
return $tampilpetugas;
}

function edit_petugas(){
$data=array('petugas_kode'=>$this->input->post('petugas_kode'),
'petugas_nama'=>$this->input->post('petugas_nama'),
'username'=>$this->input->post('username'));
$this->db->where('petugas_kode',$this->input->post('petugas_kode'));
$this->db->update('petugas',$data);
}

function caridata($pilih,$keyword){
$this->db->like($pilih,$keyword);
$query = $this->db->get('petugas');
return $query;
}

}
?>