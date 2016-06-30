$(document).ready(function() {
$("#gPayment").click(function(){
	 	    //$('.fcontainer').empty();
            $('#modal_content').empty();
	 	    var load = "<div class='loader'><span></span><span></span> <span></span></div>";
            $(".load").append(load)  ;

          var prueba= $.get(`/gPaymentform`, function(res){
            var dato = res;
            $(".load").empty();
            $('#modal_content').empty();
            $('#modal_content').html(dato);     
      
	

       });
               
  });
     

});
