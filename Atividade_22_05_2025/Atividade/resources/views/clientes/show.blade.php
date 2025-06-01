<x-app-layout>
    <x-slot name="header">
        <div class='flex items-center justify-between'>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Detalhes do Cliente') }}</h2>
            <a href="{{ route('clientes.index') }}" class='bg-gray-600 hover:bg-gray-800 px-6 py-2 rounded text-white'>
                Voltar
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">{{ $cliente->nome }}</h1>
                <p><strong>Email:</strong> {{ $cliente->email }}</p>
                <p><strong>Criado em:</strong> {{ $cliente->created_at->format('d/m/Y H:i') }}</p>
                <p><strong>Atualizado em:</strong> {{ $cliente->updated_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
