function validaFormLogin(){

    var id = formLogin.id.value;
    var senha = formLogin.senha.value;
    var confirmaSenha = formLogin.confirmaSenha.value;

    if(id == "" && senha == ""){
        alert('Os campos id e senha estão vazios, por favor preencha-os');
        formLogin.id.focus();
        return false;
    }else if(id == ""){
        alert('O campo id está vazio, por favor o preencha');
        formLogin.id.focus();
        return false;
    }else if(senha == ""){
        alert('O campo senha está vazio, por favor o preencha');
        formLogin.senha.focus();
        return false;

    }else if(senha.length <4){
        alert('o campo senha deve ter no minimo 4 digitos');
        formLogin.senha.focus();
        return false;
    }else if(confirmaSenha === ""){
        alert('O campo confirmação da senha está vazio');
        formLogin.confirmaSenha.focus();
        return false;
    }else if(senha != confirmaSenha){
        alert('ERRO - A confirmação da senha está diferente');
        formLogin.confirmaSenha.focus();
        return false;
    }else{
        alert('Cadastrado com sucesso!');
        return true;
    }

}