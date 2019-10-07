<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Option_model extends CI_Model {
    private $perPage=10;

    public function __construct()
    {
        parent::__construct();

    }


	public function delete($id,$table)
	{
		$this->db->delete($table, array('id' => $id));
	}


	public function add($table,$data=array())
	{

			$this->db->insert($table, $data);

	}

	public function edit($id,$table,$data=array())
	{
		$this->db->where('id', $id);
			$this->db->update($table, $data);

	}

	public  function getAll($table,$typeOfSearch,$search=null,$page,&$num=0)
	{

	    $paginate=$this->perPage;
	    $page=$page-(+1);
		$start=($page)*$paginate;

        if ($search!=null){
            $this->db->like($typeOfSearch, $search);
            $query = $this->db->get($table, $paginate, $start);
            $data=$query->result_array();
            $num=$this->db->count_all_results();
        }else{
            $this->db->limit($paginate,$start);
            $query = $this->db->get($table);
            $data=$query->result_array();
            $num=$this->db->count_all_results();

        }
        return $data;


	}

	public function getById($id,$table)
	{
		$query =$this->db->get_where($table, array('id' => $id));
		$data = $query->result_array();
		return $data;
	}

    public function getId($table,$username,$password)
    {
        $query =$this->db->get_where($table,array('username'=>$username,'password'=>$password));
        $data = $query->row()->id;
        return $data;
    }

}


