<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {

        $data['daftar_list'] = $this->db->get('daftar_list')->result();
        $this->load->view('User/index', $data);
    }

    public function create()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $data = $this->input->post();

            $this->db->insert('daftar_list', $data);
            redirect('User');
        } else {
            $this->load->view('User/create');
        }
    }
    public function update($id)
    {
        if ($this->input->server('REQUEST_METHOD') == 'POST') {
            $data = $this->input->post();


            $this->db->where('id', $id);
            $this->db->update('daftar_list', $data);

            redirect('user');
        } else {
            $data['item'] = $this->db->get_where('daftar_list', ['id' => $id])->row();
            $this->load->view('User/Update', $data);
        }
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('daftar_list');

        redirect('User');
    }
}
