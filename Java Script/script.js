let texto = document.getElementById("area");


function mostrar()
{
    alert("Que seu dia tenha sido de paz, alegria e amigos!");
}

function mudar()
{
    texto.textContent = "Por isso se chama presente!!!";
}

function feedback()
{
    let userMsg = document.getElementById("caixatexto").value;
    alert("Seu sonho é realizavel, " + userMsg);
}

function soma()
{
    let X = Number(document.getElementById("numeroX").value);
    let Y = Number(document.getElementById("numeroY").value);
    alert(X+Y);
}



