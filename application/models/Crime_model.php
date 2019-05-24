<?php


class Crime_model extends CI_Model{
	 function __construct() {
        parent::__construct();
    }


      function retorna_todos_crimes(){
        $this->db->select('*');
        $this->db->from('crimes');
        return $this->db->get()->result();
    }

    function ver($id){
        $this->db->select('*');
        $this->db->from('crimes');
        $this->db->where('cri_id', $id);
        return $this->db->get()->result()[0];
    }

    function inserir($nome,$lei,$desc){
        $data = array(
        'nome' => $nome,
        'lei' => $lei,
        'desc' => $desc,
        );
        $this->db->insert('crimes', $data);
        return $this->db->affected_rows();
    }

    
    function alterar($id, $nome,$lei,$desc){
        $data = array(
        'nome' => $nome,
        'lei' => $lei,
        'desc' => $desc,
        );
        $this->db->where('cri_id', $id);
        $this->db->update('crimes', $data);
        return $this->db->affected_rows();
    }



    function apagar($id){
        $this->db->where('cri_id', $id);
        $this->db->delete('crimes');
        return $this->db->affected_rows();
    }



}
