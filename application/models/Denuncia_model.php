<?php

class Denuncia_model extends CI_Model{
	 function __construct() {
        parent::__construct();
    }


      function retorna_todas_denuncias(){
        $this->db->select('usuario.nome as n2 , crimes.nome as n1 , den_id,denuncia.cidade,denuncia.bairro,denuncia.rua,denuncia.numero,denuncia.desc,ref,data,likes');
        $this->db->from('denuncia');
        $this->db->join('crimes','crime_id = cri_id','left');
        $this->db->join('usuario','pessoa_id = id','left');
        return $this->db->get()->result();
    }

      function retorna_denuncias_novas(){
        $this->db->select('usuario.nome as n2 , crimes.nome as n1 , den_id,denuncia.cidade,denuncia.bairro,denuncia.rua,denuncia.numero,denuncia.desc,ref,data,likes');
        $this->db->from('denuncia');
        $this->db->join('crimes','crime_id = cri_id','left');
        $this->db->join('usuario','pessoa_id = id','left');
        $this->db->where('status','0');
        return $this->db->get()->result();
    }


      function retorna_denuncias_validadas(){
        $this->db->select('usuario.nome as n2 , crimes.nome as n1 , den_id,denuncia.cidade,denuncia.bairro,denuncia.rua,denuncia.numero,denuncia.desc,ref,data,likes');
        $this->db->from('denuncia');
        $this->db->join('crimes','crime_id = cri_id','left');
        $this->db->join('usuario','pessoa_id = id','left');
        $this->db->where('status', '1');
        return $this->db->get()->result();
    }


        function ver($id){
        $this->db->select('usuario.nome as n2 , crimes.nome as n1 , den_id,denuncia.cidade,denuncia.bairro,denuncia.rua,denuncia.numero,denuncia.desc,ref,data,status');
        $this->db->from('denuncia');
        $this->db->join('crimes','crime_id = cri_id','left');
        $this->db->join('usuario','pessoa_id = id','left');
        $this->db->where('den_id', $id);
        return $this->db->get()->result()[0];
    }


        function inserir($crime_id,$cidade,$bairro,$rua,$numero,$desc,$data_den,$ref){
        $data = array(
        'crime_id' => $crime_id,
        'pessoa_id' => $this->session->userdata['id'],
        'cidade' => $cidade,
        'bairro' => $bairro,
        'rua' => $rua,
        'numero' => $numero,
        'ref' => $ref,
        'desc' => $desc,
        'data' => $data_den,
        );
        $this->db->insert('denuncia', $data);
        return $this->db->affected_rows();
    }


        function apagar($id){
        $this->db->where('den_id', $id);
        $this->db->delete('denuncia');
        return $this->db->affected_rows();
    }



        function alterar($id){

        $this->db->set('status','1');
        $this->db->where('den_id', $id);
        $this->db->update('denuncia');
        
        
        return $this->db->affected_rows();
    }


}