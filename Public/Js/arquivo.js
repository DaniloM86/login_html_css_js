function validaForm(){
    
    if (formulario.nome.value == '') {
        alert('preencha o campo nome!');
        formulario.nome.focus();
        return false;
    }
    if (formulario.email.value == '') {
        alert('preencha o campo email!');
        formulario.email.focus();
        return false;
    }

}