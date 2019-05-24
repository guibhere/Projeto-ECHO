<?php
class Painel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('logar_model');
        $this->load->model('perfil_model');
        $this->load->model('crime_model');
        $this->load->model('denuncia_model');
        $this->load->model('like_model');
        $this->load->model('conf');
        $this->logar_model->protege();
    }



    public function index() {
        $dados['user'] = $this->perfil_model->retorna_dados_usuario();

        $this->load->view('include/header', $dados);
        $this->load->view('painel/home', $dados);
        $this->load->view('include/footer');
    }


    public function crimes($pag = null, $par = null) {
        $dados['user'] = $this->perfil_model->retorna_dados_usuario();
        $dados['crimes'] = $this->crime_model->retorna_todos_crimes();

        $this->load->view('include/header', $dados);
       
        $this->logar_model->permit($dados);

        if($pag == null){
            $this->load->view('painel/crimes/home', $dados);  
        }


        if($pag == "inserir"){
            if($this->input->post('inserir') != null){
                $nome = $this->input->post('nome');
                $lei = $this->input->post('lei');
                $desc = $this->input->post('desc');
                $resultado = $this->crime_model->inserir($nome,$lei,$desc);
                if($resultado){
                    $this->conf->set_alertas("success|Infração inserida com sucesso!");
                }else{
                    $this->conf->set_alertas("danger|Houve um problema!");
                }
                redirect('painel/crimes');
            }
            $this->load->view('painel/crimes/inserir', $dados);  
        }


        if($pag == "alterar"){
            if($this->input->post('alterar') != null){
                $nome = $this->input->post('nome');
                $lei = $this->input->post('lei');
                $desc = $this->input->post('desc');
                $resultado = $this->crime_model->alterar($par, $nome,$lei,$desc);
                if($resultado){
                    $this->conf->set_alertas("success|Infração alterada com sucesso!");
                }else{
                    $this->conf->set_alertas("danger|Houve um problema!");
                }
                redirect('painel/crimes');
            }
            $dados['crimes'] = $this->crime_model->ver($par);
            $this->load->view('painel/crimes/alterar', $dados);
        }


        if($pag == "apagar"){
            if($this->input->post('apagar') != null){
                $resultado = $this->crime_model->apagar($par);
                if($resultado){
                    $this->conf->set_alertas("success|Infração removida com sucesso!");
                }else{
                    $this->conf->set_alertas("danger|Houve um problema!");
                }
                redirect('painel/crimes');
            }
            $dados['crimes'] = $this->crime_model->ver($par);
            $this->load->view('painel/crimes/apagar', $dados);
        }

        
        $this->load->view('include/footer');
    }


    public function denuncias($pag = null, $par = null) {
        $dados['user'] = $this->perfil_model->retorna_dados_usuario();
        $dados['crimes'] = $this->crime_model->retorna_todos_crimes();
        $dados['denuncia'] = $this->denuncia_model->retorna_denuncias_novas();

        $this->load->view('include/header', $dados);
      
        $this->logar_model->permit($dados);


        if($pag == null){
            $this->load->view('painel/denuncias/home', $dados);  
        }


        if($pag == "inserir"){
            if($this->input->post('inserir') != null){
                $crime_id = $this->input->post('crime_id');
                $cidade = $this->input->post('cidade');
                $bairro = $this->input->post('bairro');
                $rua = $this->input->post('rua');
                $numero = $this->input->post('numero');
                $desc = $this->input->post('desc');
                $data_den = $this->input->post('data');
                $ref = $this->input->post('ref');
                $resultado = $this->denuncia_model->inserir($crime_id,$cidade,$bairro,$rua,$numero,$desc,$data_den,$ref);
                if($resultado){
                    $this->conf->set_alertas("success|Infração inserida com sucesso!");
                }else{
                    $this->conf->set_alertas("danger|Houve um problema!");
                }
                redirect('painel/denuncias');
            }
            $this->load->view('painel/denuncias/inserir', $dados);  
        }

            if($pag == "apagar"){
            if($this->input->post('apagar') != null){
                $resultado = $this->denuncia_model->apagar($par);
                if($resultado){
                    $this->conf->set_alertas("success|Denuncia cancelada com sucesso!");
                }else{
                    $this->conf->set_alertas("danger|Houve um problema!");
                }
                redirect('painel/denuncias');
            }
            $dados['denuncia'] = $this->denuncia_model->ver($par);
            $this->load->view('painel/denuncias/apagar', $dados);
        }




            if($pag == "alterar"){
            if($this->input->post('alterar') != null){
                

                $resultado = $this->denuncia_model->alterar($par, '1');
                if($resultado){
                    $this->conf->set_alertas("success|Denuncia validada com sucesso!");
                }else{
                    $this->conf->set_alertas("danger|Houve um problema!");
                }
                redirect('painel/denuncias');
            }
            $dados['denuncia'] = $this->denuncia_model->ver($par);
            $this->load->view('painel/denuncias/alterar', $dados);
        }

 $this->load->view('include/footer');

    }

    public function vdenuncias($pag = null, $par = null) {
        $dados['user'] = $this->perfil_model->retorna_dados_usuario();
        $dados['crimes'] = $this->crime_model->retorna_todos_crimes();
        $dados['denuncia'] = $this->denuncia_model->retorna_denuncias_validadas();


        $this->load->view('include/header', $dados);
        

        if($pag == null){
            $this->load->view('painel/vdenuncias/home', $dados);  
        }


        if($pag == "inserir"){
            if($this->input->post('inserir') != null){
                $crime_id = $this->input->post('crime_id');
                $cidade = $this->input->post('cidade');
                $bairro = $this->input->post('bairro');
                $rua = $this->input->post('rua');
                $numero = $this->input->post('numero');
                $desc = $this->input->post('desc');
                $data_den = $this->input->post('data');
                $ref = $this->input->post('ref');
                $resultado = $this->denuncia_model->inserir($crime_id,$cidade,$bairro,$rua,$numero,$desc,$data_den,$ref);
                if($resultado){
                    $this->conf->set_alertas("success|Infração inserida com sucesso!");
                }else{
                    $this->conf->set_alertas("danger|Houve um problema!");
                }
                redirect('painel/vdenuncias');
            }
            $this->load->view('painel/vdenuncias/inserir', $dados);  
        }

            if($pag == "apagar"){
            if($this->input->post('apagar') != null){
                $resultado = $this->denuncia_model->apagar($par);
                if($resultado){
                    $this->conf->set_alertas("success|Denuncia cancelada com sucesso!");
                }else{
                    $this->conf->set_alertas("danger|Houve um problema!");
                }
                redirect('painel/vdenuncias');
            }
            $dados['denuncia'] = $this->denuncia_model->ver($par);
            $this->load->view('painel/vdenuncias/apagar', $dados);
        }




            if($pag == "alterar"){
            if($this->input->post('curtir') != null){
                $dados['denuncia'] = $this->denuncia_model->ver($par);  
                $den_id =  $dados['denuncia']->den_id;

                 $resultado = $this->like_model->inserir($den_id);
                if($resultado){
                    $this->conf->set_alertas("success|Denuncia validada com sucesso!");
                }else{
                    $this->conf->set_alertas("danger|Houve um problema!");
                }
                redirect('painel/vdenuncias');
            }
            $dados['denuncia'] = $this->denuncia_model->ver($par);
            $this->load->view('painel/vdenuncias/alterar', $dados);
        }
         $this->load->view('include/footer');



    }



    public function vcrimes($pag = null, $par = null) {
        $dados['user'] = $this->perfil_model->retorna_dados_usuario();
        $dados['crimes'] = $this->crime_model->retorna_todos_crimes();

        $this->load->view('include/header', $dados);
        

        if($pag == null){
            $this->load->view('painel/vcrimes/home', $dados);  
        }


        if($pag == "inserir"){
            if($this->input->post('inserir') != null){
                $nome = $this->input->post('nome');
                $lei = $this->input->post('lei');
                $desc = $this->input->post('desc');
                $resultado = $this->crime_model->inserir($nome,$lei,$desc);
                if($resultado){
                    $this->conf->set_alertas("success|Infração inserida com sucesso!");
                }else{
                    $this->conf->set_alertas("danger|Houve um problema!");
                }
                redirect('painel/vcrimes');
            }
            $this->load->view('painel/vcrimes/inserir', $dados);  
        }


        if($pag == "alterar"){
            if($this->input->post('alterar') != null){
                $nome = $this->input->post('nome');
                $lei = $this->input->post('lei');
                $desc = $this->input->post('desc');
                $resultado = $this->crime_model->alterar($par, $nome,$lei,$desc);
                if($resultado){
                    $this->conf->set_alertas("success|Infração alterada com sucesso!");
                }else{
                    $this->conf->set_alertas("danger|Houve um problema!");
                }
                redirect('painel/vcrimes');
            }
            $dados['crimes'] = $this->crime_model->ver($par);
            $this->load->view('painel/vcrimes/alterar', $dados);
        }


        if($pag == "apagar"){
            if($this->input->post('apagar') != null){
                $resultado = $this->crime_model->apagar($par);
                if($resultado){
                    $this->conf->set_alertas("success|Infração removida com sucesso!");
                }else{
                    $this->conf->set_alertas("danger|Houve um problema!");
                }
                redirect('painel/vcrimes');
            }
            $dados['crimes'] = $this->crime_model->ver($par);
            $this->load->view('painel/vcrimes/apagar', $dados);
        }

        
        $this->load->view('include/footer');
    }

 




}
