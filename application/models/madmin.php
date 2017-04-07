<?php
class madmin extends CI_Model{

//select
function tampil_user(){
$tampiluser=$this->db->query("select * from login");
return $tampiluser;
}

//edit
function tadit_user($username){
$username=$this->db->where('username',$username);
$tadit_user=$this->db->get('login');
return $tadit_user;
}

function edit_user(){
$data=array('username'=>$this->input->post('username'),
'password'=>$this->input->post('password'));
$this->db->where('username',$this->input->post('username'));
$this->db->update('login',$data);
}

//delete
function hapus_user($username){
$this->db->where('username',$username);
$this->db->delete('login');
}



}
?>