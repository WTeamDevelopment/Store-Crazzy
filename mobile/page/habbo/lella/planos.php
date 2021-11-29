<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Crazzys</title>

    <link rel="stylesheet" href="/static/css/mobile/mobile.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="/static/css/mobile/media.css?<?php echo time(); ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="horizontal menupage">
            <h2> © Crazzy Store</h2>
        </div>
    </header>
    <container>
        <div class="content">
            <div class="container">
            <a href="https://api.whatsapp.com/send?phone=5522981356171" style="text-decoration: none;" target="_blank"><div class="comprovante">Comprovante de Pagamento</div></a>
                <div class="destaques">
                    <h3>
                        Lella Hotel
                        <a href="/index.php">
                            <div class="button-Vlt">
                                <i class="far fa-arrow-alt-circle-left"></i>
                            </div>
                        </a>
                    </h3>
                    <ul>
                        <li class="rosa">
                            <div class="icon-img" style="background-image: url(https://lella.com.br/website_assets/img/planorosa.gif);"></div>
                            <div class="titulo">Plano Rosa</div>
                            <div class="descricao">R$15,00.</div>
                        </li>
                        <li class="amarelo">
                            <div class="icon-img" style="background-image: url(https://lella.com.br/website_assets/img/planoamarelo.gif);"></div>
                            <div class="titulo">Plano Amarelo</div>
                            <div class="descricao">R$25,00.</div>
                        </li>
                        <li class="azul">
                            <div class="icon-img" style="background-image: url(https://lella.com.br/website_assets/img/planoazul.gif);"></div>
                            <div class="titulo">Plano Azul</div>
                            <div class="descricao">R$35,00.</div>
                        </li>
                        <li class="vermelho">
                            <div class="icon-img" style="background-image: url(https://lella.com.br/website_assets/img/planovermelho.gif);"></div>
                            <div class="titulo">Plano Vermelho</div>
                            <div class="descricao">R$50,00.</div>
                        </li>
                    </ul>
                    <div class="pagamentos" id="pagRosa">
                        <h3 style=" margin: 0; padding: 0; ">Formas de Pagamentos</h3>
                        <br>
                        <div class="fpag">
                            <h4 style=" padding-left: 20px; font-weight: 600; ">Plano Rosa</h4>
                            <ul>
                                <li onclick="window.open('https://picpay.me/sdois/15,00', '_blank')" style="background-color: #21c25e;">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -9px;left: 80px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBPf1jujvpWZujkqGYkfI7dWvY84BJhzbaBd6rppK4NCy-srZ3L-ubNiwpzBY7sDG4C-0&amp;usqp=CAU">
                                            Picpay
                                    </div>
                                </li>
                                <li id="pixpag" onclick="copy_data(copyarRosa)">
                                    <div class="fpag-titulo">
                                            Pix
                                        <span id="copyarRosa" style="position: absolute; color: transparent;">90224bbc-cac5-4b47-84db-ea6fdf15d5e3</span>
                                    </div>
                                </li>
                                <li onclick="window.open('https://api.whatsapp.com/send?phone=5522981356171&text=Ol%C3%A1%2C%20gostaria%20de%20gerar%20um%20boleto%20para%20efetuar%20a%20compra%20do%20VIP', '_blank')" style=" background-color: #898989; ">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -3px;left: 80px;" src="http://www2.proshock.com.br/wp-content/uploads/2017/01/boleto-icon.png">
                                            Boleto
                                    </div>
                                </li>
                                <li onclick="window.open('https://mpago.la/1b3JWUm', '_blank')" style=" background-color: #49aae3; ">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -7px;left: 50px;" src="https://img.icons8.com/color/452/mercado-pago.png">
                                            MercadoPago
                                    </div>
                                </li>
                                <li onclick="window.open('https://www.paypal.com/donate?business=LCVT8NNGVH2JE&currency_code=BRL&amount=15', '_blank')" style="background-color: #023161;" >
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -10px;left: 80px;" src="https://www.paypalobjects.com/webstatic/icon/pp258.png"> 
                                            Paypal
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
                                <li onclick="window.open('https://picpay.me/sdois/25,00', '_blank')" style="background-color: #21c25e;">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -9px;left: 80px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBPf1jujvpWZujkqGYkfI7dWvY84BJhzbaBd6rppK4NCy-srZ3L-ubNiwpzBY7sDG4C-0&amp;usqp=CAU">
                                            Picpay
                                    </div>
                                </li>
                                <li id="pixpag" onclick="copy_data(copyarAmarelo)">
                                    <div class="fpag-titulo">
                                            Pix
                                        <span id="copyarAmarelo" style="position: absolute; color: transparent;">90224bbc-cac5-4b47-84db-ea6fdf15d5e3</span>
                                    </div>
                                </li>
                                <li onclick="window.open('https://api.whatsapp.com/send?phone=5522981356171&text=Ol%C3%A1%2C%20gostaria%20de%20gerar%20um%20boleto%20para%20efetuar%20a%20compra%20do%20VIP', '_blank')" style=" background-color: #898989; ">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -3px;left: 80px;" src="http://www2.proshock.com.br/wp-content/uploads/2017/01/boleto-icon.png">
                                            Boleto
                                    </div>
                                </li>
                                <li onclick="window.open('https://mpago.la/26xYzP3', '_blank')" style=" background-color: #49aae3; ">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -7px;left: 50px;" src="https://img.icons8.com/color/452/mercado-pago.png">
                                            MercadoPago
                                    </div>
                                </li>
                                <li onclick="window.open('https://www.paypal.com/donate?business=LCVT8NNGVH2JE&currency_code=BRL&amount=25', '_blank')" style="background-color: #023161;" >
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -10px;left: 80px;" src="https://www.paypalobjects.com/webstatic/icon/pp258.png"> 
                                            Paypal
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
                                <li onclick="window.open('https://picpay.me/sdois/35,00', '_blank')" style="background-color: #21c25e;">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -9px;left: 80px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBPf1jujvpWZujkqGYkfI7dWvY84BJhzbaBd6rppK4NCy-srZ3L-ubNiwpzBY7sDG4C-0&amp;usqp=CAU">
                                            Picpay
                                    </div>
                                </li>
                                <li id="pixpag" onclick="copy_data(copyarAzul)">
                                    <div class="fpag-titulo">
                                            Pix
                                        <span id="copyarAzul" style="position: absolute; color: transparent;">90224bbc-cac5-4b47-84db-ea6fdf15d5e3</span>
                                    </div>
                                </li>
                                <li onclick="window.open('https://api.whatsapp.com/send?phone=5522981356171&text=Ol%C3%A1%2C%20gostaria%20de%20gerar%20um%20boleto%20para%20efetuar%20a%20compra%20do%20VIP', '_blank')" style=" background-color: #898989; ">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -3px;left: 80px;" src="http://www2.proshock.com.br/wp-content/uploads/2017/01/boleto-icon.png">
                                            Boleto
                                    </div>
                                </li>
                                <li onclick="window.open('https://mpago.la/1WtNmXA', '_blank')" style=" background-color: #49aae3; ">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -7px;left: 50px;" src="https://img.icons8.com/color/452/mercado-pago.png">
                                            MercadoPago
                                    </div>
                                </li>
                                <li onclick="window.open('https://www.paypal.com/donate?business=LCVT8NNGVH2JE&currency_code=BRL&amount=35', '_blank')" style="background-color: #023161;" >
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -10px;left: 80px;" src="https://www.paypalobjects.com/webstatic/icon/pp258.png"> 
                                            Paypal
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
                                <li onclick="window.open('https://picpay.me/sdois/50,00', '_blank')" style="background-color: #21c25e;">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -9px;left: 80px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBPf1jujvpWZujkqGYkfI7dWvY84BJhzbaBd6rppK4NCy-srZ3L-ubNiwpzBY7sDG4C-0&amp;usqp=CAU">
                                            Picpay
                                    </div>
                                </li>
                                <li id="pixpag" onclick="copy_data(copyarVermelho)">
                                    <div class="fpag-titulo">
                                            Pix
                                        <span id="copyarVermelho" style="position: absolute; color: transparent;">90224bbc-cac5-4b47-84db-ea6fdf15d5e3</span>
                                    </div>
                                </li>
                                <li onclick="window.open('https://api.whatsapp.com/send?phone=5522981356171&text=Ol%C3%A1%2C%20gostaria%20de%20gerar%20um%20boleto%20para%20efetuar%20a%20compra%20do%20VIP', '_blank')" style=" background-color: #898989; ">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -3px;left: 80px;" src="http://www2.proshock.com.br/wp-content/uploads/2017/01/boleto-icon.png">
                                            Boleto
                                    </div>
                                </li>
                                <li onclick="window.open('https://mpago.la/1LuBNbZ', '_blank')" style=" background-color: #49aae3; ">
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -7px;left: 50px;" src="https://img.icons8.com/color/452/mercado-pago.png">
                                            MercadoPago
                                    </div>
                                </li>
                                <li onclick="window.open('https://www.paypal.com/donate?business=LCVT8NNGVH2JE&currency_code=BRL&amount=50', '_blank')" style="background-color: #023161;" >
                                    <div class="fpag-titulo">
                                        <img style="position: absolute;width: 30px;top: -10px;left: 80px;" src="https://www.paypalobjects.com/webstatic/icon/pp258.png"> 
                                            Paypal
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-lado" id="rosa">
                    <h4>INFORMAÇÕES VIP — ROSA (R$15,00)</h4>
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
                    <h4>INFORMAÇÕES VIP — AMARELO (R$25,00)</h4>
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
                    <h4>INFORMAÇÕES VIP — AZUL (R$35,00)</h4>
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
                    <h4>INFORMAÇÕES VIP — VERMELHO (R$50,00)</h4>
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
                </div>
            </div>
        </div>
    </container>
    <script src="https://kit.fontawesome.com/1e268974cb.js" crossorigin="anonymous"></script>
    <script src="/static/js/mobile/jsmobile.js?<?php echo time();?>"></script>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
</body>
</html>