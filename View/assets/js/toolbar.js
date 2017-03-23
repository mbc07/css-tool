// Mostra/oculta card do usuário ao clicar no botão
$(document).ready(function(){
    $("#app-account-button").click(function(){
        $("#app-acoount-menu").fadeToggle(250);
    });
});

// Transição do formulário de login para o formulário de redefinição de senha 
$(document).ready(function(){
    $("#app-account-card-reset-button").click(function(){
        $(".app-account-card-login-form").slideToggle(250);
        $(".app-account-card-reset-form").slideToggle(250);
    });
});

// Transição do formulário de redefinição de senha para o formulário de login 
$(document).ready(function(){
    $("#app-account-card-back-button").click(function(){
        $(".app-account-card-reset-form").slideToggle(250);
        $(".app-account-card-login-form").slideToggle(250);
    });
});
		  
