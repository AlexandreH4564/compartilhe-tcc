<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Olá, :name!', ['name' => Auth::user()->name]) }}
        </h2>
        teste
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <p>{{ $creditos }} Partilhes.</p>
            </div>
        </div>
    </div>
</x-app-layout>
