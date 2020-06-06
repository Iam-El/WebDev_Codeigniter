<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-18
 * Time: 21:33
 */

class ContactUs extends CI_Controller
{

    public function index()
    {

        if ($this->input->post('contact-us')) {

            $this->form_validation->set_rules('username', 'FirstName', 'required');
            $this->form_validation->set_rules('surname', 'LastName', 'required');
            $this->form_validation->set_rules('email', 'Email', 'callback_custom_validation');
            $this->form_validation->set_rules('topic', 'Topic', 'required');
            $this->form_validation->set_rules('message', 'Message', 'required');

            if ($this->form_validation->run()) {
                $this->load->model("model_contactus");
                $data = array(
                    'firstName' => $this->input->post("username"),
                    'lastName' => $this->input->post("surname"),
                    'emailId' => $this->input->post("email"),
                    'topic' => $this->input->post("topic"),
                    'message' => $this->input->post("message")
                );

                $this->model_contactus->insert_data($data);
                redirect(base_url() . "contactUs");

            }
        }

        $this->renderView();
    }

    public function renderView()
    {
        $this->load->view('template/header');
        $this->load->view('lean-contact-us');
        $this->load->view('template/sub-footer');
    }

    public function custom_validation($str)

    {

        if ($str == '') {
            $this->form_validation->set_message('custom_validation', "Email Field is required.");
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