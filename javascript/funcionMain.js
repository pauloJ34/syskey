$(function(){// quando iniciar executar logo
    $.ajax({
        url: "PHP/busca.php",
        success: function(result){
            $(".tabela").html(result);
            //localização
            var tdX=document.querySelectorAll("td")
            var trx=document.querySelectorAll("tr")
            num=1
            //cor de estado da chave
            for(i=0; i<trx.length;i++){
                if(tdX[num].textContent==="livre"){//verde=livre
                    trx[i+1].style.backgroundColor="lime"
                }else if(tdX[num].textContent=="agendado"){//amarelo=agendado
                    trx[i+1].style.backgroundColor="yellow"  
                }else if(tdX[num].textContent=="em uso"){//vermelho=usando
                    trx[i+1].style.backgroundColor="red"
                }num+=6
            }
        },
        error: function(){
            $("main").html("Error");
          }
    })
   
})
function repetir(){//quando passar o tempo auto atualiza os dados
    $(function(){
        $.ajax({
            url: "PHP/busca.php",
            success: function(result){
                $(".tabela").html(result);
                var tdX=document.querySelectorAll("td")
                var trx=document.querySelectorAll("tr")
                num=1
                 //cor de estado da chave
                 for(i=0; i<trx.length;i++){
                    if(tdX[num].textContent==="livre"){//verde=livre
                        trx[i+1].style.backgroundColor="lime"
                    }else if(tdX[num].textContent=="agendado"){//amarelo=agendado
                        trx[i+1].style.backgroundColor="yellow"  
                    }else if(tdX[num].textContent=="em uso"){//vermelho=usando
                        trx[i+1].style.backgroundColor="red"
                    }num+=6
                }
            },
            error: function(){
                $("main").html("Error");
              }
        })
    })
}setInterval(repetir,5*60000)

$(function(){// quando aperta atualiza os dados
    $(".btRecarregar").on("click",function(){
        $.ajax({
            url: "PHP/busca.php",
            success: function(result){
                $(".tabela").html(result);
                var tdX=document.querySelectorAll("td")
                var trx=document.querySelectorAll("tr")
                num=1
                 //cor de estado da chave
                for(i=0; i<trx.length;i++){
                    if(tdX[num].textContent==="livre"){//verde=livre
                        trx[i+1].style.backgroundColor="lime"
                    }else if(tdX[num].textContent=="agendado"){//amarelo=agendado
                        trx[i+1].style.backgroundColor="yellow"  
                    }else if(tdX[num].textContent=="em uso"){//vermelho=usando
                        trx[i+1].style.backgroundColor="red"
                    }num+=6
                }
            },
            error: function(){
                $("main").html("Error");
            }
        })
    })
})




