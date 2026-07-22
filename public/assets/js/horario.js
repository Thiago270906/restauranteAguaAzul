{
    const modalHorario = document.getElementById("modalHorario");
    const btnNovoHorario = document.getElementById("btnNovoHorario");
    const btnFecharModal = document.getElementById("fecharModalHorario");
    const btnCancelar = document.getElementById("cancelarHorario");
    const formHorario = modalHorario.querySelector("form");

    function abrirModal() {
        formHorario.reset();
        modalHorario.classList.remove("hidden");
    }

    function fecharModal() {
        modalHorario.classList.add("hidden");
    }

    btnNovoHorario.addEventListener("click", abrirModal);

    btnFecharModal.addEventListener("click", fecharModal);

    btnCancelar.addEventListener("click", fecharModal);

    modalHorario.addEventListener("click", (e) => {
        if (e.target === modalHorario) {
            fecharModal();
        }
    });

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && !modalHorario.classList.contains("hidden")) {
            fecharModal();
        }
    });
}