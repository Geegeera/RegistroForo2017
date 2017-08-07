 function myFunction(){
                var valor=document.getElementById("username").value;
                var valor1=document.getElementById("mail").value;
                var valor2=document.getElementById("marca").value;
                var valor3=document.getElementById("agencia").value;

                if (valor != "" && valor2 !="" && valor3 !="" ) {
                        $.post("safe.php", {valorBusqueda: valor,valorBusqueda1:valor1,valorBusqueda2:valor2,valorBusqueda3:valor3}, function(mensaje) {
                        $("#demo").html(mensaje);}); 
                  
                 } else { 
                         $("#demo").html('Capture los datos completos');
                };
              
            }