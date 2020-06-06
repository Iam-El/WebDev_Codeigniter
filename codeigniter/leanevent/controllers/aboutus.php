<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-18
 * Time: 12:33
 */

class Aboutus extends CI_Controller
{
    public function index()
    {
        $message = array();
        $message['msg'] = '';
        if ($this->input->post('subscriber')) {

            $this->form_validation->set_rules('email', 'Email', 'callback_custom_validation');

            if ($this->form_validation->run()) {
                $this->load->model("model_subscriber");
                $data = array(

                    'emailId' => $this->input->post("email"),

                );

                if ($this->model_subscriber->insert_data($data)) {
                    // redirect(base_url() . "homepage");
                    $message['msg'] = "Congratulations on your subscriptions!!";
                } else {
                    $message['msg'] = "You already have a subscription!!!!";
                }

            }
        }

        $this->renderView($message);
    }

    public function renderView($message)
    {
        $this->load->view('template/header');
        $this->load->view('lean-about-us-page', $message);
        $this->load->view('template/footer');
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


?>