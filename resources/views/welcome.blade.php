@include('/plantillas/navbar')

<header style="margin: 0 auto;">
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96" style="height: 45rem">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ url('/storage/enchiladas.avif') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ url('/storage/tacos.avif') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ url('/storage/hamburguesa.avif') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ url('/storage/pastor.webp') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ url('/storage/postre.webp') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</header>

<h1
    class="mt-4 text-center mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
    Bienvenido a fonda <span class="text-blue-600 dark:text-blue-500">San Francisco</span>
</h1>
<p class="text-center mb-4 text-lg font-normal text-white-500 lg:text-xl dark:text-white-400">
    Comida de la mejor Higiene y Calidad!
</p>

<div style="margin: 1rem 5rem;">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ url('/storage/mollete.jpg') }}"alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ url('/storage/baguette.avif') }}"" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ url('/storage/torta.avif') }}"" alt="">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ url('/storage/sopes.jpg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ url('/storage/agua.jpg') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ url('/storage/enchiladas.avif') }}" alt="">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ url('/storage/enchiladas.webp') }}"
                    alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ url('/storage/hamburguesa.avif') }}"
                    alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ url('/storage/flan.webp') }}" alt="">
            </div>
        </div>
        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ url('/storage/tacos.avif') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ url('/storage/postre.webp') }}" alt="">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ url('/storage/birria.avif') }}" alt="">
            </div>
        </div>
    </div>
</div>

@include('/plantillas/footer')
