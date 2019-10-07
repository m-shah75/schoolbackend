<?php
require './application/interface/PersonMethod.php';
include './application/class/Person.php';
class Student extends Person implements PersonMethod
{
	private $section;
	private $table='student';
	private  $data=array();

	/**
	 * Student constructor.
	 * @param $fName
	 * @param $lName
	 * @param $userName
	 * @param $password
	 * @param $address
	 * @param $email
	 * @param $birthday
	 * @param $sex
	 * @param $phone
	 * @param $religion
	 * @param $section
	 * @param array $data
	 */
	public function __construct($fName='', $lName='', $userName='', $password='', $address='', $email='', $birthday='', $sex='', $phone='', $religion='',$ssn='',$section='', $data=array())
	{
		parent::__construct($fName, $lName, $userName, $password, $address, $email, $birthday, $sex, $phone, $religion,$ssn );
		$this->section = $section;
		$this->data = $data;


	}


    public function insert($data = array())
    {
        $this->add($this->table,$data);
    }

    public function update($id, $data = array())
    {
        $this->edit($id,$this->table,$data);
    }

    public function drop($id)
    {
        $this->delete($id,$this->table);
    }

    public function selectAll($typeOfSearch=null,$search=null,$page,&$num=0)
    {
        return $this->getAll($this->table,$typeOfSearch,$search,$page,$num);
    }

    public function selectById($id)
    {
        $this->getById($id,$this->table);
    }
}
