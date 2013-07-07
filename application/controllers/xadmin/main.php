<?php

class main extends crackerjack{
	
	public function __construct(){
		parent::__construct();
		if(islogin()==false){
					redirect('main');
			}
		
	}
	public function index(){

		//echo $this->session->_get('uid');

		/*$result = $this->user->information($this->session->_get('uid'));
		$acl = $this->user->acl(2);
		print_pre($acl);*/
		$this->load->template('xadmin/module',1,$data);
		
	}
	
	public function information($id = false){
	$data['edit'] = $id[0];
		if(isset($_POST['changeinfomation'])){
			unset($_POST['changeinfomation']);
			if(empty($_POST['company_name']) || empty($_POST['address'])){
			$data['message'] = "<div class='alert alert-error alert-fade'>Please enter Company name and Address.  <button type=\"button\" class=\"close fade\" data-dismiss=\"alert\">&times;</button></div>";
			}else{
				$info = array();
				foreach($_POST as $key =>$val){
					$info[$key] = r_string($val);
				}
				$result = $this->user->changeinformation($this->session->_get('uid'),$info);
				if($result==true){
				$data['message'] = "<div class='alert alert-success alert-fade'>Information is successfully changed.  <button type=\"button\" class=\"close fade\" data-dismiss=\"alert\">&times;</button></div>";
					}else{
				$data['message'] = "<div class='alert alert-error alert-fade'>Problem updating information.  <button type=\"button\" class=\"close fade\" data-dismiss=\"alert\">&times;</button></div>";
				}
			}
		}
		
		$this->load->render('xadmin/account_information',$data,array('head_','footer_'));
	}
	
	public function about_cms(){
	$this->load->render('xadmin/cms_about',$data,array('head_','footer_'));
	}

		/*
	* information function view and modify about company information
	* 
	*  E.g. Company name, Contact number, Address
	*/
	public function company_information($id = false){
		$data['edit'] = $id[0];
			if(isset($_POST['changeinfomation'])){
				unset($_POST['changeinfomation']);
				if(empty($_POST['company_name']) || empty($_POST['address'])){
				$data['message'] = "<div class='alert alert-error alert-fade'>Please enter Company name and Address.  <button type=\"button\" class=\"close fade\" data-dismiss=\"alert\">&times;</button></div>";
				}else{
					$info = array();
					foreach($_POST as $key =>$val){
						$info[$key] = r_string($val);
					}
					$result = $this->user->changeinformation($this->session->_get('uid'),$info);
					if($result==true){
					$data['message'] = "<div class='alert alert-success alert-fade'>Information is successfully changed.  <button type=\"button\" class=\"close fade\" data-dismiss=\"alert\">&times;</button></div>";
						}else{
					$data['message'] = "<div class='alert alert-error alert-fade'>Problem updating information.  <button type=\"button\" class=\"close fade\" data-dismiss=\"alert\">&times;</button></div>";
					}
				}
			}
		
		$this->load->render('xadmin/common/head_');
		$this->load->render('xadmin/company_information',$data);
		$this->load->render('xadmin/common/footer_'); 
		
	}
	
	
}