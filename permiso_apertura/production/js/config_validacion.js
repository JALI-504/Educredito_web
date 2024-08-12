$(document).ready(function(){
        $("#departamento").change(function(){
          $.ajax({
            url:"genera_municipio.php",
            type: "POST",
            data:"iddepto="+$("#departamento").val(),
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
/*************************************************************************************/
$(document).ready(function(){
        $("#departamento_res").change(function(){
          $.ajax({
            url:"genera_municipios.php",
            type: "POST",
            data:"iddepartamento="+$("#departamento_res").val(),
            success: function(opcionesc){
              $("#ciudad_res").html(opcionesc);
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
/***********************************************************************************/
$(document).ready(function(){
        $("#depart").change(function(){
          $.ajax({
            url:"genera_area.php",
            type: "POST",
            data:"iddepart="+$("#depart").val(),
            success: function(opcionesc){
              $("#area").html(opcionesc);
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
/***********************************************************************************/
$(document).ready(function(){
        $("#fecha_nac").change(function(){
          $.ajax({
            url:"genera_edad.php",
            type: "POST",
            data:"fecha="+$("#fecha_nac").val(),
            success: function(opcionesc){
              $("#edad").html(opcionesc);
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
/***********************************************************************************/
$(document).ready(function(){
        $("#in_periodo").change(function(){
          $.ajax({
            url:"validar_ind_period.php",
            type: "POST",
            data:"indic_period="+$("#in_periodo").val(),
            success: function(opcionesc){
              $("#val_ind_per").html(opcionesc);
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
/***********************************************************************************/
/***********************************************************************************/
$(document).ready(function(){
        $("#in_periodo_coleg").change(function(){
          $.ajax({
            url:"validar_ind_period_col.php",
            type: "POST",
            data:"indic_period_col="+$("#in_periodo_coleg").val(),
            success: function(opcionesc){
              $("#val_ind_per_col").html(opcionesc);
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
/***********************************************************************************/
$(document).ready(function(){
        $("#in_global").change(function(){
          $.ajax({
            url:"validar_ind_global.php",
            type: "POST",
            data:"indic_golbal="+$("#in_global").val(),
            success: function(opcionesc){
              $("#val_ind_glob").html(opcionesc);
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
/***********************************************************************************/
$(document).ready(function(){
        $("#prom").change(function(){
          $.ajax({
            url:"validar_promedio.php",
            type: "POST",
            data:"indic_prom="+$("#prom").val(),
            success: function(opcionesc){
              $("#val_ind_prom").html(opcionesc);
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
/*****************************mostrar************************************************/
$(document).ready(function(){
        $("#t_igreso").change(function(){
          $.ajax({
            url:"genera_ingreso_univ.php",
            type: "POST",
            data:"id_tipo_ingre="+$("#t_igreso").val(),
            success: function(opcionesc){
              $("#aplicar_ingre").html(opcionesc);
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
/***************************estado**************************************************/
$(document).ready(function(){
  $("#estad").change(function(){
    $.ajax({
      url:"update_estado.php",
      type: "POST",
      data:"estadoid="+$("#estad").val()+"&idsol="+$("#soli").val(),
      success: function(opcionesc){
        $("#mensaje").html(opcionesc);
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
/*******************duracion*************************************/
$(document).ready(function(){
    $("#conv_ini").change(function(){
        $.ajax({
          url:"genera_duracion.php",
            type: "POST",
            data:"convini="+$("#conv_ini").val()+"&convfin="+$("#conv_fin").val(),
            success: function(opcionesc){
              $("#dura").html(opcionesc);
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

$(document).ready(function(){
    $("#conv_fin").change(function(){
        $.ajax({
          url:"genera_duracion.php",
            type: "POST",
            data:"convfin="+$("#conv_fin").val()+"&convini="+$("#conv_ini").val(),
            success: function(opcionesc){
              $("#dura").html(opcionesc);
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
/***********************************************************/ 
/*******************actualizacion ip*************************************/
$(document).ready(function(){
    $("#fi_ip").change(function(){
        $.ajax({
          url:"genera_actualizacion_ip.php",
            type: "POST",
            data:"actini="+$("#fi_ip").val()+"&actfin="+$("#ff_ip").val(),
            success: function(opcionesc){
              $("#f_act_ip").html(opcionesc);
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

$(document).ready(function(){
    $("#ff_ip").change(function(){
        $.ajax({
          url:"genera_actualizacion_fip.php",
            type: "POST",
            data:"actfin="+$("#ff_ip").val()+"&actini="+$("#fi_ip").val(),
            success: function(opcionesc){
              $("#f_act2_ip").html(opcionesc);
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
/***********************************************************/ 
/*******************actualizacion iip*************************************/
$(document).ready(function(){
    $("#fi_iiip").change(function(){
        $.ajax({
          url:"genera_actualizacion_iip.php",
            type: "POST",
            data:"actini="+$("#fi_iiip").val()+"&actfin="+$("#ff_iiip").val(),
            success: function(opcionesc){
              $("#f_act_iip").html(opcionesc);
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

$(document).ready(function(){
    $("#ff_iiip").change(function(){
        $.ajax({
          url:"genera_actualizacion_fiip.php",
            type: "POST",
            data:"actfin="+$("#ff_iiip").val()+"&actini="+$("#fi_iiip").val(),
            success: function(opcionesc){
              $("#f_act2_iip").html(opcionesc);
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
/***********************************************************/ 
/*******************actualizacion iiip*************************************/
$(document).ready(function(){
    $("#ff_iiip").change(function(){
        $.ajax({
          url:"genera_actualizacion_iiip.php",
            type: "POST",
            data:"actfiin="+$("#ff_iiip").val()+"&actinii="+$("#fi_iiip").val(),
            success: function(opcionesc){
              $("#f_act_iiip").html(opcionesc);
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

$(document).ready(function(){
    $("#ff_iiip").change(function(){
        $.ajax({
          url:"genera_actualizacion_fiiip.php",
            type: "POST",
            data:"actfiin="+$("#ff_iiip").val()+"&actinii="+$("#fi_iiip").val(),
            success: function(opcionesc){
              $("#f_act2_iiip").html(opcionesc);
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
/***********************************************************/
/*******************actualizacion iv*************************************/
$(document).ready(function(){
    $("#ff_ivp").change(function(){
        $.ajax({
          url:"genera_actualizacion_iv.php",
            type: "POST",
            data:"actfiin="+$("#ff_ivp").val()+"&actinii="+$("#fi_ivp").val(),
            success: function(opcionesc){
              $("#f_act_ivp").html(opcionesc);
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

$(document).ready(function(){
    $("#ff_ivp").change(function(){
        $.ajax({
          url:"genera_actualizacion_fiv.php",
            type: "POST",
            data:"actfiin="+$("#ff_ivp").val()+"&actinii="+$("#fi_ivp").val(),
            success: function(opcionesc){
              $("#f_act2_ivp").html(opcionesc);
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
/*******************actualizacion is*************************************/
$(document).ready(function(){
    $("#fi_iis").change(function(){
        $.ajax({
          url:"genera_actualizacion_is.php",
            type: "POST",
            data:"actinii="+$("#fi_iis").val()+"&actfiin="+$("#ff_iis").val(),
            success: function(opcionesc){
              $("#f_act_is").html(opcionesc);
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

$(document).ready(function(){
    $("#ff_iis").change(function(){
        $.ajax({
          url:"genera_actualizacion_fis.php",
            type: "POST",
            data:"actfiin="+$("#ff_iis").val()+"&actinii="+$("#fi_iis").val(),
            success: function(opcionesc){
              $("#f_act2_is").html(opcionesc);
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

$(document).ready(function(){
    $("#ff_iis").change(function(){
        $.ajax({
          url:"genera_actualizacion_iis.php",
            type: "POST",
            data:"actfiin="+$("#ff_iis").val()+"&actinii="+$("#fi_iis").val(),
            success: function(opcionesc){
              $("#f_act_iis").html(opcionesc);
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
/***********************************************************/ 

$(document).ready(function(){
    $("#ff_iis").change(function(){
        $.ajax({
          url:"genera_actualizacion_fiis.php",
            type: "POST",
            data:"actfiin="+$("#ff_iis").val()+"&actinii="+$("#fi_iis").val(),
            success: function(opcionesc){
              $("#f_act2_iis").html(opcionesc);
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
/***********************************************************/ 