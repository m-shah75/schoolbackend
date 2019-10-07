<?php
session_start();


class Parents_controller extends CI_Controller
{



    /**
     * Parents_controller constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function childDetails()
    {
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $parent = new Parents();
        $id = $parent->getParentId($username, $password);
        $student = new Student();
        $data=$student->selectById($id);
        $this->load->view('childDetails',array('data'=>$data));
    }
}