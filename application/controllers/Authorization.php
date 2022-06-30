<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authorization extends CI_Controller {


    public function __construct(){

    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('Authorization_model');
    }

// user login 

    public function login()
    {
        $this->load->helper('form');


        $this->form_validation->set_rules('register_email','Email','trim|required');
        $this->form_validation->set_rules('register_password','Password','trim|required');
        if ($this->form_validation->run() == FALSE)
        {
            //Load View
            $this->load->view('logout');
        }
        else
            {
                //Get From Post
                $email = $this->input->post('register_email');
                $password = $this->input->post('register_password');



                //Convert the details in array to store in table

                $dataArray = array(

                    $data['username'] = $email;
                    $data['password'] = $password;
                    $data['created_by'] = '2';
                    $data['created'] = '2';
                );



                $user_id = $this->Authorization_model->login_user($dataArray);

        echo "string";
        echo "<pre>";
        // print_r($_POST);
        print_r($user_id);
        // print_r($password);
        die();
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

	// public function Logisn()
	// {
	// 	echo "string";
	// 	die();
	// }


// user logout from project

	public function Logout()
	{
		echo "string";
		die();
	}

}
