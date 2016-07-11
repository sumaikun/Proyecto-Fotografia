$(document).ready(function() {
$("#gRating").click(function(){
	 	    //$('.fcontainer').empty();
            $('#modal_content').empty();
	 	    var load = "<div class='loader'><span></span><span></span> <span></span></div>";
            $(".load").append(load)  ;

          var prueba= $.get(`gRatingform/`+photo, function(res){
            var dato = res;
            $(".load").empty();
            $('#modal_content').empty();
            $('#modal_content').html(dato);     
      
	

       });
               
  });
     

});
