<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


   include_once 'application/class/Person.php';
   include_once 'application/class/Teacher.php';
   include_once 'application/class/Parents.php';
   include_once 'application/class/Classroom.php';
   include_once 'application/class/Exam.php';

class Management extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Option_model');
        $this->load->database();
    }


    public function index()
    {

    }

    public function teacherDetails()
    {

        // $page = $this->uri->segment();
        $page = 1;
        $teacher = new Teacher();
        if (isset($_POST['nameSearch']) and isset($_POST['submitSearch']) and isset($_POST['ssn'])) {
            if ($_POST['nameSearch'] == !'') {
                $search = $this->input->post('nameSearch');

                $data = $teacher->selectAll('lname', $search, $page, $num);
            } elseif ($_POST['ssn'] == !'') {
                $search = $this->input->post('ssn');;
                $data = $teacher->selectAll('SSN', $search, $page, $num);
            }

        } else {
            $search = null;
            $data = $teacher->selectAll(null, null, $page, $num);
        }


        $this->load->view('teacher-management', array("data" => $data));
    }

    public function classDetails()
    {
        $page = 1;
        $class = new School_class();
        if (isset($_POST['nameSearch']) and isset($_POST['submitSearch'])) {
            if ($_POST['nameSearch'] == !'') {
                $search = $this->input->post('nameSearch');

                $data = $class->selectAll('name', $search, $page, $num);

            } else {
                $search = null;
                $data = $class->selectAll(null, null, $page, $num);
            }


            $this->load->view('class-management', array("data" => $data));
        }
    }

    public function parentDetails()
    {
        $page = 1;
        $parent = new Parents();
        if (isset($_POST['nameSearch']) and isset($_POST['submitSearch']) and isset($_POST['ssn'])) {
            if ($_POST['nameSearch'] == !'') {
                $search = $this->input->post('nameSearch');

                $data = $parent->selectAll('lname', $search, $page, $num);
            } elseif ($_POST['ssn'] == !'') {
                $search = $this->input->post('ssn');;
                $data = $parent->selectAll('SSN', $search, $page, $num);
            }

        } else {
            $search = null;
            $data = $parent->selectAll(null, null, $page, $num);
        }


        $this->load->view('parents-management', array("data" => $data));

    }

    public function examDetails()
    {
        $page = 1;
        $exam = new Exam();
        if (isset($_POST['nameSearch']) and isset($_POST['submitSearch']) and isset($_POST['ssn'])) {
            if ($_POST['nameSearch']==!''){
                $search=$this->input->post('nameSearch');

                $data = $exam->selectAll('lname',$search,$page,$num);
            }elseif ($_POST['ssn']==!''){
                $search=$this->input->post('ssn');;
                $data = $exam->selectAll('SSN',$search,$page,$num);
            }

        }else {
            $search = null;
            $data = $exam->selectAll(null, null, $page, $num);
        }


            $this->load->view('exam-management', array("data" => $data));
        }


}