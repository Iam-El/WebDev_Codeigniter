<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-22
 * Time: 16:18
 */

class Agent_homepage extends CI_Controller
{

    public function index()
    {


        $this->renderView($this->session->userdata('emailId'));
    }


    public function logout()
    {
        $this->session->unset_userdata('email');
        redirect(base_url() . "login");
    }

    public function renderView($data)
    {
//        var_dump($data);
        $this->load->view('template/agent-header', $this->session->userdata());
        $this->load->view('agent-user-homepage');
        $this->load->view('template/sub-footer');
    }

}