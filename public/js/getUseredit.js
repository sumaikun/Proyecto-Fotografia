$(document).ready(function() {
$(".useredit").click(function(){

      $('#modal_content').empty();
          var load = "<div class='loader'><span></span><span></span> <span></span></div>";
          $('#modal_content').html(load)  
          var userid = $('#'+usuario.id).val();
        
          var prueba= $.get(`gUseredit/`+userid, function(res){
            var dato = res;
            $(".load").empty();
            $('#modal_content').empty();
            $('#modal_content').html(dato);

       });
               
  });
     

});



