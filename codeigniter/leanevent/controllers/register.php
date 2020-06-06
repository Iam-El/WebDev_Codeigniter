<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-20
 * Time: 00:04
 */

class Register extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('lean-register-page');
        $this->load->view('template/sub-footer');
    }
}
