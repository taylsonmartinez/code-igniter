<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produtos extends CI_Controller {

	public function index()
    {
    	//$this->output->enable_profiler(TRUE);

        $this->load->model("produtos_model");//carregando o produto model
        $produtos = $this->produtos_model->buscaTodos();

        $dados = array("produtos" => $produtos);
        
        $this->load->helper(array("currency","form"));
        $this->load->view("produtos/index.php", $dados);
    }

} 