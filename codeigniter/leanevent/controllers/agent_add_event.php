<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-22
 * Time: 16:30
 */

class Agent_add_event extends CI_Controller
{

    public function index()
    {

        if ($this->input->post('add')) {
            $pictureConfig = array();
            $pictureConfig['upload_path'] = './assets/image/';
            $pictureConfig['allowed_types'] = 'gif|jpg|png|jpeg';
            $this->upload->initialize($pictureConfig);

            $this->form_validation->set_rules('eventName', 'Event Name', 'required');
            $this->form_validation->set_rules('eventPlace', 'Place', 'required');
            $this->form_validation->set_rules('eventDate', 'Event Date', 'required');
            $this->form_validation->set_rules('eventTime', 'Event Time', 'required');
            $this->form_validation->set_rules('eventCost', 'Event Cost', 'required');
            $this->form_validation->set_rules('message', 'Description', 'required');

            if (!$this->upload->do_upload('image')) {
//                var_dump($this->upload->display_errors());
                $this->form_validation->set_rules('image', 'Image', 'required');
            }

            if ($this->form_validation->run()) {
                $fileName = './assets/image/' . $this->upload->data('orig_name');
                $this->load->model("model_add_event");
                $data = array(
                    'eventName' => $this->input->post("eventName"),
                    'createdBy'=>$this->session->userdata('emailId'),
                    'image' => $fileName,
                    'place' => $this->input->post("eventPlace"),
                    'date' => $this->input->post("eventDate"),
                    'time' => $this->input->post("eventTime"),
                    'cost' => $this->input->post("eventCost"),
                    'eventDescription' => $this->input->post("message")
                );
                $this->model_add_event->insert_data($data);
                var_dump("here");
                redirect(base_url() . "agent_list_events");
            }
        }


        $this->renderView($this->session->userdata());
    }


    public function renderView($data)
    {
        $this->load->view('template/agent-header', $data);
        $this->load->view('agent-add-event', $data);
        $this->load->view('template/sub-footer');

    }

    public function editrenderView($data)
    {
        $this->load->view('template/agent-header', $data);
        $this->load->view('agent-edit-event');
        $this->load->view('template/sub-footer');

    }
}