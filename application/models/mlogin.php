<?php
class mlogin extends CI_Model{
function __construct(){
parent::__construct();
}

function tampillogin(){
$tampillogin=$this->db->query("select * from login");
}

function ceklogin(){
$username=$this->input->post('username');
$password=($this->input->post('password'));
$query=$this->db->query("select * from login where username='$username' and password='$password'");
if($query->num_rows() > 0)
{
	return $query->result();
}
else
{
	return null;
}
//echo "$password";
}

}
?>