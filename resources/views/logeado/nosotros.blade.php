@include('/plantillas/navbarCliente')

<h1
    class="text-center m-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
    ¿Quiénes Somos?
</h1>
<center>
    <div style="display:flex; justify-content: center; align-items: center; width: 70%; margin: 5rem; gap: 3rem;">
        <div>
            <h2 class="text-4xl font-extrabold dark:text-white mb-4">Fonda San Francisco</h2>
            <p class="italic">
                Desde 1999, en nuestra fonda nos hemos dedicado a ofrecer una experiencia culinaria única, combinando
                los
                sabores tradicionales con un toque de calidad y calidez que nos caracteriza. A lo largo de estos años,
                hemos
                logrado crear un ambiente acogedor, donde cada platillo es preparado con los mejores ingredientes,
                pensando
                siempre en satisfacer a nuestros clientes.

                Nuestra pasión por la comida casera y nuestra dedicación al servicio han hecho que generaciones de
                comensales disfruten de nuestras especialidades. Cada día, trabajamos con el mismo compromiso que nos ha
                acompañado desde nuestros inicios, buscando siempre mejorar y hacer que tu visita sea inolvidable.

                Ven a disfrutar de los auténticos sabores de nuestra fonda, donde lo más importante eres tú.
            </p>
        </div>
        <div>
            <img src="{{ url('/storage/nosotros.jpg') }}" width="5000" alt="Fonda" style="border-radius: 50%;">
        </div>
    </div>
</center>

<h2 class="text-center text-4xl font-extrabold dark:text-white" style="margin-bottom: 3rem;">Nuestros Valores</h2>
<center>
    <div class="flex justify-center items-center" style="gap: 4rem; width: 70%;">
        <div class="grid gap-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" width="44" height="44" stroke-width="1.75">
                    <path
                        d="M11.46 20.846a12 12 0 0 1 -7.96 -14.846a12 12 0 0 0 8.5 -3a12 12 0 0 0 8.5 3a12 12 0 0 1 -.09 7.06">
                    </path>
                    <path d="M15 19l2 2l4 -4"></path>
                </svg>
            </div>
            <div>
                <h2 class="text-2xl font-extrabold dark:text-white">Alta Calidad</h2>
            </div>
            <div>
                Alimentos elaborados con frutas y verduras de la más alta calidad, nosotros nos preocupamos
                por que disfrutes tus alimentos.
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" width="44" height="44" stroke-width="1.75">
                    <path d="M5 12l5 5l10 -10"></path>
                </svg>
            </div>
            <div>
                <h2 class="text-2xl font-extrabold dark:text-white">Clientes Frecuentes</h2>
            </div>
            <div>
                Nuestros clientes frecuentes nos respaldan con sus reseñas a cerca de su experiencia.
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" width="44" height="44" stroke-width="1.75">
                    <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                    <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                    <path d="M17 17h-11v-14h-2"></path>
                    <path d="M6 5l14 1l-1 7h-13"></path>
                </svg>
            </div>
            <div>
                <h2 class="text-2xl font-extrabold dark:text-white">Paga desde nuestra web</h2>
            </div>
            <div>
                Al utilizar nuestra página para realizar el pago de tus compras ahorras tiempo.
            </div>
        </div>
    </div>
</center>

@include('/plantillas/footer')
