<?php

include_once 'application/interface/PersonMethod.php';
include_once 'system/core/Model.php';

class Exam extends  Option_model implements PersonMethod
{
    private $table='exam';
    private $examName;
    private $teacher_id;
    private $class_id;
    private $class_grade;
    private $class_section;
    private $day;
    private $time;
    private $data=array();

    /**
     * Exam constructor.
     * @param $examName
     * @param $teacher_id
     * @param $class_id
     * @param $class_grade
     * @param $class_section
     * @param $day
     * @param $time
     * @param $data
     */
    public function __construct($examName='', $teacher_id='', $class_id='', $class_grade='', $class_section='', $day='', $time='',$data=array())
    {
        parent::__construct();
        $this->examName = $examName;
        $this->teacher_id = $teacher_id;
        $this->class_id = $class_id;
        $this->class_grade = $class_grade;
        $this->class_section = $class_section;
        $this->day = $day;
        $this->time = $time;
        $this->data = $data;
    }
    /**
     * @return string
     */
    public function getExamName()
    {
        return $this->examName;
    }

    /**
     * @param string $examName
     */
    public function setExamName($examName)
    {
        $this->examName = $examName;
    }

    /**
     * @return string
     */
    public function getTeacherId()
    {
        return $this->teacher_id;
    }

    /**
     * @param string $teacher_id
     */
    public function setTeacherId($teacher_id)
    {
        $this->teacher_id = $teacher_id;
    }

    /**
     * @return string
     */
    public function getClassId()
    {
        return $this->class_id;
    }

    /**
     * @param string $class_id
     */
    public function setClassId($class_id)
    {
        $this->class_id = $class_id;
    }

    /**
     * @return string
     */
    public function getClassGrade()
    {
        return $this->class_grade;
    }

    /**
     * @param string $class_grade
     */
    public function setClassGrade($class_grade)
    {
        $this->class_grade = $class_grade;
    }

    /**
     * @return string
     */
    public function getClassSection()
    {
        return $this->class_section;
    }

    /**
     * @param string $class_section
     */
    public function setClassSection($class_section)
    {
        $this->class_section = $class_section;
    }

    /**
     * @return string
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param string $day
     */
    public function setDay($day)
    {
        $this->day = $day;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param string $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData($data)
    {
        $this->data = $data;
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