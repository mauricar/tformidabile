
  jQuery(document).ready( function() {
      var sending = false;
     


      jQuery('.btn-envio').click(function() {
          if (sending) {return;}
          jQuery('.alert alert-success').removeClass('hide');
          jQuery('.alert alert-danger').removeClass('hide');
          error = false;
          mensaje = "Faltan completar campos, por favor revise los campos en rojo";

          nombre = jQuery('#nombre').val().trim();
          if (nombre == ""){
            jQuery('#nombre').parent().addClass('has-error');
            error = true;
          }

          email = jQuery('#email').val().trim();
          if (email == ""){
            jQuery('#email').parent().addClass('has-error');
            error = true;
          }

          mensaje = jQuery('#mensaje').val().trim();
          if (mensaje == ""){
            jQuery('#mensaje').parent().addClass('has-error');
            error = true;
          }

          if (error){
              label = "Por favor revise los campos marcados en rojo";

              jQuery('.alert-danger').html(label);
              jQuery('.alert-danger').removeClass("hide");
              jQuery('html, body').animate({
                  scrollTop: $(".alert-danger").offset().top - 40
              }, 1000);
              return; 
          }

          sending = true;
          jQuery('.btn-envio').html("Enviando...");
          jQuery('.btn-envio').addClass('disabled');
          $.post("ajax/forms.php",{accion: 'enviarMensaje',
                            nombre: nombre,
                            email: email,
                            mensaje: mensaje,
                          
                            rand:Math.random() } ,function(data){
            console.log("DATA " + data);

            if (data == "ok"){
                jQuery('.alert-danger').addClass("hide");
                jQuery('.alert-success').removeClass("hide");
                jQuery('.form-control').val("");
                jQuery('html, body').animate({
                    scrollTop: $(".alert-success").offset().top -40
                }, 600);
            }
            else{
                label = "Ocurrió un error al enviar el mensaje, por favor vuelva a intentarlo.";
                jQuery('.alert-danger').html(label);
                jQuery('.alert-success').addClass("hide");
                jQuery('.alert-danger').removeClass("hide");
               
                jQuery('html, body').animate({
                    scrollTop: $(".alert-danger").offset().top -40
                },600); 
            }
            jQuery('.btn-envio').html("Enviar");
            jQuery('.btn-envio').removeClass('disabled');
            sending = false;
          });


      })

  });

    
