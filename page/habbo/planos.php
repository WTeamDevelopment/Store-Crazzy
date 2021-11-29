<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Central CrazzY | crazzys.com.br</title>

    <link rel="stylesheet" href="/static/css/default.css?<?php echo time(); ?>">
    <link rel="shortcut icon" href="https://i.imgur.com/DfrDZtO.png" />

</head>
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
          <label for="produto"><b>Servi&ccedil;o a ser contratado:</b></label>
          <input type="text" placeholder="Lella Hotel" name="produto" id="produto" required>
          <label for="observacao"><b>Observa&ccedil;&atilde;o:</b></label>
          <input type="text" placeholder="Gostaria de mais informa&ccedil;&otilde;es sobre os produt..." name="observacao" id="observacao" required>

          <button type="submit" id="submit"> <i class="fab fa-whatsapp"></i> Enviar no WhatsApp</button>
        </form>
      </div>
    </div>
    <header>
        <div class="horizontal menupage">
            <h2> © Crazzy Store
            <a href="https://api.whatsapp.com/send?phone=5527999981960" style="text-decoration: none;" target="_blank"><div class="comprovante">Comprovante de Pagamento</div></a>
            </h2>
        </div>
        <div class="vertical menupage">
            <ul>
                <li><i class="fas fa-home"></i></li>
                <li onclick="location.href = '/page/termos/'"><i class="fas fa-book"></i></li>
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
                <a href="#">
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
                <div class="rights">
                <iframe src="https://discord.com/widget?id=835596608259358721&theme=dark" width="350" height="550" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                </div>
                <div class="destaques">
                    <h3>Servidores</h3>
                    <ul>
                        <li onclick="location.href = '/page/habbo/lella/'">
                            <div class="icon-img" style="background-image: url(https://pbs.twimg.com/profile_images/1231022503037767680/5Jnw1Rfc.png);"></div>
                            <div class="titulo">Lella Hotel</div>
                            <div class="descricao">Confira os planos.</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </container>
    <script src="https://kit.fontawesome.com/1e268974cb.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="/static/js/mobile.js?<?php echo time(); ?>"></script>
    <script type="text/javascript" src="/static/js/whatsapp.js?<?php echo time(); ?>"></script>

</body>
</html>