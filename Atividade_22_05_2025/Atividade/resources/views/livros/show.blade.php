<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Detalhes do Livro') }}</h2>
    </x-slot>

    <div class="py-12 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4">{{ $livro->titulo }}</h1>
            <p><strong>Autor:</strong> {{ $livro->autor }}</p>
            <p><strong>Cliente vinculado:</strong> {{ $livro->cliente->nome ?? 'Não vinculado' }}</p>

            <a href="{{ route('livros.index') }}" class="mt-4 inline-block bg-gray-600 hover:bg-gray-800 text-white px-4 py-2 rounded">
                Voltar à lista
            </a>
        </div>
    </div>
</x-app-layout>
