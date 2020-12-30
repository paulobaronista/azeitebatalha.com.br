<nav class="navbar navbar-default menu">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand scrollink" href=""><img src="<?= base_url(); ?>assets/images/logo.png" alt="Batalha"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="scrollink active" href="">Produtos</a></li>
                        <li><a class="scrollink" href="">Sobre nós</a></li>
                        <li><a class="scrollink" href="">Receita</a></li>
                        <li><a class="scrollink" href="">Prêmios</a></li>
                        <li><a class="scrollink" href="">Compre aqui</a></li>
                        <li><a id="fale-conosco" class="scrollink fale-conosco" href="">Fale conosco</a></li>
                        <li class="redes"><a href=""><img class="" src="<?= base_url(); ?>assets/images/face.png" alt="Facebook"></a></li>
                        <li class="redes"><a href=""><img class="" src="<?= base_url(); ?>assets/images/insta.png" alt="Instagram"></a></li>
                        <li class="redes"><a href=""><img class="" src="<?= base_url(); ?>assets/images/youtube.png" alt="Youtube"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="container-fluid padding-off">
    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/detalhe.png" alt="detalhe">
</div>
<div class="container-fluid padding-off galeria-home">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                <div class="galeria">
                    <section class="galeria-01 slider">
                        <div>
                            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/AzeiteBatalha_Paralelo_Foto01_1000x600px.jpg" alt="">
                        </div>
                        <div>
                            <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/AzeiteBatalha_Paralelo_Foto01_1000x600px.jpg" alt="">
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>











<div id="fale-conosco" class="container-fluid padding-off contato">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center tt">
                <p>Fale com a gente e leve um dos melhores azeites do mundo para a sua mesa.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-offset-2">
                <form method="post" role="form" action="<?php echo base_url("contato") ?>">
                    <div class="group-form">
                        <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                            <input id="nome" type="text" class="nome form-control" name="nome" required="required" placeholder="NOME" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 form-group">
                            <input id="email" type="email" class="email form-control" name="email" required="required" placeholder="E-MAIL" />
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                            <textarea id="form-mensagem" class="msg form-control" rows="4" name="mss" placeholder="PEDIDO"></textarea>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 form-group">
                            <button type="submit" class="btn_enviar btn" title="enviar" name="enviar_email" value="enviar">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <p class="txt-1">SE PREFERIR, LIGUE OU MANDE UM ZAP:</p>
                <p class="txt-2">11 95628-9001</p>
                <p class="txt-1">CLIQUE <a href="">AQUI</a> E FAÇA SEU PEDIDO VIA WHATSAPP</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid padding-off">
    <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/detalhe-2.png" alt="detalhe">
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 text-center padding-off">
                <img class="img-responsive center-block" src="<?= base_url(); ?>assets/images/logo-batalha.png" alt="Batalhe">
                <p>O SABOR QUE CONQUISTOU O MUNDO.</p>
            </div>
        </div>
    </div>
</footer>
<?php
if (isset($email_enviado))
    echo $email_enviado;
?>