 $(document).on("submit",".formpayment",function(e){

        
        e.preventDefault();
       //console.log("Estoy llegando");

       var nombreform=$(this).attr("id");
       console.log("this is"+nombreform);
      
       var route = "Costumer";
      var dato = $("#name").val();
      var dato2 = $("#card").val();
      var dato3 = $("#security").val();
      var dato4 = $("#zip").val();
      var dato5 = $("#expired").val();
      var dato6 = $("#idsale").val();
      var dato7 = $("#iduser").val();
      var dato8 = $("#salecode").val();


      console.log(dato);



       var token = $("#token").val();
     

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
            data: {name:dato,card:dato2,security:dato3,zip:dato4,expired:dato5,idsale:dato6,iduser:dato7,salecode:dato8},
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
  

    