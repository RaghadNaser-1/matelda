<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task_model extends CI_Model {

    public function get_tasks_by_employee_id($employee_id) {
        return $this->db->get_where('tasks', array('employee_id' => $employee_id))->result();
    }

    public function add_task($data) {
        $this->db->insert('tasks', $data);
    }

    public function get_task_by_id($id) {
        return $this->db->get_where('tasks', array('id' => $id))->row();
    }

    public function update_task($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('tasks', $data);
    }

    public function delete_task($id) {
        $this->db->where('id', $id);
        $this->db->delete('tasks');
    }

    public function get_task_employee_id($id) {
        $task = $this->db->get_where('tasks', array('id' => $id))->row();
        return $task ? $task->employee_id : null;
    }
}
