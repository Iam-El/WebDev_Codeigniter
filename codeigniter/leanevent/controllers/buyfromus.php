<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-25
 * Time: 14:59
 */

class Buyfromus extends CI_Controller
{
    public function index($message = array())
    {

        $data = array();
        $data["fetch_event"] = '';
        $data["msg"] = sizeof($message) > 0 ? $message['msg'] : '';
        $data["fromSubscriber"] = sizeof($message) > 0 ? $message['fromSubscriber'] : false;

        $this->load->model("model_buy_from_us");
        $data["fetch_event"] = $this->model_buy_from_us->fetch_events();
        $this->renderView($data);


    }

    public function subscriber()
    {

        $message = array();
        $message['msg'] = '';
        if ($this->input->post('subscriber')) {
            $message = array();
            $message['msg'] = '';
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
        $message["fromSubscriber"] = true;
        $this->index($message);
    }


    public function renderView($value)
    {
        $this->load->view('template/header');
        $this->load->view('lean-buy-from-us', $value);
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
