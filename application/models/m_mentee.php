<?php

class M_mentee extends CI_Model
{
    // get function
    function get_mentee($id_akun)
    {
        $this->db->select('*');
        $this->db->from('mentee');
        $this->db->where('id_akun', $id_akun);
        $query = $this->db->get();
        return $query->result();
    }

    function get_mentee_id($id_mentee)
    {
        $this->db->select('*');
        $this->db->from('mentee');
        $this->db->where('id_mentee', $id_mentee);
        $query = $this->db->get();
        return $query->result();
    }

    function get_summary($id_mentee)
    {
        $this->db->select('*');
        $this->db->from('summary_profile');
        $this->db->where('id_mentee', $id_mentee);
        $query = $this->db->get();
        return $query->result();
    }

    function get_interest($id_mentee)
    {
        $this->db->select('*');
        $this->db->from('interest_profile');
        $this->db->where('id_mentee', $id_mentee);
        $query = $this->db->get();
        return $query->result();
    }

    function get_education($id_mentee)
    {
        $this->db->select('*');
        $this->db->from('education_profile');
        $this->db->where('id_mentee', $id_mentee);
        $query = $this->db->get();
        return $query->result();
    }

    function getMeetings($id_mentee)
    {
        $this->db->select('*');
        $this->db->from('meeting');
        $this->db->where('id_mentee', $id_mentee);
        $query = $this->db->get();
        return $query->result();
    }

    function getContent()
    {
        $this->db->select('*');
        $this->db->from('conten');
        $query = $this->db->get();
        return $query->result();
    }

    // create function

    function create_personal()
    {
        $this->db->insert('mentee', $data_1);
    }
    function create_summary($data_2)
    {
        $this->db->insert('summary_profile', $data_2);
    }
    function create_interest($data)
    {
        $this->db->insert('interest_profile', $data);
    }
    function create_education($data)
    {
        $this->db->insert('education_profile', $data);
    }

    public function save_batch($data)
    {
        $this->db->insert_batch('career_goals', $data);
    }



    //update or edit
    public function edit_edu($id_edu, $data)
    {
        $this->db->where('id_edu', $id_edu);
        $this->db->update('education_profile', $data);
    }
    public function edit_profileinfo($id_mentee, $data)
    {
        $this->db->where('id_mentee', $id_mentee);
        $this->db->update('mentee', $data);
    }
    public function edit_career($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('career_goals', $data);
    }
    public function edit_noncareer($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('noncareer_goals', $data);
    }
    public function edit_goals($id_goals, $data)
    {
        $this->db->where('id_goals', $id_goals);
        $this->db->update('goals', $data);
    }
}
