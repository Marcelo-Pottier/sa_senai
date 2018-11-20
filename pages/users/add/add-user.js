function clicou(){
    var confsenha1 = document.getElementById("senha1").value;
    var confsenha2= document.getElementById("senha2").value;
    paragrafo = document.getElementById("msgerro");
        if (confsenha1 != confsenha2){
            paragrafo.innerHTML ="Senhas não correspondem";
        }
    }
    