<?php
class cadmin extends CI_Controller{
public function __construct(){
parent::__construct();
$this->load->model('madmin');

$this->is_logged_in();
session_start();
}

function is_logged_in(){
$is_logged_in=$this->session->userdata('login');
if(!isset($is_logged_in) || $is_logged_in !=TRUE)
{
redirect('auth/warning');
}
}

function index_admin(){
$this->load->view('index_admin');
}





//USER
function tampil_user(){
$data['tampil_user']=$this->madmin->tampil_user();
$this->load->view('user',$data);
}

//edit
function tadit_user($username){
$data['tadit_user']=$this->madmin->tadit_user($username);
$this->load->view('tadit_user',$data); //editpetugas=tadit_user
}

function edit_user(){
if($this->input->post('username')){
$this->madmin->edit_user();
$this->tampil_user();
}
else{
$this->load->view('tadit_user');
}
}

//delete
function hapus_user(){
$username=$this->uri->segment(3);
$this->madmin->hapus_user($username);
$this->tampil_user();
}

//create
function tambah_user(){
$data['query']=$this->madmin->cek_id();
$this->load->view('tambahpetugas',$data);
}




}
?>