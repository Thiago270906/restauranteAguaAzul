const form = document.querySelector("form");
const botao = document.getElementById("btnEditar");
const texto = document.getElementById("textoBotao");
const icone = botao.querySelector(".material-symbols-outlined");

const inputs = form.querySelectorAll(".config-input");

let editando = false;

botao.addEventListener("click", function (e) {

    e.preventDefault();

    if (!editando) {

        inputs.forEach(input => {
            input.removeAttribute("disabled");
        });

        texto.textContent = "Salvar";
        icone.textContent = "save";

        editando = true;
    } else {
        form.submit();

    }

});