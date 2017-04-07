<?php
class crelawan extends CI_Controller{
public function __construct(){
parent::__construct();
$this->load->model('mrelawan');

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

function index_relawan(){
$this->load->view('index_relawan');
}













}
?>