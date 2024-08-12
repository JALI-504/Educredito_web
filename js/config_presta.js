$(document).ready(function(){
        $("#departamento").change(function(){
          $.ajax({
            url:"generar_ciudad.php",
            type: "POST",
            data:"iddepartamento="+$("#departamento").val(),
            success: function(opcionesc){
              $("#ciudad").html(opcionesc);
            }
          })
        });
      });
      function objetoAjax(){
			var xmlhttp = false;
			try {
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
			} catch (e) {

				try {
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (E) {
					xmlhttp = false;
                }
			}
			if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
			  xmlhttp = new XMLHttpRequest();
			}
			return xmlhttp;
		}
	