<?php
 $useragent=$_SERVER['HTTP_USER_AGENT'];

 if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
   header('Location: /mobile/index');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Eduarda Marra | Maloma <eduardamarra.com.br>"
	
    <title>Central CrazzY | crazzys.com.br</title>

    <link rel="stylesheet" href="./static/css/default.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="/static/css/media.css?<?php echo time(); ?>">
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
            <a href="<?= $_SERVER["REQUEST_URI"]; ?>" style="text-decoration: none;"><h2> © Crazzy Store</h2></a>
            <a href="https://api.whatsapp.com/send?phone=558981326247" style="text-decoration: none;" target="_blank"><div class="comprovante">Comprovante de Pagamento</div></a>
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
            </h3>
            <ul>
                <a href="page/habbo/">
                    <li>
                        <div class="li-top" style=" background-image: url(https://images.habbo.com/habbo-web/america/pt/assets/images/app_summary_image-1200x628.85a9f5dc.png); "></div>
                        <h4>Habbos</h4>
                    </li>
                </a>
                <a href="#">
                    <li style="position: relative; filter:grayscale(1);cursor: no-drop;">
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
                <div class="slide" style="background-image: url('https://i.imgur.com/6T8fS68.png');"></div>
                <div class="destaques">
                    <h3>Destaques</h3>
                    <ul>
                        <li onclick="location.href = '/page/habbo/lella/'">
                            <div class="icon-img" style="background-image: url(https://pbs.twimg.com/profile_images/1231022503037767680/5Jnw1Rfc.png);"></div>
                            <div class="titulo">Lella Hotel</div>
                            <div class="descricao">Confira os planos.</div>
                        </li>
                        <!-- <li>
                            <div class="icon-img" style="background-image: url(http://i.imgur.com/G3wTPAC.png);"></div>
                            <div class="titulo">MTA</div>
                            <div class="descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus deserunt.</div>
                        </li>
                        <li>
                            <div class="icon-img" style="background-image: url(https://lh3.googleusercontent.com/-LzbsUYSC94c/X_NYuSgwRxI/AAAAAAAADx4/ddZdypIg_Ho5geAXWgJ3VLVo2iD3uQLywCLcBGAsYHQ/image.png);"></div>
                            <div class="titulo">Minecraft</div>
                            <div class="descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus deserunt.</div>
                        </li> -->
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