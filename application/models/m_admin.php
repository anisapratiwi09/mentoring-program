<?php

class m_admin extends CI_Model
{
    //get all 
    function all_group()
    {
        $this->db->select('*');
        $this->db->from('groups');
        $query = $this->db->get();
        return $query->result();
    }
    function all_mentor()
    {
        $this->db->select('*');
        $this->db->from('mentor');
        $query = $this->db->get();
        return $query->result();
    }
    function all_mentee()
    {
        $this->db->select('*');
        $this->db->from('mentee');
        $query = $this->db->get();
        return $query->result();
    }
    function all_sdm()
    {
        $this->db->select('*');
        $this->db->from('sdm');
        $query = $this->db->get();
        return $query->result();
    }
    function all_postingan()
    {
        $this->db->select('*');
        $this->db->from('conten');
        $query = $this->db->get();
        return $query->result();
    }
    function all_form()
    {
        $this->db->select('*');
        $this->db->from('form');
        $query = $this->db->get();
        return $query->result();
    }
}
