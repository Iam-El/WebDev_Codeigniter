<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-26
 * Time: 22:55
 */

class business_user_profile extends CI_Controller
{

    public function index()
    {
        $this->renderView($this->session->userdata());
    }

    public function update()
    {
        $fileName = '';
        $pictureConfig = array();
        $pictureConfig['upload_path'] = './assets/image/';
        $pictureConfig['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->upload->initialize($pictureConfig);

        $this->form_validation->set_rules('phone', 'Phone', 'required|regex_match[/^\d{3}-\d{3}-\d{4}$/]');
        $this->form_validation->set_rules('password', 'Password', 'required|regex_match[/^\S{0,8}$/]');

        if ($this->upload->do_upload('userImage')) {
            $fileName = './assets/image/' . $this->upload->data('orig_name');

        } else {
            //  var_dump($this->upload->display_errors());
        }

        if ($this->form_validation->run()) {

            $this->load->model("model_profile_update");


            $data = array(
                'phone' => $this->input->post("phone"),
                'password' => $this->input->post("password"),
            );
            if ($fileName !== '') {
                $data['userImage'] = $fileName;
            }

            $emailId = $this->session->userdata('emailId');

            $this->model_profile_update->update_events($data, $emailId);
            $data = $this->model_profile_update->get($emailId)[0];
            $this->renderView($data);
        } else {
            $this->index();
        }
    }


    public function renderView($value)
    {

        $this->load->view('template/business-header', $value);
        $this->load->view('business-user-profile', $value);
        $this->load->view('template/sub-footer');


    }

}