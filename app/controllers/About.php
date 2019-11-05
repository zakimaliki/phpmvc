<?php 

class About extends Controller
{
	public function index($nama='zaki',$pekerjaan='Programmer',$umur='24')
	{
	$data['nama']=$nama;
	$data['pekerjaan']=$pekerjaan;
	$data['umur']=$umur;
	$data['judul']='About Me';
	$this->view('templates/header',$data);
	$this->view('about/index',$data);
	$this->view('templates/header');
	}

	public function page()
	{
	$data['judul']='Pages';
	$this->view('templates/header',$data);
	$this->view('about/page');
	$this->view('templates/header');
	}
}