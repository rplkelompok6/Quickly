<?php
class mpetugas extends CI_Model{

//kategori
function tampil_user(){
$tampiluser=$this->db->query("select * from login");
return $tampiluser;
}



}
?>