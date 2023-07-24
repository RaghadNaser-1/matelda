<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *  Post Controller
 */
class Post extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('crud');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['data'] = $this->crud->get_records('employees');
		$this->load->view('post/list', $data);
	}


	public function create()
	{
		$this->load->view('post/create');
	}


	public function store()
	{
		$data['name'] = $this->input->post('name');
		$data['phone'] = $this->input->post('phone');
		$data['address'] = $this->input->post('address');


		$this->crud->insert('employees', $data);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been saved successfully.</div>');
		redirect(base_url());
	}

	public function edit($id)
	{
		$data['data'] = $this->crud->find_record_by_id('employees', $id);
		$this->load->view('post/edit', $data);
	}

	public function update($id)
	{
		$data['name'] = $this->input->post('name');
		$data['phone'] = $this->input->post('phone');
		$data['address'] = $this->input->post('address');


		$this->crud->update('employees', $data, $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been updated successfully.</div>');
		redirect(base_url());
	}

	public function delete($id)
	{
		$this->crud->delete('employees', $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been deleted successfully.</div>');
		redirect(base_url());
	}

// 	public function show($id)
//   {
//     $data['project'] = $this->crud->find_record_by_id('employees', $id);
//     $this->load->view('post/show', $data);
//   }

public function show($employee_id)
{
	// Load the Employee_model and Task_model
	$this->load->model('Employee_model');
	$this->load->model('Task_model');

	// Get the employee data from the model based on the provided employee_id
	$employee = $this->Employee_model->get_employee_by_id($employee_id);

	if (!$employee) {
		// If the employee doesn't exist, show an error or redirect to a 404 page.
		// For example, you can use the built-in CI show_404() function:
		show_404();
	}

	// Get the tasks for the employee using the Task_model
	$tasks = $this->Task_model->get_tasks_by_employee_id($employee_id);

	// Load the view and pass the employee and tasks data
	$data['employee'] = $employee;
	$data['tasks'] = $tasks;
	$this->load->view('post/show', $data);
}

}
