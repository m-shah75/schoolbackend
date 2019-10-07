<?php

include_once 'system/core/Model.php';
include_once 'application/models/Option_model.php';
class Person extends Option_model
{
	private $fName;
	private $lName;
	private $userName;
	private $password;
	private $address;
	private $email;
	private $birthday;
	private $sex;
	private $phone;
    private $religion;
    private $ssn;

    /**
     * @return mixed
     */
    public function getSsn()
    {
        return $this->ssn;
    }

    /**
     * @param mixed $ssn
     */
    public function setSsn($ssn)
    {
        $this->ssn = $ssn;
    }

	/**
	 * Person constructor.
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
     * @param $ssn
	 */
	public function __construct($fName, $lName, $userName, $password, $address, $email, $birthday, $sex, $phone, $religion,$ssn)
	{
		$this->fName = $fName;
		$this->lName = $lName;
		$this->userName = $userName;
		$this->password = $password;
		$this->address = $address;
		$this->email = $email;
		$this->birthday = $birthday;
		$this->sex = $sex;
		$this->phone = $phone;
		$this->religion = $religion;
        $this->ssn = $ssn;

    }

	/**
	 * @return mixed
	 */
	public function getFName()
	{
		return $this->fName;
	}

	/**
	 * @param mixed $fName
	 */
	public function setFName($fName)
	{
		$this->fName = $fName;
	}

	/**
	 * @return mixed
	 */
	public function getLName()
	{
		return $this->lName;
	}

	/**
	 * @param mixed $lName
	 */
	public function setLName($lName)
	{
		$this->lName = $lName;
	}

	/**
	 * @return mixed
	 */
	public function getUserName()
	{
		return $this->userName;
	}

	/**
	 * @param mixed $userName
	 */
	public function setUserName($userName)
	{
		$this->userName = $userName;
	}

	/**
	 * @return mixed
	 */
	public function getPassword()
	{
		return $this->password;
	}

	/**
	 * @param mixed $password
	 */
	public function setPassword($password)
	{
		$this->password = $password;
	}

	/**
	 * @return mixed
	 */
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * @param mixed $address
	 */
	public function setAddress($address)
	{
		$this->address = $address;
	}

	/**
	 * @return mixed
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @param mixed $email
	 */
	public function setEmail($email)
	{
		$this->email = $email;
	}

	/**
	 * @return mixed
	 */
	public function getBirthday()
	{
		return $this->birthday;
	}

	/**
	 * @param mixed $birthday
	 */
	public function setBirthday($birthday)
	{
		$this->birthday = $birthday;
	}

	/**
	 * @return mixed
	 */
	public function getSex()
	{
		return $this->sex;
	}

	/**
	 * @param mixed $sex
	 */
	public function setSex($sex)
	{
		$this->sex = $sex;
	}

	/**
	 * @return mixed
	 */
	public function getPhone()
	{
		return $this->phone;
	}

	/**
	 * @param mixed $phone
	 */
	public function setPhone($phone)
	{
		$this->phone = $phone;
	}

	/**
	 * @return mixed
	 */
	public function getReligion()
	{
		return $this->religion;
	}

	/**
	 * @param mixed $religion
	 */
	public function setReligion($religion)
	{
		$this->religion = $religion;
	}


}
