<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

class JobPosting_model extends CI_Model
{

    ////
    ////Constructor
    ////
    function __construct()
    {
        parent::__construct();
    }

    function JobPostingCreate($r_jobPostData)
    {

        $this->load->database();
        $this->db->insert('r_jobpost', $r_jobPostData);   


    }

    function JobPostingGetAllList()
    {

        $this->load->database();
        $query = $this->db->get('r_jobPost'); 
        return $query->result();


    }


}






