$("#button-whatsapp").click(function() {
  $("#button-whatsapp").toggle('scale');
  $(".whatsapp-box").toggle('scale');
});

$(".whatsapp-box-toggle").click(function() {
  $("#button-whatsapp").toggle('scale');
  $(".whatsapp-box").toggle('scale');
});

const $form = document.querySelector('#form');
const buttonSubmit = document.querySelector('#submit');
const urlDesktop = 'https://web.whatsapp.com/';
const urlMobile = 'whatsapp://';
const phone = '5527999981960'; // Se o número não existir ou for digitado errado, não irá abrir no whatsapp;


$form.addEventListener('submit', (event) => {
    event.preventDefault()
    buttonSubmit.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i>'
    buttonSubmit.disabled = true

    setTimeout(() => {
        let name = document.querySelector('#nome').value
        let lastname = document.querySelector('#produto').value
        let email = document.querySelector('#observacao').value
        let message = 'send?phone=' + phone + '&text=*Formulário de Contato*%0A%0A*Nome:*%0A' + nome + '%0A*Produto:*%0A' + produto + '%0A*E-mail:*%0A' + observacao + ''


        if (isMobile()) {
            window.open(urlMobile + message, '_blank')
        } else {
            window.open(urlDesktop + message, '_blank')
        }

        buttonSubmit.innerHTML = '<i class="fab fa-whatsapp"></i> Enviar WhatsApp'
        buttonSubmit.disabled = false

    }, 4000);

});
