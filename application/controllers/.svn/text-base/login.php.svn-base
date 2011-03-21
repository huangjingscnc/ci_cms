<?php

class Login extends Controller {

	function index()
	{
		
		$data['head'] = 'includes/login_head';
		$data['header'] = 'includes/header';
		$data['main_content'] = 'includes/login_form';
		$data['footer'] = 'includes/footer_non_home';

		$this->load->model('Pagemodel');
		$data['query'] = $this->Pagemodel->get_all();
		$data['query2'] = $this->Pagemodel->get_page($page='shop');
		$data['query3'] = $this->Pagemodel->get_all_galleries($page_ID='shop');
		$this->load->view('includes/template', $data);
	}
	
	function validate_credentials()
	{
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		
		if($query)
		{
			$data = array(
			'username' => $this->input->post('username'),
			'is_logged_in' => true
			);
			
			$this->session->set_userdata($data);
			redirect('site/members_area');
				
		}
		else
		{
			$this->index();
		}
	}


}