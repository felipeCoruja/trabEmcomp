function validaFormCadastro(){

    var idLogin = formCad.id.value;
    var senha = formCad.senha.value;
    var nome = formCad.nome.value;
    var idade = formCad.idade.value;
    var status = formCad.status.value;
    var telefone = formCad.telefone.value;
    var celular = formCad.celular.value;
    var endereco = formCad.endereco.value;
    var cidadeNatal = formCad.cidadeNatal.value;
    var cidadeNascimento = formCad.cidadeAtual.value;
    var dataAniversario = formCad.dataNascimento.value;
    var instagran = formCad.instagran.value;



    if(nome == ""){
        alert('O campo nome está vazio, por favor o preencha');
        formCad.nome.focus();
        return false;
    

    }else if(telefone == "" || telefone.length <8){
        if(telefone==""){
            alert('O campo telefone está vazio, por favor o preencha');
            formCad.telefone.focus();
            return false;

        }else{
            alert('preencha o campo telefone com no minimo 8 digitos');
            formCad.telefone.focus();
            return false;

        }
    }else if(celular == "" || celular.length < 8){
        if(celular==""){
            alert('O campo celular está vazio, por favor o preencha');
            formCad.celular.focus();
            return false;

        }else{
            alert('preencha o campo celular com no minimo 8 digitos');
            formCad.celular.focus();
            return false;

        }

    }else if(cidadeNatal == ""){
        alert('O campo cidade Natal está vazio, por favor o preencha');
        formCad.cidadeNatal.focus();
        return false;
    }else if(cidadeAtual == ""){
        alert('O campo cidade atual está vazio, por favor o preencha');
        formCad.cidadeAtual.focus();
        return false;

    }else if(instagran == ""){
        alert('O campo instagran está vazio, por favor o preencha');
        formCad.instagran.focus();
        return false;
    }else if(idade == ""){
        alert('O campo idade está vazio, por favor o preencha');
        formCad.idade.focus();
        return false;
    }else if(endereco == ""){
        alert('O campo endereço está vazio, por favor o preencha');
        formCad.endereco.focus();
        return false;
    }else if(idLogin == ""){
        alert('O campo login está vazio, por favor o preencha');
        formCad.login.focus();
        return false;
    }else if(senha == "" || senha.length <4){
        if(senha == ""){
            alert('O campo senha está vazio, por favor o preencha');
            formCad.senha.focus();
            return false;
        }else{
            alert('o campo senha deve ter no minimo 4 digitos');
            formCad.senha.focus();
            return false;
        }
    }else{
        alert('Cadastrado com sucesso!');
        return true;
    }
}