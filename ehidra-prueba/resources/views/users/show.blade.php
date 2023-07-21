<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuario' . " " . $user->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div x-data="{ open: false }" class="flex items-stretch">
                        <div><img class="object-cover h-48 w-96" style="display:inline-block;float: left; " src="https://www.pngmart.com/files/21/Account-User-PNG-Photo.png" alt="Usuario"/></div>
                        <span class="inline-block align-baseline">
                            <h1 class="text-4xl pl-6">{{"Nombre: " . $user->name}}</h1>
                            <h1 class="text-4xl pl-6">{{"Email: " . $user->email}}</h1>
                            <div class="self-auto text-2xl pl-6 pt-6"><button @click="open = true"><h2 class="no-underline hover:underline"> Más detalle... </h2></button>
                                <ul x-show="open" @click.outside="open = false">
                                    <li><h1 class="text-4xl"> {{"Fecha de creación: " . $user->created_at}} </h1></li>
                                    <li><h1 class="text-4xl"> {{"Verificado el: " . $user->email_verified_at}} </h1></li>
                                </ul>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>