<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edição de Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mb-4">Editar Novel de acesso do usuario <strong>{{ $user->name }}</strong></p>
                    <p class="mb-4">Nivel de acesso atual: <strong>{{ $user->nivel }}</strong></p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
