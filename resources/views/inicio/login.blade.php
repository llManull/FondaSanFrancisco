@include('/plantillas/navbar')

<div class="flex">
    <form class="max-w-sm mx-auto" action="{{ url('/inicio/login') }}" method="POST">
        @csrf
        <h1
            class="text-center m-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Inicia Sesión Cliente!
        </h1>
        <div class="mb-5">
            <label for="email_cliente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo
                electrónico</label>
            <input type="email" id="email_cliente" name="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="name@flowbite.com" required />
        </div>
        <div class="mb-5">
            <label for="password_cliente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu
                contraseña</label>
            <input type="password" id="password_cliente" name="password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required />
        </div>
        <div class="flex items-start mb-5">
            <div class="flex items-center h-5">
                <input id="remember_cliente" type="checkbox"
                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                    required />
            </div>
            <label for="remember_cliente" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember
                me</label>
        </div>
        <div class="flex items-start mb-5 gap-2">
            <p>Aún no tienes una cuenta?</p>
            <a class="italic" style="color: blue;" href="/inicio/register">Crear Cuenta</a>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Iniciar Sesión
        </button>
    </form>
</div>

@include('/plantillas/footer')
