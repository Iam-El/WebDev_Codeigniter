<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-18
 * Time: 12:49
 */

class Login extends CI_Controller
{

    public function index()

    {

        $message = array();
        $message['msg'] = '';
        if ($this->input->post('login')) {
            $this->form_validation->set_rules('username', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run()) {


                $emailId = $this->input->post("username");
                $password = $this->input->post("password");


                $this->load->model("model_login");
                $data = $this->model_login->fetch_data($emailId, $password);

                if ($data) {
                    var_dump($data[0]["emailId"]);
                    $value = $this->model_login->fetch_role($emailId);


                    $this->session->set_userdata($this->model_login->get($emailId, $password)[0]);


                    if ($value[0]["roleId"] == 1) {
                        redirect(base_url() . "individual_homepage");
                    }

                    if ($value[0]["roleId"] == 2) {

                        redirect(base_url() . "business_user_homepage");

                    }

                    if ($value[0]["roleId"] == 3) {
                        redirect(base_url() . "agent_homepage");
                        // redirect(base_url() . "agent_list_events");
                    }
                } else {
                    $message['msg'] = "Username and password is not matching!!";
                }
            }

        }
        $this->renderView($message);

    }


    public function renderView($message)
    {
        $this->load->view('template/header');
        $this->load->view('lean-login-page', $message);
        $this->load->view('template/sub-footer');
    }

    public function custom_validation($str)

    {

        if ($str == '') {
            $this->form_validation->set_message('custom_validation', "Email Field is required!!");
            return FALSE;
        } else if (!preg_match("/^(.+)@([^\.].*)\.([a-z]{2,})$/i", $str)) {

            $this->form_validation->set_message('custom_validation', 'Email field is Invalid');
            return false;


        } else {
            return true;
        }
    }

}
