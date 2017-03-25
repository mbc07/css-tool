// Mostra/oculta card da conta do usuário
function toggleAccountMenu() {
    $('#app-acoount-menu').fadeToggle(250);
    return;
}

// Transição do formulário de login para o formulário de redefinição de senha 
function toggleLoginResetForm() {
    $('.app-account-card-login-form').slideToggle(250);
    $('.app-account-card-reset-form').slideToggle(250);
    return;
}

// Oculta o card da conta de usuário ao clicar fora dele 
$(document).click(function (event) {
    if (!$(event.target).is('#app-acoount-menu') && // Container do card
            !$(event.target).is('#app-account-button') && // Ícone da navbar
            !$(event.target).parents("#app-acoount-menu").is("#app-acoount-menu")) // Elementos dentro do container do card 
        if ($('#app-acoount-menu').is(":visible"))
            $('#app-acoount-menu').fadeOut(250);
});
