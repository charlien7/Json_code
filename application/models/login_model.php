<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class login_model extends CI_Model
    {
     
        public function __construct()
        {
        $this->load->library('session');
        $this->load->database();
        }
       
       
        public function getLogin($username,$password)
        {
        //comprobamos que el nombre de usuario y contraseña coinciden
        $data = array(
        'email' => $username,
        'password' => $password
        );
       
        $query = $this->db->get_where('usuarios',$data);
        return $query->result_array();
        }
       
       
        public function isLogged()
        {
        //Comprobamos si existe la variable de sesión username. En caso de no existir, le impediremos el paso a la página para usuarios registrados
       
            if(isset($this->session->userdata['username']))
            {
            return TRUE;
            }
            else
            {
            return FALSE;
            }
           
        }
        function insert_user($data)
    {
        $this->db->insert('usuarios', $data); 
    }
       
       
       
        public function close()
        {
        //cerrar sesión
        return $this->session->sess_destroy();
        }
    }