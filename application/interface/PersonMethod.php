<?php


interface  PersonMethod
{
	public function insert($data=array());

	public function update($id, $data=array());


	public function drop($id);


	public function selectAll($typeOfSearch=null,$search=null,$page,&$num=0);


	public function selectById($id);



}

