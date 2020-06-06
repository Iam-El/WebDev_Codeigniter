<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-23
 * Time: 19:10
 */

class Business_user_homepage extends CI_Controller
{

    public function index()
    {


        $data = array();
        $data["fetch_event"] = '';
        $this->load->model("model_individual_homepage");
        $data["fetch_event"] = $this->model_individual_homepage->fetch_events();
        $this->renderView($this->session->userdata(), $this->getEvents());

    }

    public function getEvents()
    {
        $data = array();
        $data["fetch_event"] = '';
        $this->load->model("model_individual_homepage");
        $data["fetch_event"] = $this->model_individual_homepage->fetch_events();
        return $data;
    }

    public function confirmEvent($arg)
    {
        $this->load->model("model_individual_homepage");



        if( $this->model_individual_homepage->fetch_data($this->session->userdata('emailId'),$arg))
        {


            $this->load->view('template/business-header', $this->session->userdata());
            $this->load->view('business-user-homepage', $this->getEvents());
            $this->load->view('template/sub-footer');

        }
        else{
            $this->model_individual_homepage->confirmEvent($arg, $this->session->userdata('emailId'));
            $this->load->view('template/business-header', $this->session->userdata());
            $this->load->view('business-user-homepage', $this->getEvents());
            $data['content'] = $this->load->view('forms/events-confirm-modal', NULL, TRUE);
            $this->load->view('template/modal', $data);
            $this->load->view('template/sub-footer');
        }





    }

    public function renderView($value, $data)
    {
//
        $this->load->view('template/business-header', $value);
        $this->load->view('business-user-homepage', $data);
        $this->load->view('template/sub-footer');


    }
}