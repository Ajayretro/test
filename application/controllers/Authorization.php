<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authorization extends CI_Controller {

    public function login()
    {
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        if ($this->form_validation->run() == FALSE)
        {
            //Load View
            $this->load->view('logout');
        }
        else
            {
                //Get From Post
                $username = $this->input->post('username');
                $password = $this->input->post('password');

                //Validate Username & Password
                $user_id = $this->authenticate_model->login_user($username, $password);

                if($user_id){
                    $user_data = array(
                        'user_id'   => $user_id,
                        'username'  => $username,
                        'logged_in' => true
                    );

                    //Set session userdata
                    $this->session->set_userdata($user_data);

                    //Set message
                    $this->session->set_flashdata('pass_login', 'You are now logged in');
                    redirect('admin/dashboard');
                }
            }
    }



// user login in project

	public function Login()
	{
		echo "string";
		die();
	}


// user logout from project

	public function Logout()
	{
		echo "string";
		die();
	}

}
