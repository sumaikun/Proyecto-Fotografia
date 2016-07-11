$(document).ready(function() {
$(".rate").click(function(e){

      var dato = $(".ratevalue").val();
      var dato2 = $("#usuario").val();
      var dato3 = $("#photo").val();
      // console.log("Estoy llegando "+dato+dato2+dato3);
      var token = $("#token").val();
      var route = "rate";    
      var load = "<div class='loader'><span></span><span></span> <span></span></div>";
          $("#modal_content").append(load)   
          if(petition==false)
         {
         
         petition=true;            
         $.ajax({
            url: route,  
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'html',
     
            // Form data
            //datos del formulario
            data: {ratevalue:dato,usuario:dato2,photo:dato3},
            //necesario para subir archivos via ajax

            
               
             
            success: function(data)
            {
                //console.log("llegue");
               
                petition = false;
                $('#modal_content').empty();
                $("#modal_content").html(data);  
            },

            error: function(data)
            {
              alert("ha ocurrido un error") ;
            }

       
        
        });       
 
      }      
     
});
});
    