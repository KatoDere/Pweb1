$('.toggle').click(function(){
    $('.Formulario').animate({
       height: "toggle",
       'padding-top': 'toggle',
       'padding-bottom': 'toggle',
       opacity: 'toggle' 
    }, "slow");
});