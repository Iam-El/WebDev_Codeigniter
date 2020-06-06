<?php
/**
 * Created by PhpStorm.
 * User: el
 * Date: 2019-04-23
 * Time: 22:07
 */

class Agent_edit_event extends CI_Controller
{

    public function index($arg)
    {
        $this->load->model("model_agent_edit_event");
        $data = $this->model_agent_edit_event->fetch_events($arg)[0];
        $this->renderView($this->session->userdata(), $data);

    }

    public function update($arg)
    {
        $fileName = '';
        $this->load->model("model_agent_edit_event");

        $pictureConfig = array();
        $pictureConfig['upload_path'] = './assets/image/';
        $pictureConfig['allowed_types'] = 'gif|jpg|png|jpeg';
        $pictureConfig['overwrite'] = true;
        $this->upload->initialize($pictureConfig);

        $this->form_validation->set_rules('eventName', 'Event Name', 'required');
        $this->form_validation->set_rules('eventPlace', 'Place', 'required');
        $this->form_validation->set_rules('eventDate', 'Event Date', 'required');
        $this->form_validation->set_rules('eventTime', 'Event Time', 'required');
        $this->form_validation->set_rules('eventCost', 'Event Cost', 'required');
        $this->form_validation->set_rules('message', 'Description', 'required');

        if ($this->upload->do_upload('image')) {
            $fileName = './assets/image/' . $this->upload->data('orig_name');
        }

        if ($this->form_validation->run()) {

            $this->load->model("model_agent_edit_event");
            $data = array(
                'eventName' => $this->input->post("eventName"),
                'place' => $this->input->post("eventPlace"),
                'date' => $this->input->post("eventDate"),
                'time' => $this->input->post("eventTime"),
                'cost' => $this->input->post("eventCost"),
                'eventDescription' => $this->input->post("message")
            );

            if($fileName !== ''){
                $data["image"] = $fileName;
            }

            var_dump($data);
            $this->model_agent_edit_event->update_events($data, $arg);
            redirect(base_url() . "agent_list_events");

        }
        $this->index($arg);
    }

    public function renderView($value, $data)
    {
        $this->load->view('template/agent-header', $value);
        $this->load->view('agent-edit-event', $data);
        $this->load->view('template/sub-footer');

    }

}