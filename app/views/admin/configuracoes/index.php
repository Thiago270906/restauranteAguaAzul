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

                <a href="/restauranteAguaAzul/public/"
                    class="group flex items-center gap-4
                    px-4 py-4
                    rounded-xl
                    hover:bg-white/15
                    transition">

                    <span class="material-symbols-outlined group-hover:-translate-x-1 transition">
                        arrow_back
                    </span>

                    <span class="font-medium">
                        Voltar ao Website
                    </span>

                </a>
                
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
                
                <a href="index.php?action="
                    class="group flex items-center gap-4
                    px-4 py-4
                    rounded-xl
                    hover:bg-white/15
                    transition">

                    <span class="material-symbols-outlined group-hover:-translate-x-1 transition">
                        home
                    </span>

                    <span class="font-medium">
                        Cardapio
                    </span>

                </a>
                
                <a href="index.php?action="
                    class="group flex items-center gap-4
                    px-4 py-4
                    rounded-xl
                    hover:bg-white/15
                    transition">

                    <span class="material-symbols-outlined group-hover:-translate-x-1 transition">
                        home
                    </span>

                    <span class="font-medium">
                        Avaliações
                    </span>

                </a>
                
                <a href="index.php?action="
                    class="group flex items-center gap-4
                    px-4 py-4
                    rounded-xl
                    hover:bg-white/15
                    transition">

                    <span class="material-symbols-outlined group-hover:-translate-x-1 transition">
                        home
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

        </main>

    </div>

</div>

<script src="/restauranteAguaAzul/public/assets/js/configuracao.js"></script>
<script src="/restauranteAguaAzul/public/assets/js/dashboard.js"></script>

</body>

</html>