<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-20
 * Time: 11:07
 */

class Register_agent extends CI_Controller
{

    public function index()
    {
        if ($this->input->post('agent')) {


            $this->form_validation->set_rules('email', 'Email', 'callback_custom_validation');
            $this->form_validation->set_rules('password', 'Password', 'required|regex_match[/^\S{0,8}$/]');
            $this->form_validation->set_rules('username', 'First Name', 'required');
            $this->form_validation->set_rules('surname', 'Last Name', 'required');
            $this->form_validation->set_rules('direction', 'Direction', 'required');
            $this->form_validation->set_rules('ciu', 'City', 'required');
            $this->form_validation->set_rules('state', 'State', 'required');
            $this->form_validation->set_rules('pin', 'Pin', 'required|regex_match[/^\d{5}(-\d{4})?$/]');



            if ($this->form_validation->run()) {

                $this->load->model("model_agent_register");

                $value = $this->model_agent_register->fetch_data();


                $data = array(
                    'typeId' => 4,
                    'roleId' => $value[0]["roleId"],
                    'emailId' => $this->input->post("email"),
                    'password' => $this->input->post("password"),
                    'firstName' => $this->input->post("username"),
                    'lastName' => $this->input->post("surname"),
                    'address' => $this->input->post("direction"),
                    'city' => $this->input->post("ciu"),
                    'state' => $this->input->post("state"),
                    'pin' => $this->input->post("pin"),

                );
                if ($this->model_agent_register->insert_data($data)) {
                    redirect(base_url() . "login");
                }
            }

        }

        $this->renderView();

    }

    public function renderView()
    {
        $this->load->view('template/header');
        $this->load->view('lean-register-page');
        $data['content'] = $this->load->view('forms/agent-register-form', NULL, TRUE);
        $this->load->view('template/modal', $data);
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

?>