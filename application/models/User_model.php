<?php

class User_model extends CI_Model {

    private $table_admin = 'admin';

    public function check_login()
    {
        if (empty($this->session->userdata('login')))
        {
            echo 'no session login';
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function login($username, $password)
    {
        $query = $this->db->get_where($this->table_user, array('username' => $username));

        if ($query->num_rows() > 0)
        {
            $data_user = $query->row();

            if (password_verify($password, $data_user->password))
            {
                $data = $this->get_by_username($username, $data_user->level);

                if ($data)
                {    
                    $this->session->set_userdata('login', '1');
                    $this->session->set_userdata('username', $username);
                    $this->session->set_userdata('level', $data_user->level);
                    $this->session->set_userdata('nama', $data->nama);

                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }

    public function get_by_username($username, $level)
    {
        if ($level == 'admin' || $level == 'dosen')
        {
            $query = $this->db->get_where($this->table_staff, array('nip' => $username));
        }
        elseif ($level == 'mahasiswa')
        {
            $query = $this->db->get_where($this->table_mahasiswa, array('nim' => $username));
        }

        if ($query->num_rows() > 0)
        {    
            return $query->row();
        }
        else
        {
            return false;
        }
    }

    public function get_all($level)
    {
        if ($level == 'dosen')
        {
            $this->db->select('nip, nama, alamat');
            $this->db->from($this->table_staff);
            $this->db->join($this->table_user, 'user.username = staff.nip');
            $this->db->where('level', $level);
            $query = $this->db->get();
        }
        elseif ($level == 'mahasiswa')
        {
            $query = $this->db->get($this->table_mahasiswa);
        }

        if ($query->num_rows() > 0)
        {    
            return $query->result();
        }
        else
        {
            return false;
        }
    }

    public function add($data, $data_user)
    {   
        $check = $this->get_by_username($data_user['username'], $data_user['level']);
        if($check == false)
        {
            $this->db->insert($this->table_user, $data_user);
    
            if ( $data_user['level'] == 'dosen')
            {
                $this->db->insert($this->table_staff, $data);
            }
            elseif ($data_user['level'] == 'mahasiswa')
            {
                $this->db->insert($this->table_mahasiswa, $data);
            }
            return true;
        }
    }

    public function update($data, $username, $level)
    {
        if ( $level == 'dosen')
        {
            $this->db->update($this->table_staff, $data, array('nip' => $username));
        }
        elseif ($level == 'mahasiswa')
        {
            $this->db->update($this->table_mahasiswa, $data, array('nim' => $username));
        }
        return true;
    }

    public function delete($username, $level)
    {
        if ( $level == 'dosen')
        {
            $this->db->delete($this->table_staff, array('nip' => $username));
            $this->db->delete($this->table_user, array('username' => $username));
        }
        elseif ($level == 'mahasiswa')
        {
            $this->db->delete($this->table_mahasiswa, array('nim' => $username));
            $this->db->delete($this->table_user, array('username' => $username));
        }
        return true;
    }

}