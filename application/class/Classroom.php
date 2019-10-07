<?php

include_once 'application/interface/PersonMethod.php';
include_once 'system/core/Model.php';
class Classroom extends Option_model implements PersonMethod
{


    private $name;
    private $date;
    private $grade;
    private $teacher_id;
    private $school_id;
    private $section;
    private $table = 'class';
    private $data = array();

    /**
     * School_clases constructor.
     * @param $name
     * @param $date
     * @param $grade
     * @param $teacher_id
     * @param $school_id
     * @param $grade
     * @param $section
     * @param array $data
     */
    public function __construct($name='', $date='', $grade='',$section='',  $teacher_id='', $school_id='',$data=array())
    {
        parent::__construct();
        $this->name = $name;
        $this->date = $date;
        $this->grade = $grade;
        $this->teacher_id = $teacher_id;
        $this->school_id = $school_id;
        $this->grade = $grade;
        $this->section = $section;
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @param mixed $grade
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * @param mixed $student_id
     */
    public function setStudentId($student_id)
    {
        $this->student_id = $student_id;
    }

    /**
     * @return mixed
     */
    public function getTeacherId()
    {
        return $this->teacher_id;
    }

    /**
     * @param mixed $teacher_id
     */
    public function setTeacherId($teacher_id)
    {
        $this->teacher_id = $teacher_id;
    }

    /**
     * @return mixed
     */
    public function getSchoolId()
    {
        return $this->school_id;
    }

    /**
     * @param mixed $school_id
     */
    public function setSchoolId($school_id)
    {
        $this->school_id = $school_id;
    }


    public function insert($data = array())
    {
        return $this->add($this->table, $data);
    }

    public function update($id, $data = array())
    {
        return $this->edit($id, $this->table, $data);
    }

    public function drop($id)
    {
        return $this->delete($id, $this->table);
    }

    public function selectAll($typeOfSearch = null, $search = null, $page, &$num = 0)
    {
        return $this->getAll($this->table, $typeOfSearch, $search, $page, $num);
    }

    public function selectById($id)
    {
        return $this->getById($id, $this->table);
    }
}
