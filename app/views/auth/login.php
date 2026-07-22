<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Água Azul</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-100 min-h-screen">

    <div class="min-h-screen flex">

        <!-- LADO ESQUERDO -->
        <div class="hidden lg:flex lg:w-1/2 flex-col">

            <!-- Faixa Azul -->
            <div class="bg-[#457AA6] h-32 flex items-center justify-center shadow-lg">

                <img
                    src="/restauranteAguaAzul/public/assets/img/agua-logo.png"
                    class="h-20"
                    alt="Logo Água Azul">

            </div>

            <!-- Imagem -->
            <div class="relative flex-1">

                <img
                    src="/restauranteAguaAzul/public/assets/img/20250812_123205.jpg"
                    class="absolute inset-0 w-full h-full object-cover"
                    alt="Restaurante">

                <div class="absolute inset-0 bg-black/50"></div>

                <div class="relative z-10 h-full flex flex-col justify-center px-16 text-white">

                    <h1 class="font-['Playfair_Display'] text-5xl font-bold mb-6">
                        Bem-vindo ao Água Azul
                    </h1>

                    <p class="text-lg leading-8 max-w-lg">
                        Acesse sua conta para gerenciar reservas,
                        acompanhar informações e aproveitar uma experiência exclusiva.
                    </p>

                </div>

            </div>

        </div>
        <!-- FORMULÁRIO -->
        <div class="w-full lg:w-1/2 flex items-center justify-center px-6">

            <div class="bg-white w-full max-w-lg rounded-3xl shadow-xl overflow-hidden">

                <div class="text-center mb-8">

                    <div class="lg:hidden bg-[#457AA6] border-b-4 border-[#F55F12] py-6 flex justify-center">

                        <img
                            src="/restauranteAguaAzul/public/assets/img/agua-logo.png"
                            class="h-20"
                            alt="Logo Água Azul">

                    </div>

                    <!-- Conteúdo -->
                    <div class="p-10 md:p-12">

                        <div class="text-center">

                            <h2 class="font-['Playfair_Display'] text-4xl font-bold text-[#457AA6]">
                                Login
                            </h2>

                            <p class="text-gray-500 mt-2">
                                Entre com seus dados para continuar
                            </p>

                        </div>

                </div>

                <?php if(isset($_SESSION['erro'])): ?>

                    <div class="bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-lg mb-5 mx-10">

                        <?= $_SESSION['erro']; ?>

                    </div>

                    <?php unset($_SESSION['erro']); ?>

                <?php endif; ?>

                <form
                    action="index.php?action=login"
                    method="POST"
                    class="space-y-5 px-10 py-2 md:p-12">

                    <div>

                        <label class="block text-sm font-medium mb-2">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            required
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:border-[#457AA6]">

                    </div>

                    <div>

                        <label class="block text-sm font-medium mb-2">
                            Senha
                        </label>

                        <input
                            type="password"
                            name="senha"
                            required
                            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:outline-none focus:border-[#457AA6]">

                    </div>

                    <button
                        type="submit"
                        class="w-full bg-[#F55F12] hover:bg-[#d94d07] transition text-white py-3 rounded-xl font-semibold">

                        Entrar

                    </button>

                </form>

                <div class="text-center mt-6">

                    <a
                        href="index.php?action=showRegister"
                        class="text-[#457AA6] font-medium hover:underline">

                        Não possui conta? Cadastre-se

                    </a>

                </div>

                <div class="text-center mt-4">

                    <a
                        href="index.php"
                        class="text-gray-500 hover:text-[#457AA6]">

                        ← Voltar ao site

                    </a>

                </div>

            </div>

        </div>

    </div>

</body>

</html>