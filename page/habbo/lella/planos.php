<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Central CrazzY | crazzy.host</title>

    <link rel="stylesheet" href="/static/css/default.css?<?php echo time(); ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
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
                <a href="https://api.whatsapp.com/send?phone=5589981326247" style="text-decoration: none;" target="_blank">
                    <div class="comprovante">Comprovante de Pagamento</div>
                </a>
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
                <div class="right-lado" id="rosa">
                    <h4>INFORMAÇÕES VIP — ROSA (R$10,00)</h4>
                    <h5>Atualmente, o Plano Rosa apresenta as seguintes vantagens listadas abaixo:</h5>
                    <ul style="font-family: sans-serif;">
                        <li><i class="fas fa-arrow-right"></i> Capacidade de entrar em quartos lotados.</li>
                        <li><i class="fas fa-arrow-right"></i> Menor tempo de mute por flood.</li>
                        <li><i class="fas fa-arrow-right"></i> Adicionar até 5.000 de amigos.</li>
                        <li><i class="fas fa-arrow-right"></i> Emblema exclusivo de identificação VIP.</li>
                        <li><i class="fas fa-arrow-right"></i> Loja de Mobis exclusiva.</li>
                        <li><i class="fas fa-arrow-right"></i> Loja de Raros exclusiva.</li>
                        <li><i class="fas fa-arrow-right"></i> Loja de Emblemas exclusiva.</li>
                        <li><i class="fas fa-arrow-right"></i> Balão de fala exclusivo.</li>
                        <li><i class="fas fa-arrow-right"></i> Emblema de identificação de cada plano comprado.</li>
                        <li><i class="fas fa-arrow-right"></i> Efeito com emblema VIP (em breve)</li>
                        <li><i class="fas fa-arrow-right"></i> Mais balões de falas exclusivos (em breve)</li>
                        <br>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:tele</b> (Ativa o teletransporte).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:fastwalk</b> (Andar rápido).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:tp</b> (Teletransporte um usuário).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:poll</b> (Crie enquetes).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:spull</b> (Puxe um usuário).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:flagme</b> (Troque seu nome de usuário).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:gotroom</b> (Vá a um quarto digitando o ID).</li>
                        <br>
                        <li> Além de todos os benefícios citados acima, todos os usuários VIP ganham <b>40 diamantes</b> à cada 30 minutos online!</li>
                        <br>
                        <b style="font-size: 13px; color: white"><i class="fas fa-clipboard-check"></i> Contrate o Plano Rosa e adquira:</b>
                        <li><i class="fas fa-arrow-right"></i> 15 dias de VIP</li>
                        <li><i class="fas fa-arrow-right"></i> Serpa Rosa</li>
                        <li><i class="fas fa-arrow-right"></i> 500 diamantes</li>
                        <li><i class="fas fa-arrow-right"></i> 500 conquistas</li>
                        <li><i class="fas fa-arrow-right"></i> 30 duckets</li>
                        <li><i class="fas fa-arrow-right"></i> Emblema VIP</li>
                    </ul>
                </div>
                <div class="right-lado" id="amarelo">
                    <h4>INFORMAÇÕES VIP — AMARELO (R$20,00)</h4>
                    <h5>Atualmente, o Plano Amarelo apresenta as seguintes vantagens listadas abaixo:</h5>
                    <ul style="font-family: sans-serif;">
                        <li><i class="fas fa-arrow-right"></i> Capacidade de entrar em quartos lotados.</li>
                        <li><i class="fas fa-arrow-right"></i> Menor tempo de mute por flood.</li>
                        <li><i class="fas fa-arrow-right"></i> Adicionar até 5.000 de amigos.</li>
                        <li><i class="fas fa-arrow-right"></i> Emblema exclusivo de identificação VIP.</li>
                        <li><i class="fas fa-arrow-right"></i> Loja de Mobis exclusiva.</li>
                        <li><i class="fas fa-arrow-right"></i> Loja de Raros exclusiva.</li>
                        <li><i class="fas fa-arrow-right"></i> Loja de Emblemas exclusiva.</li>
                        <li><i class="fas fa-arrow-right"></i> Balão de fala exclusivo.</li>
                        <li><i class="fas fa-arrow-right"></i> Emblema de identificação de cada plano comprado.</li>
                        <li><i class="fas fa-arrow-right"></i> Efeito com emblema VIP (em breve)</li>
                        <li><i class="fas fa-arrow-right"></i> Mais balões de falas exclusivos (em breve)</li>
                        <br>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:tele</b> (Ativa o teletransporte).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:fastwalk</b> (Andar rápido).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:tp</b> (Teletransporte um usuário).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:poll</b> (Crie enquetes).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:spull</b> (Puxe um usuário).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:flagme</b> (Troque seu nome de usuário).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:gotroom</b> (Vá a um quarto digitando o ID).</li>
                        <br>
                        <li> Além de todos os benefícios citados acima, todos os usuários VIP ganham <b>40 diamantes</b> à cada 30 minutos online!</li>
                        <br>
                        <b style="font-size: 13px; color: white"><i class="fas fa-clipboard-check"></i> Contrate o Plano Amarelo e adquira:</b>
                        <li><i class="fas fa-arrow-right"></i> 30 dias de VIP</li>
                        <li><i class="fas fa-arrow-right"></i> Serpa Amarela</li>
                        <li><i class="fas fa-arrow-right"></i> 1000 diamantes</li>
                        <li><i class="fas fa-arrow-right"></i> 1000 conquistas</li>
                        <li><i class="fas fa-arrow-right"></i> 60 duckets</li>
                        <li><i class="fas fa-arrow-right"></i> Emblema VIP</li>
                    </ul>
                </div>
                <div class="right-lado" id="azul">
                    <h4>INFORMAÇÕES VIP — AZUL (R$30,00)</h4>
                    <h5>Atualmente, o Plano Azul apresenta as seguintes vantagens listadas abaixo:</h5>
                    <ul style="font-family: sans-serif;">
                        <li><i class="fas fa-arrow-right"></i> Capacidade de entrar em quartos lotados.</li>
                        <li><i class="fas fa-arrow-right"></i> Menor tempo de mute por flood.</li>
                        <li><i class="fas fa-arrow-right"></i> Adicionar até 5.000 de amigos.</li>
                        <li><i class="fas fa-arrow-right"></i> Emblema exclusivo de identificação VIP.</li>
                        <li><i class="fas fa-arrow-right"></i> Loja de Mobis exclusiva.</li>
                        <li><i class="fas fa-arrow-right"></i> Loja de Raros exclusiva.</li>
                        <li><i class="fas fa-arrow-right"></i> Loja de Emblemas exclusiva.</li>
                        <li><i class="fas fa-arrow-right"></i> Balão de fala exclusivo.</li>
                        <li><i class="fas fa-arrow-right"></i> Emblema de identificação de cada plano comprado.</li>
                        <li><i class="fas fa-arrow-right"></i> Efeito com emblema VIP (em breve)</li>
                        <li><i class="fas fa-arrow-right"></i> Mais balões de falas exclusivos (em breve)</li>
                        <br>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:tele</b> (Ativa o teletransporte).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:fastwalk</b> (Andar rápido).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:tp</b> (Teletransporte um usuário).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:poll</b> (Crie enquetes).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:spull</b> (Puxe um usuário).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:flagme</b> (Troque seu nome de usuário).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:gotroom</b> (Vá a um quarto digitando o ID).</li>
                        <br>
                        <li> Além de todos os benefícios citados acima, todos os usuários VIP ganham <b>40 diamantes</b> à cada 30 minutos online!</li>
                        <br>
                        <b style="font-size: 13px; color: white"><i class="fas fa-clipboard-check"></i> Contrate o Plano Azul e adquira:</b>
                        <li><i class="fas fa-arrow-right"></i> 60 dias de VIP</li>
                        <li><i class="fas fa-arrow-right"></i> Serpa Azul</li>
                        <li><i class="fas fa-arrow-right"></i> 2000 diamantes</li>
                        <li><i class="fas fa-arrow-right"></i> 2000 conquistas</li>
                        <li><i class="fas fa-arrow-right"></i> 120 duckets</li>
                        <li><i class="fas fa-arrow-right"></i> Emblema VIP</li>
                        <li><i class="fas fa-arrow-right"></i> Emblema de Rosto</li>
                    </ul>
                </div>
                <div class="right-lado" id="vermelho">
                    <h4>INFORMAÇÕES VIP — VERMELHO (R$40,00)</h4>
                    <h5>Atualmente, o Plano Vermelho apresenta as seguintes vantagens listadas abaixo:</h5>
                    <ul style="font-family: sans-serif;">
                        <li><i class="fas fa-arrow-right"></i> Capacidade de entrar em quartos lotados.</li>
                        <li><i class="fas fa-arrow-right"></i> Menor tempo de mute por flood.</li>
                        <li><i class="fas fa-arrow-right"></i> Adicionar até 5.000 de amigos.</li>
                        <li><i class="fas fa-arrow-right"></i> Emblema exclusivo de identificação VIP.</li>
                        <li><i class="fas fa-arrow-right"></i> Loja de Mobis exclusiva.</li>
                        <li><i class="fas fa-arrow-right"></i> Loja de Raros exclusiva.</li>
                        <li><i class="fas fa-arrow-right"></i> Loja de Emblemas exclusiva.</li>
                        <li><i class="fas fa-arrow-right"></i> Balão de fala exclusivo.</li>
                        <li><i class="fas fa-arrow-right"></i> Emblema de identificação de cada plano comprado.</li>
                        <li><i class="fas fa-arrow-right"></i> Efeito com emblema VIP (em breve)</li>
                        <li><i class="fas fa-arrow-right"></i> Mais balões de falas exclusivos (em breve)</li>
                        <br>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:tele</b> (Ativa o teletransporte).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:fastwalk</b> (Andar rápido).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:tp</b> (Teletransporte um usuário).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:poll</b> (Crie enquetes).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:spull</b> (Puxe um usuário).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:flagme</b> (Troque seu nome de usuário).</li>
                        <li><i class="fas fa-arrow-right"></i> Comando <b>:gotroom</b> (Vá a um quarto digitando o ID).</li>
                        <br>
                        <li> Além de todos os benefícios citados acima, todos os usuários VIP ganham <b>40 diamantes</b> à cada 30 minutos online!</li>
                        <br>
                        <b style="font-size: 13px; color: white"><i class="fas fa-clipboard-check"></i> Contrate o Plano Vermelho e adquira:</b>
                        <li><i class="fas fa-arrow-right"></i> 90 dias de VIP</li>
                        <li><i class="fas fa-arrow-right"></i> Serpa Vermelha</li>
                        <li><i class="fas fa-arrow-right"></i> 5000 diamantes</li>
                        <li><i class="fas fa-arrow-right"></i> 5000 conquistas</li>
                        <li><i class="fas fa-arrow-right"></i> 200 duckets</li>
                        <li><i class="fas fa-arrow-right"></i> Emblema VIP</li>
                        <li><i class="fas fa-arrow-right"></i> Emblema de Rosto</li>
                    </ul>
                </div>
                <div class="destaques">
                    <h3>
                        <i class="far fa-star"></i>
                        <a href="https://lella.com.br/" target="_blank" style="text-decoration: none; color: white;">Lella <span style=" font-size: 12px; font-weight: 100; color: #434981; " > » Ir para o site.</span></a></h3>
                    <ul>
                        <li class="rosa">
                            <div class="icon-img" style="background-image: url(https://lella.com.br/website_assets/img/planorosa.gif);"></div>
                            <div class="titulo">Plano Rosa</div>
                            <div class="descricao">R$10,00.</div>
                        </li>
                        <li class="amarelo">
                            <div class="icon-img" style="background-image: url(https://lella.com.br/website_assets/img/planoamarelo.gif);"></div>
                            <div class="titulo">Plano Amarelo</div>
                            <div class="descricao">R$20,00.</div>
                        </li>
                        <li class="azul">
                            <div class="icon-img" style="background-image: url(https://lella.com.br/website_assets/img/planoazul.gif);"></div>
                            <div class="titulo">Plano Azul</div>
                            <div class="descricao">R$30,00.</div>
                        </li>
                        <li class="vermelho">
                            <div class="icon-img" style="background-image: url(https://lella.com.br/website_assets/img/planovermelho.gif);"></div>
                            <div class="titulo">Plano Vermelho</div>
                            <div class="descricao">R$40,00.</div>
                        </li>
                    </ul>
                    <div class="pagamentos" id="pagRosa">
                        <h3 style=" margin: 0; padding: 0; ">Formas de Pagamentos</h3>
                        <br>
                        <div class="fpag">
                            <h4 style=" padding-left: 20px; font-weight: 600; ">Plano Rosa</h4>
                            <ul>
                                <li onclick="window.open('https://picpay.me/paulo.oliveira.silva49/10.0', '_blank')" style="background-color: #21c25e;">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -9px;left: 80px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBPf1jujvpWZujkqGYkfI7dWvY84BJhzbaBd6rppK4NCy-srZ3L-ubNiwpzBY7sDG4C-0&amp;usqp=CAU"> Picpay
                                    </div>
                                </li>
                                <li id="pixpag" onclick="copy_data(copyarRosa)">
                                    <div class="fpag-titulo">
                                        Pix
                                        <span id="copyarRosa" style="position: absolute; color: transparent;">https://nubank.com.br/pagar/8wpi7/BWA02dyhQs</span>
                                    </div>
                                </li>
                                <li onclick="window.open('https://api.whatsapp.com/send?phone=5589981326247&text=Ol%C3%A1%2C%20gostaria%20de%20gerar%20um%20boleto%20para%20efetuar%20a%20compra%20do%20VIP', '_blank')" style=" background-color: #898989; ">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -3px;left: 80px;" src="http://www2.proshock.com.br/wp-content/uploads/2017/01/boleto-icon.png"> Boleto
                                    </div>
                                </li>
                                <li onclick="window.open('https://mpago.la/1b3JWUm', '_blank')" style=" background-color: #49aae3; ">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -7px;left: 50px;" src="https://img.icons8.com/color/452/mercado-pago.png"> MercadoPago
                                    </div>
                                </li>
                                <li onclick="window.open('https://www.paypal.com/invoice/p/#LQTFM3JWWNM5U54T', '_blank')" style="background-color: #023161;">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -10px;left: 80px;" src="https://www.paypalobjects.com/webstatic/icon/pp258.png"> Paypal
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pagamentos" id="pagAmarelo">
                        <h3 style=" margin: 0; padding: 0; ">Formas de Pagamentos</h3>
                        <br>
                        <div class="fpag">
                            <h4 style=" padding-left: 20px; font-weight: 600; ">Plano Amarelo</h4>
                            <ul>
                                <li onclick="window.open('https://picpay.me/paulo.oliveira.silva49/20.0', '_blank')" style="background-color: #21c25e;">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -9px;left: 80px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBPf1jujvpWZujkqGYkfI7dWvY84BJhzbaBd6rppK4NCy-srZ3L-ubNiwpzBY7sDG4C-0&amp;usqp=CAU"> Picpay
                                    </div>
                                </li>
                                <li id="pixpag" onclick="copy_data(copyarAmarelo)">
                                    <div class="fpag-titulo">
                                        Pix
                                        <span id="copyarAmarelo" style="position: absolute; color: transparent;">https://nubank.com.br/pagar/8wpi7/cBlUpWca3k</span>
                                    </div>
                                </li>
                                <li onclick="window.open('https://api.whatsapp.com/send?phone=5589981326247&text=Ol%C3%A1%2C%20gostaria%20de%20gerar%20um%20boleto%20para%20efetuar%20a%20compra%20do%20VIP', '_blank')" style=" background-color: #898989; ">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -3px;left: 80px;" src="http://www2.proshock.com.br/wp-content/uploads/2017/01/boleto-icon.png"> Boleto
                                    </div>
                                </li>
                                <li onclick="window.open('https://mpago.la/2NeD2nz', '_blank')" style=" background-color: #49aae3; ">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -7px;left: 50px;" src="https://img.icons8.com/color/452/mercado-pago.png"> MercadoPago
                                    </div>
                                </li>
                                <li onclick="window.open('https://www.paypal.com/invoice/p/#Z8Q8VMEMS4FWC24L', '_blank')" style="background-color: #023161;">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -10px;left: 80px;" src="https://www.paypalobjects.com/webstatic/icon/pp258.png"> Paypal
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pagamentos" id="pagAzul">
                        <h3 style=" margin: 0; padding: 0; ">Formas de Pagamentos</h3>
                        <br>
                        <div class="fpag">
                            <h4 style=" padding-left: 20px; font-weight: 600; ">Plano Azul</h4>
                            <ul>
                                <li onclick="window.open(' https://picpay.me/paulo.oliveira.silva49/30.0', '_blank')" style="background-color: #21c25e;">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -9px;left: 80px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBPf1jujvpWZujkqGYkfI7dWvY84BJhzbaBd6rppK4NCy-srZ3L-ubNiwpzBY7sDG4C-0&amp;usqp=CAU"> Picpay
                                    </div>
                                </li>
                                <li id="pixpag" onclick="copy_data(copyarAzul)">
                                    <div class="fpag-titulo">
                                        Pix
                                        <span id="copyarAzul" style="position: absolute; color: transparent;">https://nubank.com.br/pagar/8wpi7/UbGcSZuFd5</span>
                                    </div>
                                </li>
                                <li onclick="window.open('https://api.whatsapp.com/send?phone=5589981326247&text=Ol%C3%A1%2C%20gostaria%20de%20gerar%20um%20boleto%20para%20efetuar%20a%20compra%20do%20VIP', '_blank')" style=" background-color: #898989; ">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -3px;left: 80px;" src="http://www2.proshock.com.br/wp-content/uploads/2017/01/boleto-icon.png"> Boleto
                                    </div>
                                </li>
                                <li onclick="window.open('https://mpago.la/2h8wWwY', '_blank')" style=" background-color: #49aae3; ">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -7px;left: 50px;" src="https://img.icons8.com/color/452/mercado-pago.png"> MercadoPago
                                    </div>
                                </li>
                                <li onclick="window.open('https://www.paypal.com/invoice/p/#Q3V4GZHZGCV5E62R', '_blank')" style="background-color: #023161;">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -10px;left: 80px;" src="https://www.paypalobjects.com/webstatic/icon/pp258.png"> Paypal
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pagamentos" id="pagVermelho">
                        <h3 style=" margin: 0; padding: 0; ">Formas de Pagamentos</h3>
                        <br>
                        <div class="fpag">
                            <h4 style=" padding-left: 20px; font-weight: 600; ">Plano Vermelho</h4>
                            <ul>
                                <li onclick="window.open('https://picpay.me/paulo.oliveira.silva49/40.0', '_blank')" style="background-color: #21c25e;">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -9px;left: 80px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBPf1jujvpWZujkqGYkfI7dWvY84BJhzbaBd6rppK4NCy-srZ3L-ubNiwpzBY7sDG4C-0&amp;usqp=CAU"> Picpay
                                    </div>
                                </li>
                                <li id="pixpag" onclick="copy_data(copyarVermelho)">
                                    <div class="fpag-titulo">
                                        Pix
                                        <span id="copyarVermelho" style="position: absolute; color: transparent;">https://nubank.com.br/pagar/8wpi7/vjb9LsNrso</span>
                                    </div>
                                </li>
                                <li onclick="window.open('https://api.whatsapp.com/send?phone=5589981326247&text=Ol%C3%A1%2C%20gostaria%20de%20gerar%20um%20boleto%20para%20efetuar%20a%20compra%20do%20VIP', '_blank')" style=" background-color: #898989; ">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -3px;left: 80px;" src="http://www2.proshock.com.br/wp-content/uploads/2017/01/boleto-icon.png"> Boleto
                                    </div>
                                </li>
                                <li onclick="window.open('https://mpago.la/18ccew5', '_blank')" style=" background-color: #49aae3; ">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -7px;left: 50px;" src="https://img.icons8.com/color/452/mercado-pago.png"> MercadoPago
                                    </div>
                                </li>
                                <li onclick="window.open('https://www.paypal.com/invoice/p/#J6LXQPYKK8AM2RSV', '_blank')" style="background-color: #023161;">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -10px;left: 80px;" src="https://www.paypalobjects.com/webstatic/icon/pp258.png"> Paypal
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
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
