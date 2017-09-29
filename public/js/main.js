
jQuery(document).on('submit','#formlg',function(event){
    event.preventDefault();
    jQuery.ajax({
        url:'./REGISTROS/iniciarSesion.php',
        type:'POST',
        dataType:'json',
        data: $(this).serialize(),
        beforeSend:function(){
            $('.botonlg').val('Comprobando...');
        }
    })
    .done(function(respuesta){
        console.log(respuesta);
        if(!respuesta.error){
           setTimeout(function(){
                location.href = 'user.php';
                $('.botonlg').val('Iniciar Sesión');
           },1000);
        }else{
            $('.errorInicio').slideDown('slow');
            setTimeout(function(){
                $('.errorInicio').slideUp('slow');
            },5000);
            $('.botonlg').val('Iniciar Sesión');
        }
    })
    .fail(function(resp){
        console.log(resp.responseText);
    })
    .always(function(){
        console.log("complete");
    })
});


jQuery(document).on('submit','#formReg',function(event){
    event.preventDefault();
    jQuery.ajax({
        url:'./REGISTROS/registrarse.php',
        type:'POST',
        dataType:'json',
        data: $(this).serialize(),
        beforeSend:function(){
            $('.botonReg').val('Registrando...');
        }
    })
    .done(function(respuesta){
        console.log(respuesta);
        if(!respuesta.error){
           setTimeout(function(){
                location.href = 'user.php';
                $('.botonReg').val('Registrando');
           },1000);
        }
        else if(respuesta.error && respuesta.incompleto){
            $('.errorRegistroIncompleto').slideDown('slow');
            setTimeout(function(){
                $('.errorRegistroIncompleto').slideUp('slow');
            },5000);
            $('.botonReg').val('Registrar');
        }
        else if(respuesta.error){
            $('.errorRegistro').slideDown('slow');
            setTimeout(function(){
                $('.errorRegistro').slideUp('slow');
            },5000);
            $('.botonReg').val('Registrar');
        }
    })
    .fail(function(resp){
        console.log(resp.responseText);
    })
    .always(function(){
        console.log("complete");
    })
});

jQuery(document).on('submit', '#addevent', function(event){
    event.preventDefault();
    var data = new FormData(this);
    
    jQuery.ajax({
        url:'./EVENTOS/eventos.php',
        type:'POST',
        data:data,
        contentType:false,
        processData:false,
        beforeSend:function(){}
           
    })
    .done(function(respuesta){
        console.log(respuesta);
        if(!respuesta.error){
            
                $('.botonEv').val('AGREGANDO...');
            
            setTimeout(function(){
                $('.botonEv').val('AGREGAR EVENTO');
                $('.successful').fadeIn(1500);
            },2000);
            setTimeout(function(){
                $('.successful').fadeOut(1500);
            }, 4000)
            
        }
        else{
            $('.errornewev').slideDown('slow');
            setTimeout(function(){
                $('.errornewev').slideUp('slow');
            }, 5000);
        }
    })
    .fail(function(resp){
        console.log(resp.responseText);
    })
    .always(function(){
        console.log("complete");
    })
})
