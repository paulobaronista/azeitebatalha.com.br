<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Azeite Batalha';
        $data['description'] = 'Conheça o Azeite Batalha. Azeite de Oliva Brasileiro, considerado um dos melhores Azeites do mundo. Produzido no Brasil, premiado no exterior. #VerdadeiramenteExtravirgem';
        $data['keywords'] = 'Azeite, Batalha, Oliva, Brasileiro, considerado, melhores, Azeites, do mundo, Produzido, Brasil, premiado, exterior';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_view';

        if($this->input->post('enviar_email') == "enviar"){
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $mensagem = utf8_decode($this->input->post('mss'));
            $assunto = utf8_decode('Contato enviado pelo site www.azeitebatalha.com.br');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("contato@azeitebatalha.com.br","Azeite Batalha");
            $this->email->to('contato@azeitebatalha.com.br');
            $this->email->cc('renata@spicycomm.com.br, paulobaronista@gmail.com, site@azeitebatalha.com.br');

            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		{$nome}<br/>
                E-mail:		{$email}<br/>
                    Pedido:	{$mensagem}<br/>
                        </body></html>");

            if($this->email->send()){
                redirect('contato/obrigado');
            }else{
                redirect('contato/fail');
            }

        }

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function obrigado(){
        $data['title'] = 'Azeite Batalha';
        $data['description'] = 'Conheça o Azeite Batalha. Azeite de Oliva Brasileiro, considerado um dos melhores Azeites do mundo. Produzido no Brasil, premiado no exterior. #VerdadeiramenteExtravirgem';
        $data['keywords'] = 'Azeite, Batalha, Oliva, Brasileiro, considerado, melhores, Azeites, do mundo, Produzido, Brasil, premiado, exterior';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_sucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function fail(){
        $data['title'] = 'Azeite Batalha';
        $data['description'] = 'Conheça o Azeite Batalha. Azeite de Oliva Brasileiro, considerado um dos melhores Azeites do mundo. Produzido no Brasil, premiado no exterior. #VerdadeiramenteExtravirgem';
        $data['keywords'] = 'Azeite, Batalha, Oliva, Brasileiro, considerado, melhores, Azeites, do mundo, Produzido, Brasil, premiado, exterior';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_insucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

}

/* Location: ./application/controllers/contato.php */
