<?php
class User_model extends CI_Model {        

        public function doLogin() {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $query = $this->db->get_where('users', array('username' => $username));
                $rows = $query->num_rows();
                if($rows>0) {
                        $row = $query->row();
                        if(password_verify($password, $row->password)) {
                                //Success, set to session
                                $newdata = array(
                                        'user_id'   => $row->id,
                                        'username'  => $row->username,
                                        'email'     => $row->email,
                                        'logged_in' => TRUE
                                );

                                $this->session->set_userdata($newdata);
                                redirect('dashboard');
                        }
                        else { 
                                $this->session->set_flashdata('error_msg', 'Worng Login');
                        }
                }
                else {
                        $this->session->set_flashdata('error_msg', 'Worng Login');
                }
        }

       
}