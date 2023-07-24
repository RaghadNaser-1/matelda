<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {

    // public function add($employee_id) {
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         // Form validation
    //         $this->load->library('form_validation');
    //         $this->form_validation->set_rules('title', 'Title', 'required');
    //         $this->form_validation->set_rules('date', 'Date', 'required');

    //         if ($this->form_validation->run() !== FALSE) {
    //             // Valid form submission, add task to the database
    //             $this->load->model('task_model');
    //             $data = array(
    //                 'employee_id' => $employee_id,
    //                 'title' => $this->input->post('title'),
    //                 'date' => $this->input->post('date'),
    //                 'description' => $this->input->post('description')
    //             );
    //             $this->task_model->add_task($data);

    //             // Redirect to task list page after successful addition
    //             redirect('post/show/'.$employee_id);
    //         }
    //     }

    //     $this->load->view('tasks/add_task', ['employee_id' => $employee_id]);
    // }
	public function add($employee_id) {
        // Load the necessary libraries and models
        $this->load->library('form_validation');
        $this->load->model('Task_model');

        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Form validation rules
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('date', 'Date', 'required');

            if ($this->form_validation->run() !== FALSE) {
                // Valid form submission, add task to the database
                $data = array(
                    'employee_id' => $employee_id,
                    'title' => $this->input->post('title'),
                    'date' => $this->input->post('date'),
                    'description' => $this->input->post('description')
                );
                $this->Task_model->add_task($data);

                // Redirect to task list page after successful addition
                redirect('post/show/'.$employee_id);
            }
        }

        // Load the view for adding a new task
        $this->load->view('tasks/add_task', ['employee_id' => $employee_id]);
    }

	public function edit($id) {
        // Load the Task_model
        $this->load->model('Task_model');

        // Get the task data for the given task ID
        $data['task'] = $this->Task_model->get_task_by_id($id);

        if (!$data['task']) {
            // If task not found, redirect to task list page or display an error message
            redirect('post/show'); // Change the redirect URL as needed
        }

        // Load the view for editing the task details
        $this->load->view('tasks/update_task', $data);
    }
	
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Form validation
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('date', 'Date', 'required');

            if ($this->form_validation->run() !== FALSE) {
                // Valid form submission, update task in the database
                $this->load->model('task_model');
                $data = array(
                    'title' => $this->input->post('title'),
                    'date' => $this->input->post('date'),
                    'description' => $this->input->post('description')
                );
                $this->task_model->update_task($id, $data);

                // Get the employee ID for redirection
                $this->load->model('task_model');
                $employee_id = $this->task_model->get_task_employee_id($id);

                // Redirect to task list page after successful update
                redirect('post/show/'.$employee_id);
            }
        }

        // Load task data for the update form
        $this->load->model('task_model');
        $data['task'] = $this->task_model->get_task_by_id($id);

        $this->load->view('tasks/update_task', $data);
    }

    public function delete($id) {
        // Get the employee ID for redirection
        $this->load->model('task_model');
        $employee_id = $this->task_model->get_task_employee_id($id);

        // Delete task from the database
        $this->task_model->delete_task($id);

        // Redirect to task list page after successful deletion
        redirect('post/show/'.$employee_id);
    }
}
