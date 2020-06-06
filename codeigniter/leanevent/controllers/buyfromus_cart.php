<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-25
 * Time: 21:51
 */

class Buyfromus_cart extends CI_Controller
{
    public function index($arg, $message=array())
    {

        if($arg === null){
            $arg = $this->id;
            $this->id = $arg;
        }

        $data = array();
        $data["fetch_event"] = '';
        $data["msg"] = sizeof($message) > 0 ? $message['msg'] : '';
        $this->load->model("model_buy_from_us_cart");
        $data["fetch_event"] = $this->model_buy_from_us_cart->fetch_id($arg);
        $this->renderView($data);
    }

    public function addToCart($arg)
    {

        $value = array(
            'emailId' => $this->input->post("email"),
            'quantity' => $this->input->post("quantity"),
            'eventId' => $arg
        );
        $this->load->model("model_buy_from_us_cart");
        $this->model_buy_from_us_cart->addToCart($value);
        $this->index($arg);


    }

    public function renderView($data)
    {
        $this->load->view('template/header');
        $this->load->view('lean-buy-from-us-cart', $data);
        $this->load->view('template/footer');

    }

    public function subscriber($arg)
    {
        var_dump("Came Here");

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
        $this->index($arg, $message);
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