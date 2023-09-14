$('#form-login').submit((e) => {
  e.preventDefault();
  loginFunction();

});

function loginFunction(){
  var pass = $('#loginPassword').val();
  var name = $('#loginName').val();

    var parametros =
    {
      "username": name,
      "password": pass, 
    };

    console.log(parametros);
    exit;
    
    $.ajax({
      data: parametros,
      url:'/app/Controllers/Jugadores.php/ingresar',
      type:'POST',
      dataType:'json',
      success: function()
      {
        //alert(parametros);
        
      }
    })
   

  }

