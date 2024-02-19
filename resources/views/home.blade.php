@extends('layouts.master')

@section('content')
    <section id="about">
        <div class="flex flex-col items-center justify-center gap-8 px-4 mx-auto my-12 lg:px-10 max-w-7xl">
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-6">
                    <img src="{{ Vite::useBuildDirectory("build")->asset('resources/images/about.webp') }}" alt="">
                </div>
                <div class="col-span-12 lg:col-span-6 flex flex-col gap-4 py-8">
                    <h1 class="text-5xl">
                        SUA EXPECTATIVA NOSSA <span class="text-portage-500">REALIDADE</span>
                    </h1>
                    <p>
                        Projetistas especializados integram nossa equipe, e de maneira personalizada seu projeto sai do
                        papel. Idealizamos as intenções de nossos clientes e como já é tradição, sempre executando o
                        planejamento no mais alto nível. Assim, com nossa tecnologia, entregamos ao mercado estruturas
                        de multi-formatos em eventos presenciais, virtuais ou híbridos por todo o Brasil.
                    </p>
                    <div>
                        <x-themes.portage.a class="block">
                            Fale conosco
                        </x-themes.portage.a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="metrics" class="bg-cover"
             style="background-image: url('{{ Vite::useBuildDirectory("build")->asset('resources/images/metricas.webp') }}'); background-repeat: no-repeat; background-position: center bottom;">
        <div class="flex flex-col items-center justify-center gap-8 px-4 mx-auto my-12 lg:px-10 max-w-7xl">
            <div class="flex flex-col gap-4 py-16">
                <h1 class="text-5xl">
                    Somos gratos por nossa trajetória até aqui
                </h1>
                <div class="flex justify-between items-center">
                    <div class="flex flex-col justify-center items-center">
                        <h1 class="text-portage-500 text-4xl font-bold">+8</h1>
                        <p>Anos de experiência</p>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <h1 class="text-portage-500 text-4xl font-bold">+5</h1>
                        <p>Estados do Brasil</p>
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <div style="width: 57px;height: 55px;" class="text-portage-500">
                            <svg preserveAspectRatio="xMidYMid meet" data-bbox="40.5 42.5 119 115.001"
                                 viewBox="40.5 42.5 119 115.001" height="200" width="200"
                                 xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation"
                                 aria-hidden="true" aria-label="" style="width: 57px;height: 55px;">
                                <g>
                                    <path d="M149.46 73.135l-.159.173v75.764h-45.963v-38.043a164.404 164.404 0 0 1-8.438 4.534v33.51H48.939v-18.874c-2.796.427-5.612.78-8.439 1.052v26.25h117.24V63.286a218.86 218.86 0 0 1-8.28 9.849z"
                                          fill="#889CE7" data-color="1"></path>
                                    <path d="M149.138 42.5C130.152 69.147 94.627 105.906 40.5 111.871v8.487c37.688-3.914 72.527-22.698 100.864-54.434A214.631 214.631 0 0 0 159.5 42.5h-10.362z"
                                          fill="#889CE7" data-color="1"></path>
                                </g>
                            </svg>
                        </div>
                        <p>Crescimento exponencial mesmo em<br/> meio a Pandemia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
