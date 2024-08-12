function validarform()
{
	if (document.fvalida.centro.value.length==0)
	{
		$.alert({
         title: 'Becas Asistir',
	      content: 'El nombre del centro educativo es requerido',
	   });
   	document.fvalida.centro.focus()
      return 0;
   }
   if (document.fvalida.departamento.value.length==0)
   {
   	$.alert({
	      title: 'Becas Asistir',
		   content: 'El departamento es requerido',
		});
      document.fvalida.departamento.focus()
      return 0;
   }
   if (document.fvalida.municipio.value.length==0)
   {
   	$.alert({
	      title: 'Becas Asistir',
		   content: 'El municipio es requerido',
		});
      document.fvalida.municipio.focus()
      return 0;
   }
   if (document.fvalida.direccion.value.length==0)
   {
   	$.alert({
	      title: 'Becas Asistir',
	      content: 'La direccion del centro educativo es requerido',
		});
      document.fvalida.direccion.focus()
      return 0;
   }
   else
   {
   	document.fvalida.submit();
   }
}