<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Água Azul</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-gray-50 text-[#0f0f0f] text-[15px] font-light overflow-x-hidden">

    <!-- NAVBAR -->
    <nav class="bg-[#457AA6] relative">

        <div class="max-w-7xl mx-auto px-6">

            <div class="flex items-center justify-between h-20">

                <!-- Botão Menu Mobile -->
                <button
                    id="menuBtn"
                    class="md:hidden text-white text-3xl">

                    ☰

                </button>

                <!-- Logo -->
                <div class="absolute left-1/2 -translate-x-1/2 md:static md:translate-x-0">

                    <img
                        class="h-12 md:h-14"
                        src="/restauranteAguaAzul/public/assets/img/agua-logo.png"
                        alt="logo">

                </div>

                <!-- Menu Desktop -->
                <ul class="hidden md:flex items-center space-x-8 text-white">

                    <li><a href="#">Início</a></li>
                    <li><a href="#">Cardápio</a></li>
                    <li><a href="#">Avaliações</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>

                </ul>

                <!-- Login Desktop -->
                <a
                    href="#"
                    class="hidden md:block bg-[#F55F12] border border-[#CC4500] text-white px-5 py-2 rounded-full font-medium hover:opacity-90 transition">

                    Login

                </a>

                <!-- Espaçador Mobile -->
                <div class="w-8 md:hidden"></div>

            </div>

        </div>

    </nav>

    <!-- Overlay -->
    <div
        id="overlay"
        class="fixed inset-0 bg-black/50 z-40 hidden">
    </div>

    <!-- Menu Lateral -->
    <div
        id="mobileMenu"
        class="fixed top-0 left-[-100%] w-72 h-full bg-white z-50 transition-all duration-300 shadow-xl">

        <div class="flex justify-between items-center p-5 border-b">

            <h2 class="font-bold text-lg">
                Menu
            </h2>

            <button
                id="closeMenu"
                class="text-2xl">

                ✕

            </button>

        </div>

        <ul class="flex flex-col p-5 space-y-5">

            <li><a href="#">Início</a></li>
            <li><a href="#">Cardápio</a></li>
            <li><a href="#">Avaliações</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Contato</a></li>

            <li class="pt-5">

                <a
                    href="#"
                    class="block text-center bg-[#F55F12] text-white py-3 rounded-full">

                    Login

                </a>

            </li>

        </ul>

    </div>

    <section class="relative h-[85vh]">

        <img
            src="/restauranteAguaAzul/public/assets/img/20250812_123205.jpg"
            alt="Restaurante Água Azul"
            class="w-full h-full object-cover">

        <div class="absolute inset-0 bg-black/50"></div>

        <div class="absolute inset-0 flex items-center justify-center">

            <div class="text-center text-white max-w-4xl px-6">

                <p class="font-['Playfair_Display'] uppercase tracking-[4px] text-orange-400 mb-4">
                    Experiência Gastronômica
                </p>

                <h1 class="font-['Playfair_Display'] text-4xl md:text-6xl font-bold mb-6">
                    Sabores que transformam momentos
                </h1>

                <p class="font-['Playfair_Display'] text-base md:text-lg mb-8">
                    Ingredientes selecionados, pratos exclusivos
                    e uma experiência inesquecível.
                </p>

                <div class="flex justify-center gap-4">

                    <a href="#cardapio"
                        class="bg-orange-600 hover:bg-orange-500 px-8 py-4 rounded-full font-semibold">
                        Ver Cardápio
                    </a>

                </div>

            </div>

        </div>

    </section>
    <section class="py-24 bg-[#f3f3f3]">

        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-16">

                <h2 class="font-['Playfair_Display'] text-4xl font-bold text-slate-800">
                    Assinaturas do Chef
                </h2>

                <p class="mt-4 text-gray-500">
                    Pratos exclusivos preparados com ingredientes selecionados.
                </p>

            </div>

            <div class="md:grid md:grid-cols-3 md:gap-8
                flex md:flex-none
                overflow-x-auto
                gap-6
                snap-x snap-mandatory
                scrollbar-hide">

                <!-- CARD 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md
                hover:-translate-y-2 transition
                min-w-[85%]
                md:min-w-0
                snap-center">

                    <img
                        src="https://images.unsplash.com/photo-1544025162-d76694265947"
                        alt="Risoto Imperial"
                        class="w-full h-64 object-cover">

                    <div class="p-6">

                        <h3 class="font-bold text-xl mb-2">
                            Risoto Imperial
                        </h3>

                        <p class="text-gray-500 mb-4">
                            Arroz arbóreo cremoso com camarões selecionados e toque cítrico.
                        </p>

                        <span class="font-bold text-orange-500 text-lg">
                            R$ 79,90
                        </span>

                    </div>

                </div>

                <!-- CARD 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md
                hover:-translate-y-2 transition
                min-w-[85%]
                md:min-w-0
                snap-center">

                    <img
                        src="https://images.unsplash.com/photo-1558030006-450675393462"
                        alt="Wagyu ao Vinho"
                        class="w-full h-64 object-cover">

                    <div class="p-6">

                        <h3 class="font-bold text-xl mb-2">
                            Wagyu ao Vinho
                        </h3>

                        <p class="text-gray-500 mb-4">
                            Corte premium grelhado servido com redução especial de vinho.
                        </p>

                        <span class="font-bold text-orange-500 text-lg">
                            R$ 129,90
                        </span>

                    </div>

                </div>

                <!-- CARD 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md
                hover:-translate-y-2 transition
                min-w-[85%]
                md:min-w-0
                snap-center">

                    <img
                        src="https://images.unsplash.com/photo-1563805042-7684c019e1cb"
                        alt="Éclair de Cacau"
                        class="w-full h-64 object-cover">

                    <div class="p-6">

                        <h3 class="font-bold text-xl mb-2">
                            Éclair de Cacau
                        </h3>

                        <p class="text-gray-500 mb-4">
                            Sobremesa artesanal recheada com creme de chocolate belga.
                        </p>

                        <span class="font-bold text-orange-500 text-lg">
                            R$ 34,90
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <section class="py-24">

        <div class="max-w-7xl mx-auto px-6">

            <h2 class="font-['Playfair_Display'] text-center text-4xl font-bold mb-16">
                O que nossos clientes dizem
            </h2>

            <div class="md:grid md:grid-cols-3 md:gap-6
                flex
                overflow-x-auto
                gap-4
                snap-x snap-mandatory
                scrollbar-hide">

                <div class="bg-white rounded-xl p-6 shadow-sm border-t-4 border-[#457AA6]
                min-w-[85%]
                md:min-w-0
                snap-center">
                    <div class="text-orange-500 mb-3">
                        ★★★★★
                    </div>

                    <p class="text-gray-600 mb-4">
                        Uma experiência incrível. Ambiente sofisticado e pratos impecáveis.
                    </p>

                    <strong>Felipe Gomes</strong>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-sm border-t-4 border-[#457AA6]
                min-w-[85%]
                md:min-w-0
                snap-center">
                    <div class="text-orange-500 mb-3">
                        ★★★★★
                    </div>

                    <p class="text-gray-600 mb-4">
                        Atendimento excelente e uma das melhores refeições que já provei.
                    </p>

                    <strong>Juliana Martins</strong>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-sm border-t-4 border-[#457AA6]
                min-w-[85%]
                md:min-w-0
                snap-center">
                    <div class="text-orange-500 mb-3">
                        ★★★★★
                    </div>

                    <p class="text-gray-600 mb-4">
                        Restaurante elegante, pratos lindos e sabores marcantes.
                    </p>

                    <strong>Ricardo Almeida</strong>
                </div>

            </div>

        </div>

    </section>
    <section class="bg-[#005B89] py-24 text-white">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid md:grid-cols-2 gap-16 items-center">

                <div>

                    <h2 class="font-['Playfair_Display'] text-4xl font-bold mb-8">
                        Nossa História
                    </h2>

                    <p class="leading-8 text-lg">
                        Desde nossa fundação buscamos oferecer uma experiência
                        gastronômica única, unindo tradição, qualidade
                        e inovação em cada prato servido.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-8 mt-10">

                        <div>
                            <h3 class="text-5xl font-bold">
                                06
                            </h3>
                            <span>Anos de História</span>
                        </div>

                        <div>
                            <h3 class="text-5xl font-bold">
                                12k+
                            </h3>
                            <span>Clientes Atendidos</span>
                        </div>

                    </div>

                </div>

                <div class="relative">

                    <img
                        src="https://images.unsplash.com/photo-1577219491135-ce391730fb2c?auto=format&fit=crop&w=800&q=80"
                        class="rounded-2xl shadow-2xl w-full h-[500px] object-cover">

                    <div class="absolute -bottom-4 left-1/2 -translate-x-1/2 rotate-[-5deg]
                                bg-[#F55F12] px-6 py-3 rounded-lg shadow-lg">

                        <span class="font-['Playfair_Display'] font-semibold text-white">
                            Qualidade e Tradição.
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <section class="py-24 bg-gray-100">

        <div class="max-w-7xl mx-auto px-6">

            <h2 class="font-['Playfair_Display'] text-center text-4xl font-bold mb-16">
                Galeria Visual
            </h2>

            <div class="hidden md:grid grid-cols-4 gap-4">

                <img
                    src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1200&q=80"
                    class="md:col-span-2 md:row-span-2 rounded-xl h-full object-cover">

                <img
                    src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?auto=format&fit=crop&w=800&q=80"
                    class="rounded-xl h-full object-cover">

                <img
                    src="https://images.unsplash.com/photo-1552566626-52f8b828add9?auto=format&fit=crop&w=800&q=80"
                    class="rounded-xl h-full object-cover">

                <img
                    src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&w=1200&q=80"
                    class="md:col-span-2 rounded-xl h-full object-cover">
            </div>
            
            <div class="md:hidden flex overflow-x-auto gap-4 snap-x snap-mandatory">

                <img
                    src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1200&q=80"
                    class="min-w-[90%] h-72 object-cover rounded-xl snap-center">

                <img
                    src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?auto=format&fit=crop&w=800&q=80"
                    class="min-w-[90%] h-72 object-cover rounded-xl snap-center">

                <img
                    src="https://images.unsplash.com/photo-1552566626-52f8b828add9?auto=format&fit=crop&w=800&q=80"
                    class="min-w-[90%] h-72 object-cover rounded-xl snap-center">

                <img
                    src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&w=1200&q=80"
                    class="min-w-[90%] h-72 object-cover rounded-xl snap-center">

                <img
                    src="https://images.unsplash.com/photo-1551024601-bec78aea704b?auto=format&fit=crop&w=1200&q=80"
                    class="min-w-[90%] h-72 object-cover rounded-xl snap-center">

            </div>
        </div>

    </section>
    <section class="py-24 text-center">

        <div class="max-w-4xl mx-auto px-6">

            <h2 class="font-['Playfair_Display'] text-5xl font-bold mb-6">
                Faça sua Reserva
            </h2>

            <p class="font-['Playfair_Display'] text-gray-500 mb-10">
                Garanta sua mesa e viva uma experiência gastronômica única.
            </p>

            <a
            href="#"
            class="bg-orange-500 hover:bg-orange-600 text-white px-10 py-4 rounded-full font-semibold">

            Entrar em Contato

            </a>

        </div>

    </section>

    <footer class="relative bg-[#F55F12] radios text-white mt-[150px] pt-32 pb-8">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid md:grid-cols-[auto_auto] justify-center gap-24 text-center md:text-left">

                <div>
                    <h3 class="text-3xl font-bold text-[#457AA6] uppercase mb-4">
                        Menu
                    </h3>
                    <ul class="space-y-2">
                        <li><a class="hover:opacity-70 transition duration-300" href="#">Início</a></li>
                        <li><a class="hover:opacity-70 transition duration-300" href="#">Cardápio</a></li>
                        <li><a class="hover:opacity-70 transition duration-300" href="#">Avaliações</a></li>
                        <li><a class="hover:opacity-70 transition duration-300" href="#">Sobre</a></li>
                        <li><a class="hover:opacity-70 transition duration-300" href="#">Contato</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-3xl font-bold text-[#457AA6] uppercase mb-4">
                        Informações
                    </h3>
                    <ul class="space-y-2">
                        <li>(19) 99999-9999</li>
                        <li>(19) 99999-9999</li>
                        <li>CNPJ: 45.123.571/0001-51</li>
                        <li>Estrada Urutuba, 1165 – Estiva II, Estiva Gerbi, SP</li>
                    </ul>
                </div>

            </div>

            <div class="flex justify-center mt-12">
                <a href="#"
                class="bg-[#457AA6] text-white px-8 py-3 rounded-full font-semibold hover:opacity-90 transition">
                    Política de Privacidade
                </a>
            </div>

            <div class="border-t border-white/40 mt-10 pt-6 text-center text-sm">
                ©2025 todos os direitos reservados. Desenvolvido por Thiago Lopes
            </div>

        </div>

    </footer>
    <script src="/restauranteAguaAzul/public/assets/js/home.js"></script>

</body>
</html>