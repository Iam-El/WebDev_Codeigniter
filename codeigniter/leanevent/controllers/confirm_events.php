<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-24
 * Time: 01:28
 */

class Confirm_events extends CI_Controller
{


    public function index()
    {
        $this->renderView($this->session->userdata());
    }

    public function renderView($value)
    {
        $this->load->view('template/individual-business-header',$value);
        //$this->load->view('individual_homepage');
        $data['content'] = $this->load->view('forms/events-confirm-modal', NULL, TRUE);
        $this->load->view('template/modal', $data);
        $this->load->view('template/sub-footer');

    }
}