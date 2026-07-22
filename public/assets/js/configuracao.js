{
    const form = document.querySelector("form");
    const botao = document.getElementById("btnEditar");
    const texto = document.getElementById("textoBotao");
    const icone = botao.querySelector(".material-symbols-outlined");

    const inputs = form.querySelectorAll(".config-input");
    const btnNovoHorario = document.getElementById("btnNovoHorario");
    const botoesEditarHorario = document.querySelectorAll(".btnEditarHorario");

    let editando = false;

    botao.addEventListener("click", function (e) {
        e.preventDefault();

        if (!editando) {

            inputs.forEach(input => input.removeAttribute("disabled"));

            btnNovoHorario.classList.remove("hidden");

            botoesEditarHorario.forEach(botao => {
                botao.classList.remove("hidden");
            });

            texto.textContent = "Salvar";
            icone.textContent = "save";

            editando = true;

        } else {
            form.submit();
        }
    });
}