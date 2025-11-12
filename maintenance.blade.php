<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ setting('hotel_name') }} - Manutenção</title>

    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
    @vite(['resources/themes/atom/css/app.css', 'resources/themes/atom/js/app.js'])

    <style>
        body {
            font-family: Arial, sans-serif;
            color: white;
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            overflow-x: hidden;
        }

        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.4);
            z-index: 0;
        }

        .container {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 1200px;
            margin: 2rem auto;
            gap: 2rem;
            padding: 0 1rem;
        }

        .col {
            flex: 1;
            min-width: 280px;
        }

        .announcements, .info-card {
            background: rgba(255,255,255,0.05);
            padding: 1rem;
            border-radius: 12px;
            font-size: 0.875rem;
            max-height: 500px;
            overflow-y: auto;
        }

        .announcements h2, .info-card h2 {
            text-align: center;
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .announcements ul {
            list-style: disc;
            list-style-position: inside;
            color: #ccc;
            padding-left: 1rem;
        }

        .countdown-wrapper {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .count-card {
            text-align: center;
            min-width: 80px;
            background: rgba(0,0,0,0.4);
            border-radius: 8px;
            padding: 0.5rem;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }

        .count-card span {
            display: block;
            font-size: 2.5rem;
            font-weight: bold;
        }

        .count-card small {
            display: block;
            margin-top: 0.25rem;
            font-size: 1rem;
            color: #ccc;
        }

        .nostalgia-container {
            text-align: center;
            margin-top: 1rem;
        }

        .nostalgia-image {
            width: 300px;
            max-width: 90%;
            border-radius: 12px;
            margin: 1rem auto;
            display: block;
        }

        .video-wrapper {
            position: relative;
            width: 100%;
            max-width: 720px;
            padding-top: 56.25%;
            margin: 1rem auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
        }

        .video-wrapper video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .info-card p {
            line-height: 1.6;
            color: #ccc;
            margin-bottom: 0.5rem;
        }

        .bottom-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .discord-btn, .staff-btn {
            padding: 0.75rem 1.5rem;
            border-radius: 9999px;
            font-weight: bold;
            text-align: center;
            color: white;
            transition: all 0.3s ease;
        }

        .discord-btn {
            background-color: #7289DA;
        }
        .discord-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.4);
        }

        .staff-btn {
            background-color: rgba(255,255,255,0.7);
            color: black;
        }
        .staff-btn:hover {
            background-color: rgba(255,255,255,1);
        }

        .text-section {
            text-align: center;
            margin-bottom: 2rem;
        }
    </style>
</head>

<body>
    <x-messages.flash-messages />

    <x-modals.modal-wrapper class="flex flex-col justify-center items-center h-full relative z-10">
        @guest
        <div class="absolute top-6 right-6 z-20 flex gap-2">
            <button class="staff-btn" @click="open = !open">Login Staff</button>
            <a href="https://discord.gg/seulink" target="_blank" class="discord-btn">Discord</a>
        </div>
        @endguest

        <div class="text-section">
            <h1 class="text-3xl font-semibold">Manutenção</h1>
        </div>

        <div class="container">
            <!-- Novidades (fixo) -->
            <div class="col announcements">
                <h2>Novidades do IHABI</h2>
                <ul>
                    <li>Eventos especiais com prêmios exclusivos.</li>
                    <li>Itens raros para decoração de quartos.</li>
                    <li>Sistema de conquistas e badges.</li>
                    <li>Comunidade interativa com chat e grupos.</li>
                    <li>Economia funcional com moedas e trocas.</li>
                    <li>Novos recursos de missões diárias.</li>
                    <li>Atualizações de avatares e roupas.</li>
                    <li>Quartos temáticos e eventos sazonais.</li>
                    <li>Mini-games internos com rankings.</li>
                    <li>Novos badges e efeitos exclusivos.</li>
                    <li>Eventos surpresa semanais com prêmios únicos.</li>
                    <li>Itens exclusivos por login diário.</li>
                    <li>Personalização completa de quartos e avatares.</li>
                    <li>Sistema de recompensas para jogadores ativos.</li>
                    <li>Novos efeitos visuais e sonoros.</li>
                    <li>Interação social melhorada com amigos e grupos.</li>
                    <li>Atualizações de CMS e segurança.</li>
                    <li>Correções de bugs e melhorias de performance.</li>
                    <li>Novos tutoriais e guias para iniciantes.</li>
                    <li>Novos mini-games interativos e competições.</li>
                </ul>
            </div>

            <!-- Contagem central -->
            <div class="col">
                <div class="countdown-wrapper">
                    <div class="count-card">
                        <span id="days">0</span>
                        <small>Dias</small>
                    </div>
                    <div class="count-card">
                        <span id="hours">0</span>
                        <small>Horas</small>
                    </div>
                    <div class="count-card">
                        <span id="minutes">0</span>
                        <small>Minutos</small>
                    </div>
                    <div class="count-card">
                        <span id="seconds">0</span>
                        <small>Segundos</small>
                    </div>
                </div>

                <!-- Foto nostálgica fixa -->
                <div class="nostalgia-container">
                    <img src="{{ asset('assets/images/retros/foto1.png') }}" 
                         class="nostalgia-image" 
                         alt="IHABI Nostalgia">
                </div>
            </div>

            <!-- Vídeo + Informações importantes -->
            <div class="col text-center">
                <h2>Vídeo</h2>
                <div class="video-wrapper">
                    <video src="https://i.imgur.com/tkjjflo.mp4" controls autoplay muted loop controlsList="nodownload"></video>
                </div>

                <div class="info-card">
                    <h2>Informações importantes</h2>
                    <p>Estamos atualizando todos os sistemas do IHABI, trazendo melhorias em CMS, segurança e performance.</p>
                    <p>Eventos, conquistas e economia estão sendo desenvolvidos com exclusividade.</p>
                    <p>Novos efeitos visuais, itens raros e personalização de quartos e avatares estão em fase de finalização.</p>
                    <p>Fique atento às nossas novidades no Discord e nas redes sociais para não perder nenhuma atualização.</p>
                </div>
            </div>
        </div>

        <!-- Staff Login Modal -->
        <x-modals.regular-modal x-model="show {{ session()->get('wrong-auth') }}">
            <x-auth.login-form />
        </x-modals.regular-modal>
    </x-modals.modal-wrapper>

    <script>
        // Contagem regressiva
        let targetDate = new Date('2026-01-05T00:00:00').getTime();
        let stored = localStorage.getItem('ihabi_countdown');
        if (!stored) localStorage.setItem('ihabi_countdown', targetDate);
        else targetDate = parseInt(stored);

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = targetDate - now;
            if(distance<0){
                document.getElementById('days').innerText=0;
                document.getElementById('hours').innerText=0;
                document.getElementById('minutes').innerText=0;
                document.getElementById('seconds').innerText=0;
                return;
            }

            const days = Math.floor(distance / (1000*60*60*24));
            const hours = Math.floor((distance % (1000*60*60*24)) / (1000*60*60));
            const minutes = Math.floor((distance % (1000*60*60)) / (1000*60));
            const seconds = Math.floor((distance % (1000*60)) / 1000);

            document.getElementById('days').innerText=days;
            document.getElementById('hours').innerText=hours;
            document.getElementById('minutes').innerText=minutes;
            document.getElementById('seconds').innerText=seconds;
        }
        updateCountdown();
        setInterval(updateCountdown, 1000);

        // Fundo fixo dinâmico por hora (sem movimento)
        function updateBackground(){
            const hour = new Date().getHours();
            let bgUrl = '';

            if(hour >= 6 && hour < 9){
                bgUrl = 'https://i.imgur.com/jS816lR.png'; // amanhecendo
            } else if(hour >= 9 && hour < 18){
                bgUrl = 'https://i.imgur.com/hCHhqh9.gif'; // dia
            } else if(hour >= 18 && hour < 24){
                bgUrl = 'https://i.imgur.com/My7TMaS.png'; // noite
            } else {
                bgUrl = 'https://i.imgur.com/rNEj0Xl.png'; // madrugada
            }

            document.body.style.backgroundImage = `url(${bgUrl})`;
        }
        updateBackground();
        setInterval(updateBackground, 60000);
    </script>
</body>
</html>
