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
                    Navegação
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

            </div>

            <!-- RODAPÉ -->

            <div class="border-t border-white/20 p-6 text-sm text-white/70">

                Restaurante Água Azul

                <br>

                Painel Administrativo

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

            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-12">

                <h2 class="titulo text-4xl text-slate-800 mb-6">

                    Bem-vindo!

                </h2>

                <p class="text-gray-600 leading-8 max-w-3xl">

                    Este é o painel administrativo do Restaurante Água Azul.

                    Aqui você poderá gerenciar produtos, categorias,
                    reservas, usuários, pedidos e todas as informações
                    do restaurante.

                </p>

                <div class="mt-10">

                    <a href="/restauranteAguaAzul/public/"
                        class="inline-flex items-center gap-3
                        bg-[#F55F12]
                        hover:bg-[#de530f]
                        text-white
                        px-7
                        py-4
                        rounded-full
                        font-semibold
                        transition">

                        <span class="material-symbols-outlined">

                            arrow_back

                        </span>

                        Voltar ao Website

                    </a>

                </div>

            </div>

        </main>

    </div>

</div>

<script src="/restauranteAguaAzul/public/assets/js/dashboard.js"></script>

</body>

</html>