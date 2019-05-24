<?php


class Like_model extends CI_Model{
	 function __construct() {
        parent::__construct();
    }


      function retorna_todos_likes(){
        $this->db->select('*');
        $this->db->from('likes');
        $this->db->join('denuncia','den_id = den_id','left');
        $this->db->join('usuario','pessoa_id = id','left');
        return $this->db->get()->result();
    }

    function ver($id){
        $this->db->select('*');
        $this->db->from('likes');
        $this->db->join('denuncia','den_id = den_id','left');
        $this->db->join('usuario','pessoa_id = id','left');
        $this->db->where('cri_id', $id);
        return $this->db->get()->result()[0];
    }


    function inserir($den_id){
        $data = array(
        'den_id' => $den_id,
        'pessoa_id' => $this->session->userdata['id'],

        );

        
        $where = array('pessoa_id ' => $data['pessoa_id'] , 'den_id ' => $data['den_id']);
        $this->db->select('*');
        $this->db->from('likes');
        $this->db->where($where);
        $resultado = $this->db->get()->result() ;
        echo "$resultado";
       

        if(!$resultado){


       
        $this->db->insert('likes', $data);
        return $this->db->affected_rows();
    }

    return null;
    }



}