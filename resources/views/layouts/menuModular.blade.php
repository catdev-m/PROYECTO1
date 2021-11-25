<!-- Menu Modular -->
<style>
    .active a {
        border-left: 2px;
        border-color: red;
    }
</style>
    <div class="hidden sticky lg:inline-block w-2/12 h-screen bg-gray-900">
           <div class="block w-4/5 h-auto my-4 mx-5 text-center text-white">
                <p class="text-2xl">{{ Auth::user()->name }}</p>
                <p class="text-xs my-1">Bienvenido</p>
            </div>
            <div class="block w-100 h-8 px-2 py-2 bg-indigo-900 text-gray-400">
                <p class="text-sm">MODULOS</p>
            </div>
            <div class="block w-100 text-white">
            <div class="transition duration-200 block w-100 h-9 my-1 py-1.5 px-4 hover:bg-gray-800">
                <a href="dashboard" class="text-sm "><span class="lnr lnr-layers pr-2"></span>Tablero</a> 
            </div>
            <div class="transition duration-200 block w-100 h-9 my-1 py-1.5 px-4 hover:bg-gray-800">
                <a href="proyectos" class="text-sm"><span class="lnr lnr-pencil pr-2"></span>Proyectos</a>
            </div>
            <div class="transition duration-200 block w-100 h-9 my-1 py-1.5 px-4 hover:bg-gray-800">
                <a href="tareas" class="text-sm"><span class="lnr lnr-bookmark pr-2"></span>Tareas</a>
            </div>
            </div>
        </div> 