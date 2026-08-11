function verificarSenha()
{
    let senha = document.getElementById("senha").value;

    if (senha === "loucura")
    {
        alert("Loucura, loucura");
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
    let back = document.body;
    area.style.color = "blue";
    area.style.background = "linear-gradiente(135deg #8B008B, #9932CC, #FFF0F5)";
    area.style.padding = "25px";
}