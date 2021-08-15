<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $data['title'] = 'Azeite Batalha';
        $data['description'] = 'Conheça o Azeite Batalha. Azeite de Oliva Brasileiro, considerado um dos melhores Azeites do mundo. Produzido no Brasil, premiado no exterior. #VerdadeiramenteExtravirgem';
        $data['keywords'] = 'Azeite, Batalha, Oliva, Brasileiro, considerado, melhores, Azeites, do mundo, Produzido, Brasil, premiado, exterior';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');

    }
    public function politicadeprivacidade()
    {
        $data['title'] = 'Azeite Batalha';
        $data['description'] = 'Conheça o Azeite Batalha. Azeite de Oliva Brasileiro, considerado um dos melhores Azeites do mundo. Produzido no Brasil, premiado no exterior. #VerdadeiramenteExtravirgem';
        $data['keywords'] = 'Azeite, Batalha, Oliva, Brasileiro, considerado, melhores, Azeites, do mundo, Produzido, Brasil, premiado, exterior';
        $menu['politicadeprivacidade'] = 'active';
        $conteudo['pagina_view'] = 'politicadeprivacidade_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
    public function politicadecookies()
    {
        $data['title'] = 'Azeite Batalha';
        $data['description'] = 'Conheça o Azeite Batalha. Azeite de Oliva Brasileiro, considerado um dos melhores Azeites do mundo. Produzido no Brasil, premiado no exterior. #VerdadeiramenteExtravirgem';
        $data['keywords'] = 'Azeite, Batalha, Oliva, Brasileiro, considerado, melhores, Azeites, do mundo, Produzido, Brasil, premiado, exterior';
        $menu['politicadecookies'] = 'active';
        $conteudo['pagina_view'] = 'politicadecookies_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
    public function blog()
    {
        $data['title'] = 'Azeite Batalha';
        $data['description'] = 'Conheça o Azeite Batalha. Azeite de Oliva Brasileiro, considerado um dos melhores Azeites do mundo. Produzido no Brasil, premiado no exterior. #VerdadeiramenteExtravirgem';
        $data['keywords'] = 'Azeite, Batalha, Oliva, Brasileiro, considerado, melhores, Azeites, do mundo, Produzido, Brasil, premiado, exterior';
        $menu['blog'] = 'active';
        $conteudo['pagina_view'] = 'blog_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function vantagens_de_temperar_sua_salada_com_azeite()
    {
        $data['title'] = 'Azeite Batalha';
        $data['description'] = 'Conheça o Azeite Batalha. Azeite de Oliva Brasileiro, considerado um dos melhores Azeites do mundo. Produzido no Brasil, premiado no exterior. #VerdadeiramenteExtravirgem';
        $data['keywords'] = 'Azeite, Batalha, Oliva, Brasileiro, considerado, melhores, Azeites, do mundo, Produzido, Brasil, premiado, exterior';
        $menu['blog'] = 'active';
        $conteudo['pagina_view'] = 'vantagens_de_temperar_sua_salada_com_azeite_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function receitas()
    {
        $data['title'] = 'Azeite Batalha';
        $data['description'] = 'Conheça o Azeite Batalha. Azeite de Oliva Brasileiro, considerado um dos melhores Azeites do mundo. Produzido no Brasil, premiado no exterior. #VerdadeiramenteExtravirgem';
        $data['keywords'] = 'Azeite, Batalha, Oliva, Brasileiro, considerado, melhores, Azeites, do mundo, Produzido, Brasil, premiado, exterior';
        $menu['receitas'] = 'active';
        $conteudo['pagina_view'] = 'receitas_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function arroz_de_frutos_do_mar()
    {
        $data['title'] = 'Azeite Batalha';
        $data['description'] = 'Conheça o Azeite Batalha. Azeite de Oliva Brasileiro, considerado um dos melhores Azeites do mundo. Produzido no Brasil, premiado no exterior. #VerdadeiramenteExtravirgem';
        $data['keywords'] = 'Azeite, Batalha, Oliva, Brasileiro, considerado, melhores, Azeites, do mundo, Produzido, Brasil, premiado, exterior';
        $menu['receitas'] = 'active';
        $conteudo['pagina_view'] = 'arroz_de_frutos_do_mar_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

}

/* Location: ./application/controllers/home.php */
