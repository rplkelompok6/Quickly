<?php
class mauth extends CI_Model{

function tampil_posko(){
$tampilposko=$this->db->query("select * from posko");
return $tampilposko;
}

function tampil_korban(){
$tampilkorban=$this->db->query("select * from korban_bencana");
return $tampilkorban;
}

}
?>