$(function(){


   


$( document ).ready(function() {
    var request;
    var antigo;
   

   

    $('#com').on('keyup keypress', function(e) {
      var keyCode = e.keyCode || e.which;
      if (keyCode === 13) { 
        e.preventDefault();
        return false;
    }
});
     var control = false;

    $(".link").click(function(){
        if(control == false){
            var id = $(this).attr('id');
            atualizar(id);
            $('.comentarios').show();
            control = true;
        }else{

            $('.container').css("height","126");
            $('.comentarios').hide();
            $(".comentarios").css("visibility", "hidden");

            control = false;
        }
        
    });

    if(control == true){
        $(".link").click(function(){
        var id = $(this).attr('id');
        atualizar(id);
       
        }); 
    }

    $("#inserir2").keyup(function(e) {
     var code = e.keyCode ? e.keyCode : e.which;

     if (code == 13) {
        enviarComentario();
    }
});

    $("#inserir").keyup(function(e) {
     var code = e.keyCode ? e.keyCode : e.which;

     if (code == 13) {
        enviarComentario();
    }
});
});

function enviarComentario(isso){
    event.preventDefault();

    var $form = $("#com");

    var $inputs = $form.find("input, select, button, textarea");

    var serializedData = $form.serialize();

    request = $.ajax({
        url: "inserir.php",
        type: "post",
        data: serializedData
    });

    request.done(function (response, textStatus, jqXHR){
        alert("Comentário enviado!");
        location.reload();
    });
}

function atualizar(id){
    $('.container').css("height","126");

    function changeHeight(h){
        var altura = $('#'+id).height() + $('.comentarios').height();

        $('#'+id).css('height', '100%');
    }


    $.get("comentarios.php?id="+id, function(data){
        
        $('#comments').html(data);

        var dv = $("<div id='childDiv'>"+data+"</div>").hide();

        $("body").append(dv);
        changeHeight(dv.height());
    });

    $(".comentarios").css("visibility", "visible");

    $('.comentarios').detach().appendTo("#"+id);

    $('input[type=hidden]').attr("value", id);
}

function textAreaAdjust(o) {
    o.style.height = "1px";
    o.style.height = (o.scrollHeight)+"px";
}

}); 

