<?php
class auth extends CI_Controller{
public function __construct(){
parent::__construct();
$this->load->model('mauth');
$this->load->library('table');
$this->load->library('pagination');
}

function warning(){
echo "<script>
alert('Maaf Anda Tidak Memiliki Akses')
</script>";
$this->load->view('index');
}




//HOME
function index(){
$this->load->view('index');
}

//POSKO
function posko(){
	$this->load->view('posko');
}

function tampil_posko(){
$data['tampil_posko']=$this->mauth->tampil_posko();
$this->load->view('posko',$data);
}

//korban
function tampil_korban(){
$data['tampil_korban']=$this->mauth->tampil_korban();
$this->load->view('korban',$data);
}



}
?>