<?php



class User extends CI_controller
{
	function index()
	{
		
		$this->load->model('User_model');
		$users=$this->User_model->all();
		$datas=array();
		$datas['users']=$users;
		$this->load->view('list',$datas);
	}
	
	function create()
	{ 
		$this->load->model('User_model');
		$this->form_validation->set_rules("name","name" ,"required");
		$this->form_validation->set_rules("email","email" ,"required|valid_email");


		


		if ($this->form_validation->run() == false)
		{
			$this->load->view("create");
		}else
		{
			
			



			$data=array();
			$data["name"]=$this->input->post('name');
			$data["email"]=$this->input->post('email');
			
			

			$this->User_model->create($data);
			$this->session->set_flashdata('success',"record addedd succesfully");
			redirect(base_url().'index.php/user/index');

		}
	}

	function edit($userId)
	{
		$this->load->model('User_model');
           //$this->load->view('edit',$info);
		$user=$this->User_model->getUser($userId);
		$info=array();
		$info['user']=$user;

		$this->form_validation->set_rules("name","name" ,"required");
		$this->form_validation->set_rules("email","email" ,"required|valid_email");
		if ($this->form_validation->run() == false)
		{
			$this->load->view('edit',$info);
		}
		else{
			$data=array();
			$data['name']=$this->input->post('name');
			$data['email']=$this->input->post('email');
			$this->User_model->updateUser($userId,$data);
			$this->session->set_flashdata('success',"record addedd succesfully");
			redirect(base_url().'index.php/user/index');

			
		}


	}
	function delete($userId)
	{
		$this->load->model('User_model');
			//$this->User_model->getUser($userId);
			//if (empty($user))
			 //{
				//$this->session->set_flashdata('failure',"record not found");
			//redirect(base_url().'index.php/user/index');
		
		
			//}
		$this->User_model->deleteUser($userId);
		$this->session->set_flashdata('success',"record addedd succesfully");
		redirect(base_url().'index.php/user/index');
	}

}


?>