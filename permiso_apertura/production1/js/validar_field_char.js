function val(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    if (tecla==8)
    {
    	return true;
    } 
    patron =/[A-Za-z\sáéíóú]/;
    te = String.fromCharCode(tecla);
    return patron.test(te);
}