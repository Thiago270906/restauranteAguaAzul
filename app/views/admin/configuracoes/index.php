<?php
require_once __DIR__ . '/../../../models/Configuracao.php';

/** @var configuracoes $configuracao */
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Água Azul</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .titulo {
            font-family: 'Playfair Display', serif;
        }
    </style>

</head>

<body class="bg-[#f5f6f8] overflow-hidden">

<div class="flex h-screen">

    <!-- SIDEBAR -->

    <aside id="sidebar"
        class="fixed md:relative z-40
        w-72 h-screen
        bg-[#457AA6]
        text-white
        shadow-2xl
        left-[-100%]
        md:left-0
        transition-all duration-300">

        <div class="h-full flex flex-col">

            <!-- LOGO -->

            <div class="h-24 flex items-center justify-center border-b border-white/20">

                <img
                    src="/restauranteAguaAzul/public/assets/img/agua-logo.png"
                    class="h-14"
                    alt="Logo">

            </div>

            <!-- MENU -->

            <div class="flex-1 p-5">

                <p class="uppercase text-xs tracking-widest opacity-70 mb-4">
                    Navegação de Gerenciamento
                </p>

                <!-- Voltar ao Website: Ícone de 'open_in_new' é ótimo para links externos -->
                <a href="/restauranteAguaAzul/public/"
                    class="group flex items-center gap-4
                    px-4 py-4
                    rounded-xl
                    hover:bg-white/15
                    transition">

                    <span class="material-symbols-outlined group-hover:-translate-x-1 transition">
                        open_in_new 
                    </span>

                    <span class="font-medium">
                        Voltar ao Website
                    </span>

                </a>
                
                <!-- Home: Mantivemos o 'home' pois é o mais indicado -->
                <a href="index.php?action=dashboard"
                    class="group flex items-center gap-4
                    px-4 py-4
                    rounded-xl
                    hover:bg-white/15
                    transition">

                    <span class="material-symbols-outlined group-hover:-translate-x-1 transition">
                        home 
                    </span>

                    <span class="font-medium">
                        Home
                    </span>

                </a>
                
                <!-- Cardápio: O ícone 'restaurant_menu' é perfeito para isso -->
                <a href="index.php?action=cardapioAdmin"
                    class="group flex items-center gap-4
                    px-4 py-4
                    rounded-xl
                    hover:bg-white/15
                    transition">

                    <span class="material-symbols-outlined group-hover:-translate-x-1 transition">
                        restaurant_menu 
                    </span>

                    <span class="font-medium">
                        Cardápio
                    </span>

                </a>
                
                <!-- Avaliações: Ícone 'rate_review' ou 'reviews' para feedback dos clientes -->
                <a href="index.php?action=avaliacaoAdmin"
                    class="group flex items-center gap-4
                    px-4 py-4
                    rounded-xl
                    hover:bg-white/15
                    transition">

                    <span class="material-symbols-outlined group-hover:-translate-x-1 transition">
                        rate_review
                    </span>

                    <span class="font-medium">
                        Avaliações
                    </span>

                </a>
                
                <!-- Galeria de Fotos: Ícone 'photo_library' para coleções de imagens -->
                <a href="index.php?action=galeriaAdmin"
                    class="group flex items-center gap-4
                    px-4 py-4
                    rounded-xl
                    hover:bg-white/15
                    transition">

                    <span class="material-symbols-outlined group-hover:-translate-x-1 transition">
                        photo_library
                    </span>

                    <span class="font-medium">
                        Galeria de Fotos
                    </span>

                </a>

            </div>

            <!-- RODAPÉ -->

            <div class="mt-auto border-t border-gray-200 p-5">

                <div class="flex flex-col">

                    <!-- Configurações -->
                    <a href="index.php?action=configuracoes"
                        class="flex items-center gap-3 mb-2 px-3 py-3 rounded-lg
                        hover:bg-white/15 transition text-white">

                        <span class="material-symbols-outlined text-[22px]">
                            settings
                        </span>

                        <span class="font-medium">
                            Configurações
                        </span>

                    </a>

                        <!-- Logout -->
                    <a href="index.php?action=logout"
                        class="flex items-center gap-3 px-3 py-3 rounded-lg
                        hover:bg-red-500 bg-red-600 text-white transition">

                        <span class="material-symbols-outlined text-[22px]">
                            logout
                        </span>

                        <span class="font-medium">
                            Sair
                        </span>

                    </a>

                </div>

            </div>

        </div>

    </aside>

    <!-- OVERLAY -->

    <div id="overlay"
        class="hidden fixed inset-0 bg-black/40 z-30 md:hidden">
    </div>

    <!-- CONTEÚDO -->

    <div class="flex-1 flex flex-col md:ml-0">

        <!-- NAVBAR -->

        <header class="h-20 bg-white shadow-sm flex items-center justify-between px-6">

            <div class="flex items-center gap-4">

                <button id="menuBtn"
                    class="md:hidden">

                    <span class="material-symbols-outlined text-3xl text-[#457AA6]">
                        menu
                    </span>

                </button>

                <div>

                    <h1 class="titulo text-3xl text-slate-800">

                        Dashboard

                    </h1>

                    <p class="text-sm text-gray-500">

                        Painel Administrativo

                    </p>

                </div>

            </div>

            <div class="flex items-center gap-3">

                <span class="text-gray-600 font-medium">

                    <?= $_SESSION['usuario']['nome'] ?>

                </span>

                <span class="material-symbols-outlined text-4xl text-[#457AA6]">

                    account_circle

                </span>

            </div>

        </header>

        <!-- CONTEÚDO -->

        <main class="flex-1 overflow-auto p-10">

            <form action="index.php?action=atualizarConfiguracoes" method="POST">

                <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-10">

                    <div class="mb-10">

                        <h2 class="titulo text-4xl text-slate-800">
                            Configurações
                        </h2>

                        <p class="text-gray-500 mt-2">
                            Atualize as informações exibidas no website do restaurante.
                        </p>

                    </div>

                    <!-- ======================== -->
                    <!-- DADOS DO RESTAURANTE -->
                    <!-- ======================== -->

                    <div class="mb-12">

                        <div class="flex items-center gap-3 mb-6">

                            <span class="material-symbols-outlined text-[#457AA6]">
                                restaurant
                            </span>

                            <h3 class="text-xl font-semibold text-slate-700">
                                Informações do Restaurante
                            </h3>

                        </div>

                        <div class="grid md:grid-cols-2 gap-6">

                            <div>
                                <label class="block mb-2 font-medium text-gray-700">
                                    Nome do Restaurante
                                </label>

                                <input
                                    disabled
                                    type="text"
                                    name="nome_restaurante"
                                    value="<?= htmlspecialchars($configuracao->getNomeRestaurante()) ?>"
                                    class="config-input w-full border border-gray-300 rounded-xl px-4 py-3
                                    focus:ring-2 focus:ring-[#457AA6] focus:outline-none">
                            </div>

                            <div>
                                <label class="block mb-2 font-medium text-gray-700">
                                    WhatsApp
                                </label>

                                <input
                                    disabled
                                    type="text"
                                    name="whatsapp"
                                    value="<?= htmlspecialchars($configuracao->getWhatsapp()) ?>"
                                    class="config-input w-full border border-gray-300 rounded-xl px-4 py-3
                                    focus:ring-2 focus:ring-[#457AA6] focus:outline-none">
                            </div>

                            <div>
                                <label class="block mb-2 font-medium text-gray-700">
                                    E-mail
                                </label>

                                <input
                                    disabled
                                    type="email"
                                    name="email"
                                    value="<?= htmlspecialchars($configuracao->getEmail()) ?>"
                                    class="config-input w-full border border-gray-300 rounded-xl px-4 py-3
                                    focus:ring-2 focus:ring-[#457AA6] focus:outline-none">
                            </div>

                        </div>

                    </div>

                    <!-- ======================== -->
                    <!-- REDES SOCIAIS -->
                    <!-- ======================== -->

                    <div class="mb-12">

                        <div class="flex items-center gap-3 mb-6">

                            <span class="material-symbols-outlined text-[#457AA6]">
                                public
                            </span>

                            <h3 class="text-xl font-semibold text-slate-700">
                                Redes Sociais
                            </h3>

                        </div>

                        <div class="grid md:grid-cols-2 gap-6">

                            <div>

                                <label class="block mb-2 font-medium text-gray-700">
                                    Instagram
                                </label>

                                <input
                                    disabled
                                    type="url"
                                    name="instagram"
                                    value="<?= htmlspecialchars($configuracao->getInstagram()) ?>"
                                    class="config-input w-full border border-gray-300 rounded-xl px-4 py-3
                                    focus:ring-2 focus:ring-[#457AA6] focus:outline-none">

                            </div>

                            <div>

                                <label class="block mb-2 font-medium text-gray-700">
                                    Facebook
                                </label>

                                <input
                                    disabled
                                    type="url"
                                    name="facebook"
                                    value="<?= htmlspecialchars($configuracao->getFacebook()) ?>"
                                    class="config-input w-full border border-gray-300 rounded-xl px-4 py-3
                                    focus:ring-2 focus:ring-[#457AA6] focus:outline-none">

                            </div>

                        </div>

                    </div>

                    <!-- ======================== -->
                    <!-- ENDEREÇO -->
                    <!-- ======================== -->

                    <div>

                        <div class="flex items-center gap-3 mb-6">

                            <span class="material-symbols-outlined text-[#457AA6]">
                                location_on
                            </span>

                            <h3 class="text-xl font-semibold text-slate-700">
                                Endereço
                            </h3>

                        </div>

                        <div class="grid md:grid-cols-2 gap-6">

                            <div>

                                <label class="block mb-2 font-medium">
                                    CEP
                                </label>

                                <input
                                    disabled
                                    type="text"
                                    name="cep"
                                    value="<?= htmlspecialchars($configuracao->getCep()) ?>"
                                    class="config-input w-full border rounded-xl px-4 py-3">

                            </div>

                            <div>

                                <label class="block mb-2 font-medium">
                                    Estado
                                </label>

                                <input
                                    disabled
                                    type="text"
                                    name="estado"
                                    maxlength="2"
                                    value="<?= htmlspecialchars($configuracao->getEstado()) ?>"
                                    class="config-input w-full border rounded-xl px-4 py-3">

                            </div>

                            <div>

                                <label class="block mb-2 font-medium">
                                    Cidade
                                </label>

                                <input
                                    disabled
                                    type="text"
                                    name="cidade"
                                    value="<?= htmlspecialchars($configuracao->getCidade()) ?>"
                                    class="config-input w-full border rounded-xl px-4 py-3">

                            </div>

                            <div>

                                <label class="block mb-2 font-medium">
                                    Bairro
                                </label>

                                <input
                                    disabled
                                    type="text"
                                    name="bairro"
                                    value="<?= htmlspecialchars($configuracao->getBairro()) ?>"
                                    class="config-input w-full border rounded-xl px-4 py-3">

                            </div>

                            <div class="md:col-span-2">

                                <label class="block mb-2 font-medium">
                                    Logradouro
                                </label>

                                <input
                                    disabled
                                    type="text"
                                    name="logradouro"
                                    value="<?= htmlspecialchars($configuracao->getLogradouro()) ?>"
                                    class="config-input w-full border rounded-xl px-4 py-3">

                            </div>

                            <div>

                                <label class="block mb-2 font-medium">
                                    Número
                                </label>

                                <input
                                    disabled
                                    type="text"
                                    name="numero"
                                    value="<?= htmlspecialchars($configuracao->getNumero()) ?>"
                                    class="config-input w-full border rounded-xl px-4 py-3">

                            </div>
                        </div>

                    </div>

                    <!-- ======================== -->
                    <!-- HORÁRIOS DE FUNCIONAMENTO -->
                    <!-- ======================== -->

                    <div class="mt-12">

                        <div class="flex items-center justify-between mb-6">

                            <div class="flex items-center gap-3">

                                <span class="material-symbols-outlined text-[#457AA6]">
                                    schedule
                                </span>

                                <div>

                                    <h3 class="text-xl font-semibold text-slate-700">
                                        Horários de Funcionamento
                                    </h3>

                                    <p class="text-sm text-gray-500 mt-1">
                                        Gerencie os horários exibidos no website.
                                    </p>

                                </div>

                            </div>

                            <!-- Só aparece no modo edição -->

                            <button
                                type="button"
                                id="btnNovoHorario"
                                class="hidden bg-[#457AA6] hover:bg-[#356487]
                                text-white px-5 py-3 rounded-xl
                                flex items-center gap-2 transition">

                                <span class="material-symbols-outlined">
                                    add
                                </span>

                                Novo Horário

                            </button>

                        </div>

                        <?php if (empty($horarios)): ?>

                            <div class="border-2 border-dashed border-gray-300 rounded-2xl p-10 text-center">

                                <span class="material-symbols-outlined text-5xl text-gray-300 mb-3">
                                    schedule
                                </span>

                                <h4 class="text-lg font-semibold text-slate-700 mb-2">
                                    Nenhum horário cadastrado
                                </h4>

                                <p class="text-gray-500">
                                    Clique em <strong>Editar</strong> para adicionar o primeiro horário.
                                </p>

                            </div>

                        <?php else: ?>

                            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">

                                <?php foreach ($horarios as $horario): ?>

                                    <div
                                        class="bg-gray-50 border border-gray-200 rounded-2xl p-6 hover:shadow-md transition">

                                        <div class="flex justify-between items-start mb-6">

                                            <div>

                                                <h4 class="text-lg font-semibold text-slate-800">
                                                    <?= htmlspecialchars($horario->getNomeDia()) ?>
                                                </h4>

                                                <p class="text-sm text-gray-500">
                                                    Horário de Atendimento
                                                </p>

                                            </div>

                                            <button
                                                type="button"
                                                data-id="<?= $horario->getId() ?>"
                                                class="btnEditarHorario hidden w-10 h-10 rounded-xl
                                                bg-[#457AA6]/10 hover:bg-[#457AA6]
                                                text-[#457AA6] hover:text-white
                                                flex items-center justify-center transition">

                                                <span class="material-symbols-outlined text-[20px]">
                                                    edit
                                                </span>

                                            </button>

                                        </div>

                                        <div class="flex items-center gap-3 text-lg font-semibold text-slate-700">

                                            <span>
                                                <?= substr($horario->getOpenAt(), 0, 5) ?>
                                            </span>

                                            <span class="material-symbols-outlined text-[#457AA6]">
                                                arrow_forward
                                            </span>

                                            <span>
                                                <?= substr($horario->getCloseAt(), 0, 5) ?>
                                            </span>

                                        </div>

                                    </div>

                                <?php endforeach; ?>

                            </div>

                        <?php endif; ?>

                    </div>

                    <div class="mt-12 flex justify-end">

                        <button
                            type="button"
                            id="btnEditar"
                            class="fixed bottom-8 right-8 bg-[#F55F12] hover:bg-[#df520c] text-white px-8 py-4 rounded-full shadow-xl flex items-center gap-2 transition">
                                <span class="material-symbols-outlined">
                                edit
                                </span>

                                <span id="textoBotao">

                                Editar

                                </span>
                        </button>

                    </div>

                </div>

            </form>
                
            <!-- =================================== -->
            <!-- MODAL NOVO HORÁRIO -->
            <!-- =================================== -->

            <div id="modalHorario"
                class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm p-6">

                <div class="bg-white w-full max-w-lg rounded-3xl shadow-2xl overflow-hidden">

                    <!-- Cabeçalho -->
                    <div class="flex items-center justify-between px-8 py-6 border-b">

                        <div class="flex items-center gap-3">

                            <span class="material-symbols-outlined text-3xl text-[#457AA6]">
                                schedule
                            </span>

                            <div>

                                <h3 class="text-2xl font-semibold text-slate-800">
                                    Novo Horário
                                </h3>

                                <p class="text-sm text-gray-500">
                                    Cadastre um horário de funcionamento.
                                </p>

                            </div>

                        </div>

                        <button
                            type="button"
                            id="fecharModalHorario"
                            class="w-10 h-10 rounded-full hover:bg-gray-100 transition">

                            <span class="material-symbols-outlined">
                                close
                            </span>

                        </button>

                    </div>

                    <!-- Formulário -->

                    <form
                        action="index.php?action=cadastrarHorario"
                        method="POST"
                        class="p-8 space-y-6">

                        <!-- Dia -->

                        <div>

                            <label class="block mb-2 font-medium text-gray-700">
                                Dia da Semana
                            </label>

                            <select
                                name="dia_semana"
                                required
                                class="w-full border border-gray-300 rounded-xl px-4 py-3
                                focus:ring-2 focus:ring-[#457AA6] focus:outline-none">

                                <option value="">Selecione...</option>

                                <option value="0">Domingo</option>
                                <option value="1">Segunda-feira</option>
                                <option value="2">Terça-feira</option>
                                <option value="3">Quarta-feira</option>
                                <option value="4">Quinta-feira</option>
                                <option value="5">Sexta-feira</option>
                                <option value="6">Sábado</option>

                            </select>

                        </div>

                        <!-- Horários -->

                        <div class="grid grid-cols-2 gap-5">

                            <div>

                                <label class="block mb-2 font-medium text-gray-700">
                                    Horário de Abertura
                                </label>

                                <input
                                    type="time"
                                    name="open_at"
                                    required
                                    class="w-full border border-gray-300 rounded-xl px-4 py-3
                                    focus:ring-2 focus:ring-[#457AA6] focus:outline-none">

                            </div>

                            <div>

                                <label class="block mb-2 font-medium text-gray-700">
                                    Horário de Fechamento
                                </label>

                                <input
                                    type="time"
                                    name="close_at"
                                    required
                                    class="w-full border border-gray-300 rounded-xl px-4 py-3
                                    focus:ring-2 focus:ring-[#457AA6] focus:outline-none">

                            </div>

                        </div>

                        <!-- Rodapé -->

                        <div class="flex justify-end gap-3 pt-4 border-t">

                            <button
                                type="button"
                                id="cancelarHorario"
                                class="px-6 py-3 rounded-xl border border-gray-300 hover:bg-gray-100 transition">

                                Cancelar

                            </button>

                            <button
                                type="submit"
                                class="bg-[#457AA6] hover:bg-[#39688e]
                                text-white px-8 py-3 rounded-xl
                                flex items-center gap-2 transition">

                                <span class="material-symbols-outlined">
                                    save
                                </span>

                                Salvar

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </main>

    </div>

</div>

<script src="/restauranteAguaAzul/public/assets/js/horario.js"></script>
<script src="/restauranteAguaAzul/public/assets/js/configuracao.js"></script>
<script src="/restauranteAguaAzul/public/assets/js/dashboard.js"></script>

</body>

</html>