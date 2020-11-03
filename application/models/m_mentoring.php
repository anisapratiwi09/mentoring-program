<?php

class M_mentoring extends CI_Model
{
    //get
    function get_contractAgg($id_mentee)
    {
        $this->db->select('*');
        $this->db->from('contractagg');
        $this->db->where('id_mentee', $id_mentee);
        $query = $this->db->get();
        return $query->result();
    }

    function getPosting($id_group)
    {
        $this->db->select('*');
        $this->db->from('group_post');
        $this->db->where('id_group', $id_group);
        $query = $this->db->get();
        return $query->result();
    }

    function getComment()
    {
        $this->db->select('*');
        $this->db->from('grup_comment');
        $query = $this->db->get();
        return $query->result();
    }

    function getCareer($id_mentee)
    {
        $this->db->select('*');
        $this->db->from('career_goals');
        $this->db->where('id_mentee', $id_mentee);
        $query = $this->db->get();
        return $query->result();
    }

    function get_id_from_career($id)
    {
        $this->db->select('id_mentee');
        $this->db->from('career_goals');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function getNonCareer($id_mentee)
    {
        $this->db->select('*');
        $this->db->from('noncareer_goals');
        $this->db->where('id_mentee', $id_mentee);
        $query = $this->db->get();
        return $query->result();
    }

    function get_id_from_noncareer($id)
    {
        $this->db->select('id_mentee');
        $this->db->from('noncareer_goals');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function get_goals($id_mentee)
    {
        $this->db->select('*');
        $this->db->from('goals');
        $this->db->where('id_mentee', $id_mentee);
        $query = $this->db->get();
        return $query->result();
    }

    function getForm()
    {
        $this->db->select('*');
        $this->db->from('form');
        // $this->db->where('id_mentee', $id_mentee);
        $query = $this->db->get();
        return $query->result();
    }

    function getMentee_group($id_group)
    {
        $this->db->select('*');
        $this->db->from('mentee');
        $this->db->where('id_group', $id_group);
        $query = $this->db->get();
        return $query->result();
    }

    function get_dev($id_mentee)
    {
        $this->db->select('*');
        $this->db->from('development_plan');
        $this->db->where('id_mentee', $id_mentee);
        $query = $this->db->get();
        return $query->result();
    }

    function get_one_dev($id)
    {
        $this->db->select('*');
        $this->db->from('development_plan');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }


    // create or save
    function savePosting($data)
    {
        $this->db->insert('group_post', $data);
    }
    function saveComment($data)
    {
        $this->db->insert('grup_comment', $data);
    }
    function create_contractagg($data)
    {
        $this->db->insert('contractagg', $data);
    }

    public function create_career($data)
    {
        $this->db->insert('career_goals', $data);
    }
    public function create_noncareer($data)
    {
        $this->db->insert('noncareer_goals', $data);
    }
    public function create_goals($data)
    {
        $this->db->insert('goals', $data);
    }
    public function create_dev($data)
    {
        $this->db->insert('development_plan', $data);
    }

    //update
    public function update_contractagg($id_contractAgg, $data)
    {
        $this->db->where('id_contractAgg', $id_contractAgg);
        $this->db->update('contractagg', $data);
    }

    public function editMeeting($id_meeting, $data)
    {
        $this->db->where('id_meeting', $id_meeting);
        $this->db->update('meeting', $data);
    }

    public function edit_dev($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('development_plan', $data);
    }



    //delete
    function delete_goals($id_goals)
    {
        $this->db->where('id_goals', $id_goals);
        return $this->db->delete('goals');
    }
    function delete_career($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('career_goals');
    }
    function delete_noncareer($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('noncareer_goals');
    }
    function delete_dev($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('development_plan');
    }
}
