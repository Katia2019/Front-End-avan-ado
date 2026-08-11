function verificarSenha()
{
    let senha = document.getElementById("senha").value;

    if (senha === "dia")
    {
        alert("Eis que faço nova todas as coisas!!!");
    }
    else if (senha === "faustao")
    {
        alert("oloco bixo");
    }    
    else if (senha === "patati")
    {
        alert("patata");
    }    
    else
    {
        alert("Senha errada");
    }    
}
function magia()
{
    let area = document.getElementById("localmagia");
    area.style.color = "red";
    area.style.backgroundColor = "aquamarine";
    area.style.padding = "25px";
}

function gradiente()
{
    let body = document.getElementById("body");
    body.style.color = "blue";
    body.style.height =  "910";
    body.style.backgroundImage = "linear-gradient(135deg, #1A1145, #D63384, #FD7E14, #FFC107)";
}