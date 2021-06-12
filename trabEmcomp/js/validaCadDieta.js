function validaFormDieta(){

    var nomeDieta = formCadDieta.nomeDieta.value;
    var principalCafeMatinal = formCadDieta.alimentoPrincipal.value;
    var complementoCafeMatinal = formCadDieta.complemento.value;
    var bebidaCafeMatinal = formCadDieta.bebidaMatinal.value;
    var carneAlmoco = formCadDieta.carneAlmoco.value;
    var verduraAlmoco = formCadDieta.verduraAlmoco.value;
    var bebidaAlmoco = formCadDieta.bebidaAlmoco.value;
    var principalCafeTarde = formCadDieta.principalCafeTarde.value;
    var complementoCafeTarde = formCadDieta.complementoCafeTarde.value;
    var bebidaCafeTarde = formCadDieta.bebidaCafeTarde.value;
    var carneJantar = formCadDieta.carneJantar.value;
    var verduraJantar = formCadDieta.verduraJantar.value;
    var bebidaJantar = formCadDieta.bebidaJantar.value;

    if(nomeDieta === ""){
        alert('Campo nome da dieta esta vazio!');
        formCadDieta.nomeDieta.focus();
        return false;
    }else if(principalCafeMatinal===""){
        alert('Campo Alimento Principal de Cafe da manhã da  esta vazio!');
        return false;
    }else if(complementoCafeMatinal===""){
        alert('Campo Complemento de Cafe da manhã da  esta vazio!');
        return false;
    }else if(bebidaCafeMatinal===""){
        alert('Campo Bebida Matinal de Cafe da manhã da  esta vazio!');
        return false;
    }else if(carneAlmoco===""){
        alert('Campo Carne do Almoço da  esta vazio!');
        return false;
    }else if(verduraAlmoco===""){
        alert('Campo verdura do Almoço da  esta vazio!');
        return false;
    }else if(bebidaAlmoco===""){
        alert('Campo bebida do Almoço da  esta vazio!');
        return false;
    }else if(principalCafeTarde===""){
        alert('Campo Alimento Principal de Cafe da Tarde da  esta vazio!');
        return false;
    }else if(complementoCafeTarde===""){
        alert('Campo Complemento de Cafe da Tarde da  esta vazio!');
        return false;
    }else if(bebidaCafeTarde===""){
        alert('Campo Bebida de Cafe da Tarde da  esta vazio!');
        return false;
    }else if(carneJantar===""){
        alert('Campo Carne do Jantar da  esta vazio!');
        return false;
    }else if(verduraJantar===""){
        alert('Campo verdura do Jantar da  esta vazio!');
        return false;
    }else if(bebidaJantar===""){
        alert('Campo Bebida do Jantar da  esta vazio!');
        return false;
    }else{
        alert('Cadastrado com sucesso!');
        return true;
    }
    

}