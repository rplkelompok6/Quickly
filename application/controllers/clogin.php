<?php
class clogin extends CI_Controller{
function __construct(){
parent::__construct();
$this->load->model('mlogin');
$this->load->library('session');
session_start();
}

function index(){
$this->load->view('index');
}

function login(){
$this->load->view('login');
}

function tampillogin($email){
$data['tampillogin']=$this->mlogin->tampillogin($email);
$this->load->view('hal_admin',$data);
}

function user(){
$data['tampillogin']=$this->mlogin->ceklogin();
if($data['tampillogin']==null)
{
echo "<script>
		alert('username/password anda salah')
		</script>";
		$this->load->view('index',$data);
}
else{
$data['username']=$this->input->post('username');
$data['password']=$this->input->post('password');
foreach($data['tampillogin'] as $row)
{
	$data['hak_akses']=$row->hak_akses;
}
	$newdata=array('username'=>$data['username'],
	'password'=>$data['password'],
	'hak_akses'=>$data['hak_akses'],
	'login'=>TRUE);
$this->session->set_userdata($newdata);

if($data['hak_akses']=='admin')
{
	redirect('cadmin/index_admin');
}
elseif($data['hak_akses']=='relawan')
{
	redirect('crelawan/index_relawan');
}
}
}

function logout(){
$this->session->sess_destroy();
echo "<script>
alert('Anda Sudah Log Out')
</script>";
$this->index();
}

}
?>