<?php

/**
 * Created by PhpStorm.
 * User: abir
 * Date: 10/29/16
 * Time: 5:08 PM
 */
class ContactController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ContactModel');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['values'] = $this->showall();
        $this->load->view('contacts/home', $data);
    }

    public function store()
    {
        $data = $this->input->post();
        $x = $this->ContactModel->ContactInsert($data);
        if ($x) {
            redirect(base_url());
        }
    }

    public function update(){
        $data = $this->input->post();
        $x = $this->ContactModel->Update($data);
        if($x == true){
            redirect(base_url());
        }
    }

    public function showall()
    {

        return $this->ContactModel->ContactShowAll();
    }

    public function delete($id)
    {
        $x = $this->ContactModel->Delete($id);
        if($x == true){
            redirect(base_url());
        }
    }
}