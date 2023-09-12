
require_once("../Models/Jugador.php")
    
    $(document).on("submit", "form_register", function(event){
        event.preventDefault();
        var $form=$(this);
    var dataForm={

        nombre:$('registerName', $form).val(),
        email:$('registerEmail', $form).val(),
        fechaNacimiento:$('registerDate', $form).val(),
        avatar:$('registerAvatar', $form).val(),
        nivel:$('registerNivel', $form).val(),
        username:$('registerUsername', $form).val(),
        password:$('registerPassword', $form).val()
    }

})

$.ajax({
    type:'POST',
    url: 'login.php',
    data:data_from,
    dataType: 'json',
    async: true,
})
.done(function(res){
    console.log(res);
})
.fail(function(e){
    console.log(e);
})
.always(function ajaSiempre(){
    console.log('Final de la llamada ajax,');
})
return false;
