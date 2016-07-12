$(document).ready(function() {
$(".saleedit").click(function(){

      $('#modal_content').empty();
          var load = "<div class='loader'><span></span><span></span> <span></span></div>";
          $('#modal_content').html(load)  
          var saleid = $('#'+sale.id).val();
        
          var prueba= $.get(`gSaleedit/`+saleid, function(res){
            var dato = res;
            $(".load").empty();
            $('#modal_content').empty();
            $('#modal_content').html(dato);

       });
               
  });
     

});



