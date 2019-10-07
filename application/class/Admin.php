<?php
require './application/interface/PersonMethod.php';
include './application/class/Person.php';

class Admin extends Person implements PersonMethod
{
	private $table='admin';
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
	 * @param array $data
	 */
    public function __construct($fName='', $lName='', $userName='', $password='', $address='', $email='', $birthday='', $sex='', $phone='', $religion='',$ssn,$data=array())
    {
        parent::__construct($fName, $lName, $userName, $password, $address, $email, $birthday, $sex, $phone, $religion,$ssn );
        $this->data = $data;


    }



    public function insert($data = array())
    {
        return $this->add($this->table,$data);
    }

    public function update($id, $data = array())
    {
        return $this->edit($id,$this->table,$data);
    }

    public function drop($id)
    {
        return $this->delete($id,$this->table);
    }

    public function selectAll($typeOfSearch=null,$search=null,$page,&$num=0)
    {
        return $this->getAll($this->table,$typeOfSearch,$search,$page,$num);
    }

    public function selectById($id)
    {
        return $this->getById($id,$this->table);
    }
}
