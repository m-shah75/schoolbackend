<?php
require './application/interface/PersonMethod.php';
class Parents extends Person implements PersonMethod
{
	private $table='parents';
	private  $data=array();
	private $job;

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
	 * @param $job
	 * @param array $data
	 */
    public function __construct($fName='', $lName='', $userName='', $password='', $address='', $email='', $birthday='', $sex='', $phone='', $religion='',$ssn='',$job,$data=array())
    {
        parent::__construct($fName, $lName, $userName, $password, $address, $email, $birthday, $sex, $phone, $religion,$ssn );
        $this->data = $data;
        $this->job = $job;


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

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param mixed $job
     */
    public function setJob($job)
    {
        $this->job = $job;
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

    public  function getParentId($username,$password){
      return  $this->getId($this->table,$username,$password);
    }
}
