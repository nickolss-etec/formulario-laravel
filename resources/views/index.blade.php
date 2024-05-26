<x-layout title="Home">
    <x-slot:content>
        <main class="container mx-auto w-2/5 flex gap-10 flex-col">
            <div class="flex my-2 items-center justify-center">
                <div class="container">
                    <h2 class="text-5xl my-2">Devs Tips</h2>
                    <p>Um espaço acolhedor e inspirador, onde entusiastas da programação se reúnem para aprender,
                        compartilhar conhecimento e se aventurar no vasto universo da codificação.</p>
                </div>

                <div class="loadingspinner">
                    <div id="square1"></div>
                    <div id="square2"></div>
                    <div id="square3"></div>
                    <div id="square4"></div>
                    <div id="square5"></div>
                </div>
            </div>

            <div class="container">
                <img class="bg-contain rounded-lg" src="{{ asset('img/programacao.jpg') }}" alt="Pessoa programando">
            </div>

            <div class="flex gap-2 py-2">
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Encontre
                                uma comunidade ativa!</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Descubra onde a paixão pela
                            programação se encontra. Junte-se a uma comunidade ativa e compartilhe conhecimento, ideias
                            e desafios com outros desenvolvedores apaixonados.</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Veja Mais
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dicas de
                                várias técnologias</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Explore as melhores práticas,
                            truques e insights sobre uma variedade de tecnologias. Fique por dentro das últimas
                            tendências e aprimore suas habilidades com nossas dicas especializadas.</p>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Veja Mais
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </main>
    </x-slot:content>
</x-layout>
