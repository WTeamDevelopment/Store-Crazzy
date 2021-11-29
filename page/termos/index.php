<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Crazzys</title>

    <link rel="stylesheet" href="/static/css/default.css?<?php echo time(); ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
</head>
<style>
    .destaques > ul > li {background: none;box-shadow: none;height: auto !important;width: 70% !important;font-size: 14px;margin: 0;display: block;color: white;padding-left: 30px;font-weight: 500;font-family: sans-serif;}
</style>
<body>
<div class="img-body"></div>
    <div id="button-whatsapp" class="btn btn-raised">
        <i class="fab fa-whatsapp icon"></i>
    </div>
    <div class="whatsapp-box">
      <div class="whatsapp-box-header">
        Formul&aacute;rio de Contato
        <span class="whatsapp-box-toggle">
          <i class="fas fa-times" style=" position: absolute; "></i>
        </span>
      </div>
      <div class="whatsapp-box-body">
        <form id="form">
          <label for="nome"><b>Nome e Sobrenome:</b></label>
          <input type="text" placeholder="Crazzy" name="nome" id="nome" required>
          <label for="produto"><b>Sservi&ccedil;o a ser contratado:</b></label>
          <input type="text" placeholder="Lella Hotel" name="produto" id="produto" required>
          <label for="observacao"><b>Observa&ccedil;&atilde;o:</b></label>
          <input type="text" placeholder="Gostaria de mais informa&ccedil;&otilde;es sobre os produt..." name="observacao" id="observacao" required>

          <button type="submit" id="submit"> <i class="fab fa-whatsapp"></i> Enviar no WhatsApp</button>
        </form>
      </div>
    </div>
    <header>
        <div class="horizontal menupage">
            <h2>
                 © Crazzy Store
            <a href="https://api.whatsapp.com/send?phone=5527999981960" style="text-decoration: none;"><div class="comprovante">Comprovante de Pagamento</div></a>
            </h2>
        </div>
        <div class="vertical menupage">
            <ul>
                <li onclick="location.href = '/index.php'"><i class="fas fa-home"></i></li>
                <li><i class="fas fa-book"></i></li>
            </ul>
        </div>
        <div class="category">
            <h3>
                Lobby
                <a href="/index.php">
                    <div class="button-Vlt">
                        <i class="far fa-arrow-alt-circle-left"></i>
                    </div>
                </a>
            </h3>
            <ul>
                <a href="/page/habbo/">
                    <li>
                        <div class="li-top" style=" background-image: url(https://images.habbo.com/habbo-web/america/pt/assets/images/app_summary_image-1200x628.85a9f5dc.png); "></div>
                        <h4>Habbos</h4>
                    </li>
                </a>
                <a href="#">
                    <li style=" position: relative; filter:grayscale(1); cursor: no-drop;">
                        <div class="li-top" style=" background-image: url(https://www.hojeemdia.com.br/polopoly_fs/1.786697!/image/image.jpg_gen/derivatives/landscape_653/image.jpg); "></div>
                        <h4>MTA</h4>
                    </li>
                </a>
                <a href="#">
                    <li style="filter:grayscale(1); cursor: no-drop;">
                        <div class="li-top" style=" background-image: url(https://sm.ign.com/ign_br/screenshot/default/minecraft-02_rhs9.jpg); "></div>
                        <h4>Minecraft</h4>
                    </li>
                </a>
            </ul>
        </div>
    </header>
    <container>
        <div class="content">
            <div class="container">
                <div class="destaques">
                    <h3>
                        TERMOS E CONDIÇÕES DE COMPRA E VENDA DE PRODUTOS </h3>
                        <ul style="font-size: 14px;margin-left: -16px;">
                        <li>Bem-vindo ao site da Crazzy. A seguir estão os termos e as condições.</li><br>
                        <li>1. Você deverá possuir mais de 18 anos para efetuar a compra, caso seja menor de 18 anos deverá pedir autorização dos seus responsáveis para a efetuação da mesma.</li><br>
                        <li>1.2 O usuário deve estar ciente que ao adquirir um dos nossos serviços, não haverá devolução do dinheiro após a entrega.</li><br>
                        <li>1.3 O usuário membro do VIP que abusar dos benefícios prejudicando o jogo de outros jogadores, será suspenso dos benefícios VIP sem a devolução do dinheiro.</li><br>
                        <li>1.4 Aqui você encontra todos os métodos oficiais para a aquisição de produtos. Não nos responsabilizaremos se caso for adquirido qualquer produto através de outros meios.</li><br>
                        <li>1.5 O prazo para entrega dos produtos é informado durante o procedimento do comprovante da compra.</li><br>
                        <li>1.6 Formas de Pagamento:</li><br>
                        <li>• Picpay</li>
                        <li>• Pix</li>
                        <li>• Boleto</li>
                        <li>• Mercado Pago</li>
                        <li>• Paypal</li><br>
                        <li>1.7 Em caso de dúvidas ou problema com alguma compra, entre em contato conosco através do Chat de Atendimento!</li><br>
                        <li>1.8 Lembrando que você só deve realizar a compra caso esteja de acordo com todos os itens acima.</li>
                    </ul>

                </div>
            </div>
        </div>
    </container>
    <script src="https://kit.fontawesome.com/1e268974cb.js" crossorigin="anonymous"></script>
    <script src="/static/js/pagamentos.js?<?php echo time();?>"></script>
    <script src="/static/js/javascript.js?<?php echo time();?>"></script>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="/static/js/mobile.js?<?php echo time(); ?>"></script>
    <script type="text/javascript" src="/static/js/whatsapp.js?<?php echo time(); ?>"></script>

</body>
</html>