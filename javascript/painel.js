$(document).ready(function(){
    $('.cpf').mask('000.000.000-00');    
    
});
var pessoa;
var sala;
var adm;

window.onload= function(){
    pessoa = document.querySelector("#pessoa");
    sala = document.querySelector("#sala");
    adm = document.querySelector("#adm");

    var bt1 =document.querySelector(".btP");
    bt1.onclick = mostrarP;
    var bt2=document.querySelector(".btS");
    bt2.onclick = mostrarS;
    var bt3=document.querySelector(".btADM");
    bt3.onclick = mostrarADM;

    
    sala.classList.add("oculto")
    adm.classList.add("oculto")
};


function mostrarP(){
    pessoa.classList.remove("oculto")
    sala.classList.add("oculto")
    adm.classList.add("oculto")
}
function mostrarS(){
    pessoa.classList.add("oculto")
    sala.classList.remove("oculto")
    adm.classList.add("oculto")
}
function mostrarADM(){
    pessoa.classList.add("oculto")
    sala.classList.add("oculto")
    adm.classList.remove("oculto")
}