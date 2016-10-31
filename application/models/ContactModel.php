<?php

/**
 * Created by PhpStorm.
 * User: abir
 * Date: 10/29/16
 * Time: 5:33 PM
 */
class ContactModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function ContactInsert($val)
    {
        $data['firstname'] = $val['fname'];
        $data['lastname'] = $val['lname'];
        $data['mobile'] = $val['mobile'];
        $insert = $this->db->insert('contacts', $data);
        if ($insert) {
            return true;
        }
        else{
            return false;
        }
    }

    public function ContactShowAll()
    {
        return $this->db->get('contacts')->result();
    }
    public function Update($val){
        $data['id'] = $val['id'];
        $data['firstname'] = $val['fname'];
        $data['lastname'] = $val['lname'];
        $data['mobile'] = $val['mobile'];

        $this->db->set('firstname', $data['firstname']);
        $this->db->set('lastname', $data['lastname']);
        $this->db->set('mobile', $data['mobile']);
        $this->db->where('id', $data['id']);
        $x = $this->db->update('contacts');
        if($x){
            return true;
        }
        else{
            return false;
        }
    }
    public function Delete($id){
        $this->db->where('id', $id);
        $x = $this->db->delete('contacts');
        if($x){
            return true;
        }
        else{
            return false;
        }
    }
}