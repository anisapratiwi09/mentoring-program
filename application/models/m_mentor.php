<?php

class M_mentor extends CI_Model
{
    //get
    function getContent()
    {
        $this->db->select('*');
        $this->db->from('conten');
        $query = $this->db->get();
        return $query->result();
    }

    function getMentor($id_mentor)
    {
        $this->db->select('*');
        $this->db->from('mentor');
        $this->db->where('id_mentor', $id_mentor);
        $query = $this->db->get();
        return $query->result();
    }

    function getMentor_akun($id_akun)
    {
        $this->db->select('*');
        $this->db->from('mentor');
        $this->db->where('id_akun', $id_akun);
        $query = $this->db->get();
        return $query->result();
    }

    function getMeetings($id_mentor)
    {
        $this->db->select('*');
        $this->db->from('meeting');
        $this->db->where('id_mentor', $id_mentor);
        $query = $this->db->get();
        return $query->result();
    }

    //create
    function createMeeting($dataMeetings)
    {
        $this->db->insert('meeting', $dataMeetings);
    }

    //update
    public function edit_profileinfo($id_mentor, $data)
    {
        $this->db->where('id_mentor', $id_mentor);
        $this->db->update('mentor', $data);
    }
}
