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


        $this->form_validation->set_rules('register_email', 'Email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('register_password','Password','trim|required|xss_clean');
        // $this->form_validation->set_rules('checkbox_remember','Rememebr Me','trim|required|xss_clean');  // Just 
        if ($this->form_validation->run() == FALSE)
        {
            //Load View
            $this->load->view('register');
        }
        else
            {


// echo "<pre>";
// print_r($_POST);
// die();
                //Get From Post
                $email = $this->input->post('register_email');
                $password = $this->input->post('register_password');

                //Convert the details in array to store in table

                $curdate = date("Y-m-d h:i:s");


                $Array = array(

                    $data['email'] = $email,
                    $data['password'] = $password,
                    $data['created'] = $curdate,
                    $data['updated'] = $curdate,
                );


                // $user_id = $this->Authorization_model->login_user('register', $data);
                $user_id = '1';


// for check that entery is done or not

                if (!empty($user_id)) {

                echo '<script>alert("Detail Added Successfully")</script>'; 
                        redirect('home');

                } else {

                echo '<script>alert("Details is added yet")</script>'; 
                        redirect('register');
                }


                }
            }
    }


