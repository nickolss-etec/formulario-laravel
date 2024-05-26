<x-layout title="Sobre nós">
    <x-slot:content>
        <main class="container mx-auto w-2/5 flex gap-6 flex-col">
            <img class="rounded-lg" src="{{ asset('img/programadora.jpg') }}" alt="Pessoa programando">
            <h2 class="text-4xl">Quem somos?</h2>
            <p>Bem-vindo à nossa comunidade de desenvolvedores! Aqui, a paixão pela programação e tecnologia nos une.
                Fundada por um grupo de entusiastas, nossa jornada começou com o objetivo de criar um espaço onde
                desenvolvedores pudessem se conectar, aprender e colaborar.
            </p>

            <div>
                <h3 class="text-2xl font-bold">Nossa Missão</h3>
                <p>Nossa missão é capacitar desenvolvedores de todos os níveis. Valorizamos a diversidade, a ética e a
                    inovação. Acreditamos que o aprendizado contínuo e o networking são essenciais para o crescimento
                    profissional.</p>
            </div>

            <div>
                <h3 class="text-2xl font-bold">Quem Somos</h3>
                <p>Conheça nossa equipe apaixonada por tecnologia! Desde os fundadores até os moderadores, todos
                    compartilhamos o amor pela codificação. Estamos comprometidos em tornar esta comunidade um espaço
                    acolhedor e educativo.</p>
            </div>

            <div>
                <h3 class="text-2xl font-bold">Conquistas e Contribuições</h3>
                <p>Nosso crescimento é notável: mais de 10.000 membros ativos e uma série de projetos concluídos.
                    Realizamos
                    hackathons, workshops e meetups que impactaram positivamente a carreira de muitos desenvolvedores.
                </p>
            </div>

            <div>
                <h3 class="text-2xl font-bold">O Futuro</h3>
                <p>Estamos apenas começando! Nossa visão é expandir ainda mais, oferecendo conteúdo relevante e criando
                    oportunidades para que todos possam aprender e crescer. Junte-se a nós nessa jornada!</p>
            </div>
        </main>
    </x-slot:content>
</x-layout>
